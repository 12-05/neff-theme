<div class="block block-faq">
    <h2><?php the_field('headline');?></h2>
    <div class="faq">
        <?php $fragen = get_field('fragen');?>
        <?php if($fragen):foreach($fragen as $frage):?>
            <div class="item">
                <div class="frage"><?php echo $frage['text'];?></div>
                <div class="antwort"><?php echo $frage['antworten'];?></div>
            </div>
        <?php endforeach;endif;?>
    </div>
</div>

<script>
    jQuery(document).ready(function() {
        jQuery('.faq .frage').click(function() {
            jQuery(this).parent().toggleClass('open');
        })
    });
</script>