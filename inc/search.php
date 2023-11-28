<div class="search">
    <div class="search-inner">

            <?php get_search_form(array(
    'aria_label' => 'Suchen',
));?>
    </div>
</div>

<style>
    #searchsubmit {
        font-size:0;
        height:2rem;
        width:2rem;
        appearance: none;
        background-color:transparent;
        border:0;
        margin:0;
        background-image:url("<?php echo get_stylesheet_directory_uri(); ?>'/assets/images/Search.svg'");
        background-size:contain;
        background-position:center;

    }

    #s {
        appearance: none;
        border:0;
        font-size:1.5rem;
        padding:0.5rem;
        background:transparent;
        color: #FFF;
        border-bottom:2px solid #FFF;
    }

    .search-inner div {
        display:flex;
        align-items:center;
    }

</style>