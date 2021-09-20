<?php if(get_field('format') =='contain'){?>
<section class="block block-bild" style="
				background-image:url(<?php the_field('bild');?>);height:<?php the_field('hoehe');?>vh;background-size:contain;background-repeat:no-repeat;background-color:#a82717">
</section>

<?php }else{?>
<section class="block block-bild" style="background-image:url(<?php the_field('bild');?>);height:<?php the_field('hoehe');?>vh;background-size:cover">
</section>
<?php }?>