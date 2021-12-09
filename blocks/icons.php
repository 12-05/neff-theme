<div class="block block-icons">

<?php $icons = get_field('icons');?>
<h2><?php the_field('headline');?></h2>
<div class="grid">
<?php if($icons):foreach($icons as $icon):?>
    <div class="item">
        <img style="max-width:<?php echo get_field('breite');?>%" src="<?php echo $icon['icon'];?>" alt="icon" />
        <div class="content">
            <?php echo $icon['text'];?>
        </div>
    </div>
<?php endforeach;endif;?>
</div>
</div>