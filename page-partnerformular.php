<?php acf_form_head(); ?>
<?php get_header(); ?>
<?php if(post_password_required()) { ?>
<div class="page-wrapper">
        <h1>Partnerformular</h2>
  		<?php 
            echo get_the_password_form();
        ?>
 </div>
<?php } else {?>
<div class="page-wrapper">
        <h1>Partnerformular</h2>
  		<?php acf_form(array(
        'post_id'       => 'new_post',
                'post_title'    => true,

        'new_post'      => array(
            'post_type'     => 'partner',
            'post_status'   => 'publish'
        ),
        'label_placement' => 'left',

        'submit_value'  => 'Neuen Partner erstellen'
    )); ?>
    <?php acf_enqueue_uploader();?>
    <p>Bei technischen Schwierigkeiten oder Rückfragen melden Sie sich bitte unter spanke@neue-effizienz.de.</p>
 </div>
<?php } ?>
 
	

<?php get_footer(); ?>