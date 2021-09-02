<section class="block block-ansprechpartner">
    <h2><?php the_field('headline');?></h2>
    <div class="grid">
        <?php 
            $as = get_field('ansprechpartner');
            if($as):foreach($as as $a):?>
            <a href="<?php echo get_permalink($a);?>" class="item">
                <div class="profilbild" style="background-image:url(<?php the_field('profilbild', $a);?>)"></div>
                <div class="content">
                   <div class="unternehmen"><?php the_field('unternehmen', $a);?></div>
                   <div class="name"><?php echo get_the_title($a);?></div> 
                   <div class="position"><?php the_field('position_kurz',$a);?></div> 
                </div>
            </a>
            
            <?php endforeach;endif;?>
    </div>
</section>