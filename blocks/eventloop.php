<section class="block block-eventloop">
    <?php 
        $events1 = NEFF_EventModel::get_upcoming();
        if($events1):foreach($events1 as $event):?>
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
<?php $events2 = NEFF_EventModel::get_past();?>
<?php if($events2) {?>
    <h2 class="event-headline">Vergangene Veranstaltungen</h2>

<?php } ?>
<section class="block block-eventloop">
    <?php 
        if(is_array($events2)):foreach($events2 as $eventPast):?>
        <a href="<?php echo get_permalink($eventPast->ID);?>" class="event">
            <div class="bild" style="background-image:url(<?php echo get_field('bild', $eventPast->ID);?>"></div>
            <div class="content">
                <div class="subline"><?php  the_field('typ', $eventPast->ID);?><span class="datum"><?php echo NEFF_EventModel::format_date(get_field('event_start', $eventPast->ID));?></span></div>
                <div class="headline"><?php echo $eventPast->post_title;?></div>
                <div class="description"><?php the_field('kurzbeschreibung', $eventPast->ID);?></div>
                <span class="link"></span>
            </div>
        </a>
        <?php endforeach;endif;
    ?>
</section>