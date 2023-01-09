<?php 
    $id = get_field('youtube_id');
    $farbe = get_field('hintergrundfarbe');
    $headline = get_field('headline');
?>
<section class="block block-youtube <?php if(get_field('hintergrundfarbe')) {echo 'youtube-bg';}?>" style="background-color:<?php echo $farbe;?>">
    <div class="inner">
        <?php if($headline) {?><h2 class="headline"><?php echo get_field('headline');?></h2><?php } ?>

        <iframe src="https://www.youtube.com/embed/<?php echo $id;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
</section>