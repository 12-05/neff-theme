<section class="block block-eventloop">
    <?php 
        $events = NEFF_EventModel::get_upcoming();
        if($events):foreach($events as $event):?>
        <a href="<?php echo get_permalink($event->ID);?>" class="event">
            <div class="bild" style="background-image:url(<?php echo get_field('bild', $event->ID);?>"></div>
            <div class="content">
                <div class="subline"><?php  the_field('typ', $event->ID);?><span class="datum"><?php echo NEFF_EventModel::format_date(get_field('event_start',$event->ID));?> <?php if(get_field('event_ende',$event->ID)) : ?> – <?php echo NEFF_EventModel::format_date(get_field('event_ende',$event->ID));?> <?php endif; ?>  </span></div>
                <div class="headline"><?php echo $event->post_title;?></div>
                <div class="description"><?php the_field('kurzbeschreibung', $event->ID);?></div>
                <span class="link"></span>
            </div>
        </a>
        <?php endforeach;endif;
    ?>
</section>
<?php $events = NEFF_EventModel::get_past();?>
<?php if($events) {?>
    <h2 class="event-headline">Vergangene Veranstaltungen</h2>

<?php } ?>
<section class="block block-eventloop">
    <?php 
        if($events):foreach($events as $event):?>
        <a href="<?php echo get_permalink($event->ID);?>" class="event">
            <div class="bild" style="background-image:url(<?php echo get_field('bild', $event->ID);?>"></div>
            <div class="content">
                <div class="subline"><?php  the_field('typ', $event->ID);?><span class="datum"><?php echo NEFF_EventModel::format_date(get_field('event_start', $event->ID));?></span></div>
                <div class="headline"><?php echo $event->post_title;?></div>
                <div class="description"><?php the_field('kurzbeschreibung', $event->ID);?></div>
                <span class="link"></span>
            </div>
        </a>
        <?php endforeach;endif;
    ?>
</section>