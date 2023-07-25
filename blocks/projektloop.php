<section class="block block-projektloop">
    <?php
$projekte = get_posts(array(
    'post_type' => "projekt",
    'posts_per_page' => -1,
));
if (get_field('projektauswahl')) {
    $projekte = get_field('projektauswahl');
}
if ($projekte): foreach ($projekte as $projekt): ?>


			        <a target="<?php echo get_field('externer_link', $projekt->ID) ? "_blank" : "_self"; ?>" href="<?php echo get_field('externer_link', $projekt->ID) ? get_field('externer_link', $projekt->ID) : get_permalink($projekt->ID); ?>"class="projekt">
			            <div class="bild" style="background-image:url(<?php echo get_field('bild', $projekt->ID); ?>"></div>
			            <div class="content">
			                <div style="color:<?php echo getProjectColor($projekt->ID); ?>" class="subline">Projekt</div>
			                <div class="headline"><?php echo $projekt->post_title; ?></div>
			                <div class="description"><?php the_field('kurzbeschreibung', $projekt->ID);?></div>
			                <span style="background:<?php echo getProjectColor($projekt->ID); ?>" class="link"></span>
			            </div>
			        </a>
			        <?php endforeach;endif;
?>
</section>