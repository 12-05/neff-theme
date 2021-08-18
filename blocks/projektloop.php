<section class="block block-projektloop">
    <?php 
        $projekte = get_posts(array(
            'post_type' => "projekt", 
            'posts_per_page' => -1,
        ));
        if($projekte):foreach($projekte as $projekt):?>
        <a href="<?php echo get_permalink($projekt->ID);?>"class="projekt">
            <div class="bild" style="background-image:url(<?php echo get_field('bild', $projekt->ID);?>"></div>
            <div class="content">
                <div class="subline">Projekt</div>
                <div class="headline"><?php echo $projekt->post_title;?></div>
                <div class="description"><?php the_field('kurzbeschreibung', $projekt->ID);?></div>
                <span class="link"></span>
            </div>
        </a>
        <?php endforeach;endif;
    ?>
</section>