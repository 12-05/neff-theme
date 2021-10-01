<section class="block block-text" <?php if(!get_field('text') { ?>style="padding-bottom:0;"<?php } ?>>
    <?php 
        $headline = get_field('headline');
        $subline = get_field('subline');
    ?>
    <?php if($subline) {?><span class="subline"><?php echo $subline;?></span><?php } ?>
    <?php if($headline) {?><h2 class="headline"><?php echo $headline;?></h2><?php } ?>
    <div class="text"><?php the_field('text');?></div>
</section>