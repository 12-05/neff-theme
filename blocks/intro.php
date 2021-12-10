<section class="block block-intro">
     <div class="content">
        <?php if(get_field('subline')) {?>        <span class="subline"><?php the_field('subline');?></span>
<?php } ?>
         <?php if(get_field('headline')) {?>        <h2 class="headline"><?php the_field('headline');?></h2>
<?php } ?>
        <div class="text">
            <?php the_field('text');?>
        </div>
       
    </div>
    <div class="logos">
        <span class="logo_subline"><?php the_field('logo_subline');?></span>
        <ul>
        <?php $logos = get_field('logos');
        if($logos):foreach($logos as $logo):?>
        <?php if($logo['link']) {?>
            <li><a href="<?php echo $logo['link']['url'];?>" target="<?php echo $logo['link']['target'];?>"><img src="<?php echo $logo['logo'];?>" /></a></li>
        <?php } else { ?>
             <li><img src="<?php echo $logo['logo'];?>" /></li>
        <?php } ?>
        <?php endforeach;endif;?>
        </ul>    
        </div>

</section>