<?php get_header(); ?>
<?php 
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
?>
<section class="content-news">
    <div class="container-fluid">
        <div class="text-center uk-margin-large-bottom">
            <h3 class="title-primary red">ACTUALITÉS</h3>
        </div>
        
      <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h3 class="text-center grand-title"><?php the_title();?></h3>
                        <?php
                            if( have_rows('groupe_images') ):
                        ?>
                        <div data-uk-slideshow="{animation: 'random-fx'}" class="uk-slide-news">
                            <ul class="uk-slideshow">
                                <?php
                                    while ( have_rows('groupe_images') ) : the_row();                                    
                                ?>
                                <li><img src="<?php the_sub_field('image');?>" alt=""></li>
                                <?php
                                    endwhile;
                                ?>  
                            </ul>
                            <a class="uk-slidenav uk-slidenav-previous" href="" data-uk-slideshow-item="previous"></a>
                            <a class="uk-slidenav uk-slidenav-next" href="" data-uk-slideshow-item="next"></a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>                        
            </div>
            <div class="col-lg-3 right-news">
                <div class="dernier-news">DERNIERES NEWS</div>
                <ul class="news-item-list">
                <?php 
                    $args  = array(
                        'post_type' => 'news', 
                        'order' => 'DESC',
                        'posts_per_page'=> 4 
                    );
                    $the_query = new WP_Query( $args ); 
                    if ( $the_query->have_posts() ) :
                        while ( $the_query->have_posts() ) : $the_query->the_post(); 
                ?>
                    <li>
                        <a href="<?php the_permalink();?>">
                            <div class="item">
                                <div class="block1"><?php the_post_thumbnail();?></div>
                                <div class="block2">
                                    <div class="title"><?php the_title();?></div>
                                </div>
                            </div>
                        </a>
                    </li>
                <?php
                        endwhile;
                    endif;
                ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php 
        endwhile;
    endif;
?>
<?php get_footer(); ?>