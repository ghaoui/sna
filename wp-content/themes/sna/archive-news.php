<?php get_header(); ?>
<section class="content-news">
    <div class="container-fluid">
        <div class="text-center uk-margin-large-bottom">
            <h3 class="title-primary red">ACTUALITÉS</h3>
        </div>
        <div data-uk-grid="{gutter:30}">
            <?php while ( have_posts() ) : the_post();?>
            <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
            <div class="thumbnail">
                <?php the_post_thumbnail();?>
                <div class="caption">
                <h3><?php the_title();?></h3>
                <?php //the_excerpt();?>
                <p class="text-right"><a href="<?php the_permalink();?>" class="show-more"><span>VOIR PLUS</span></a></p>
                </div>
            </div>
            </div>
            <?php endwhile;?>
        </div>    
    </div>
</section>
<?php get_footer(); ?>