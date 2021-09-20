<section class="block block-logowall">
        <h2><?php the_field('headline');?></h2>
        <?php $logos = get_field('logos');?>
        <div class="logo-grid">
                <?php if($logos):foreach($logos as $logo):?>
                <a href="<?php echo $logo['link'];?>" class="logo">
                        <img src="<?php echo $logo['bild'];?>" alt="Logo">
                </a>
                <?php endforeach;endif;?>
        </div>
</section>