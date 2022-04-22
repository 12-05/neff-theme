<section class="block block-block align-<?php the_field('ausrichtung');?>" style="<?php if(get_field('block_farbig')) {echo 'background-color:var(--main);color:#FFF!important';}?>">
    <div class="image">
        <img src="<?php the_field('bild');?>" />
    </div>
    <div class="content" >
        <span class="subline"style="<?php if(get_field('block_farbig')) {echo 'color:#FFF!important';}?>"><?php the_field('subline');?></span>
        <h2 class="headline" style="<?php if(get_field('block_farbig')) {echo 'color:#FFF!important';}?>"><?php the_field('headline');?></h2>
        <div class="text">
            <?php the_field('text');?>
        </div>
        <?php 
            $link = get_field('link');
            if($link):?>
            <a href="<?php echo $link['url'];?>" class="link" target="<?php echo $link['target'];?>"></a>
            <?php endif;
        ?>
    </div>
</section>