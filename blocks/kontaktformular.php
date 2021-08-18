<section class="block-kontaktformular">
    <span class="subline"><?php the_field('subline');?></span>
    <h2 class="headline"><?php the_field('headline');?></h2>
    <?php echo do_shortcode('[contact-form-7 id="'.get_field('formular').'" title="Veranstaltungen"]');?>
</section>