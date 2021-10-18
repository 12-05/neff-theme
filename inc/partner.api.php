<?php 

    class NEFFPartnerAPI {
        public function __construct() {
            add_action('rest_api_init', array($this, 'register_endpoints'));
        }

        public function register_endpoints() {

            register_rest_route( 'neff/v1', '/partner', array(
                'methods' => 'GET',
                'callback' => array($this, 'get_all'),
            ));

            register_rest_route( 'neff/v1', '/partner/(?P<id>\d+)', array(
                'methods' => 'GET',
                'callback' => array($this, 'get_single'),
            ));
        }

        public function get_all($request) {
            $posts = get_posts( 
                array(
                    'post_type' => 'partner', 
                    'posts_per_page' => -1
                )
            );
            if($posts) {
                $data = array_map(function($item) {
                    return array(
                        'id' => $item->ID,
                        'title' => $item->post_title,
                        'kategorie' => get_field('kategorie', $item->ID),
                        'position' => get_field('position', $item->ID)
                    );
                }, $posts);
                return $data;
            }
            return [];
            
        }

        public function get_single($request) {
            $id = $request['id'];
            $post = get_post($id);
            if(!$post) return new WP_Error('Not found');
            $data = get_fields($id);
            $data['id'] = $id;
            $data['title'] = $post->post_title;
            return $data;
        }

    }
    new NEFFPartnerAPI();