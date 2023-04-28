<?php $bild = wp_get_attachment_image_url(get_field('bild'), "full");?>
<?php $caption = wp_get_attachment_caption(get_field('bild'));?>

<?php if (get_field('format') == 'contain') {?>

<section class="block block-bild" style="
				background-image:url('<?php echo $bild; ?>');height:<?php the_field('hoehe');?>vh;background-size:contain;background-repeat:no-repeat;background-color:#a82717">
<?php if ($caption) {?>
	<div class="caption"><?php echo $caption; ?></div>
<?php }?>
</section>

<?php } else {?>
<section class="block block-bild" style="background-image:url(<?php echo $bild; ?>);height:<?php the_field('hoehe');?>vh;background-size:cover">
<?php if ($caption) {?>
	<div class="caption"><?php echo $caption; ?></div>
<?php }?>
</section>
<?php }?>
