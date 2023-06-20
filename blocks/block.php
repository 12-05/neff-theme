<section class="block block-block align-<?php the_field('ausrichtung');?>" style="<?php if (get_field('block_farbig')) {echo 'background-color:var(--main);color:#FFF!important';}?>">

<?php $bild = wp_get_attachment_image_url(get_field('bild'), "large");?>
<?php $caption = wp_get_attachment_caption(get_field('bild'));?>
    <div class="image">
        <?php if ($caption) {?>
            <div class="caption"><?php echo $caption; ?></div>

        <?php }?>

        <img style="<?php if (get_field('contain')) {echo 'object-fit:contain;';}?>" src="<?php echo $bild; ?>" />
    </div>
    <div class="content" >
        <span class="subline"style="<?php if (get_field('block_farbig')) {echo 'color:#FFF!important';}?>"><?php the_field('subline');?></span>
        <h2 class="headline" style="<?php if (get_field('block_farbig')) {echo 'color:#FFF!important';}?>"><?php the_field('headline');?></h2>
        <div class="text">
            <?php the_field('text');?>
        </div>
        <?php
$link = get_field('link');
if ($link): ?>
            <a href="<?php echo $link['url']; ?>" class="link" target="<?php echo $link['target']; ?>"></a>
            <?php endif;
?>

    </div>
</section>