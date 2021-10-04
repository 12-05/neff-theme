<?php 
    class NEFF_RegisterService {
        public function __construct() {
            add_action('rest_api_init', array($this, 'register_endpoint'));
        }

        public function register_endpoint() {
            register_rest_route( 'neff/v1', '/register/(?P<id>\d+)', array(
                'methods' => 'POST',
                'callback' => array($this, 'handle_request'),
            ));
        }

        public function handle_request($request) {
            $post = get_post($request['id']);
            if($post->post_type === "event") {
                $this->add_registration($request);
                $this->send_mail_to_user($request);
                $this->send_mail_to_admin($request);
                return wp_send_json_success('registration_added');
            } else {
                return new WP_Error('event could not be found');
            }
        }

        public function add_registration($request) {
            $row = array(
                'name' => $request['name'], 
                'email' => $request['email'],
                'company' => $request['company'],
                'date' => date("d.m.Y. H:i:s")
            );
            $add = add_row('anmeldungen', $row, $request['id']);
        }

        public function send_mail_to_user($request) {
            require_once('wp-load.php');
            $id = $request['id'];
            $to = $request['email'];
            $replyto = get_field('event_mail', $id);
            $subject = 'Ihre Anmeldung für das Event: '.get_the_title($id);
            $headers = array('Content-Type: text/html; charset=UTF-8');
            $headers[] = 'From: Bergisch Metall <noreply@bergisch-metall.de>';
            $headers[] =   'Reply-To: Bergisch Metall <'.$replyto.'>';
            ob_start();
            include 'templates/event-user-mail.php';
            $body = ob_get_clean();
            wp_mail( $to, $subject, $body, $headers );

        }

        public function send_mail_to_admin($request) {
            require_once('wp-load.php');
            $id = $request['id'];
            $to = get_field('event_mail', $id);
            
            $subject = 'Neue Anmeldung für das Event: '.get_the_title($id);
            $headers = array('Content-Type: text/html; charset=UTF-8');
            $headers[] = 'From: Bergisch Metall <noreply@bergisch-metall.de>';
            $headers[] =   'Reply-To: '.$request['name'].' <'.$request['email'].'>';
            ob_start();
            include 'templates/event-admin-mail.php';
            $body = ob_get_clean();
            wp_mail( $to, $subject, $body, $headers );
        }
    }  
    new NEFF_RegisterService();