<section class="block block-grid">
<?php $links = get_field('links');
        if($links):foreach($links as $link):?> 
        <a  href="<?php echo $link['link']['url'];?>" target="<?php echo $link['link']['target'];?>" class="single">
            <div class="image" style="background-image:url(<?php echo $link['bild'];?>)"></div>
            <div class="content">
                <div class="subline">
                    <?php echo $link['subline'];?>
                </div>
                 <div class="headline">
                    <?php echo $link['headline'];?>
                </div>
                <div class="kurztext">
                    <?php echo $link['kurztext'];?>
                </div>
                <div class="link"></div>
            </div>
        </a>
        <?php endforeach;endif;?>
</section>