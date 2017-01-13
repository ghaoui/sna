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
                <div class="text-center"><?php the_post_thumbnail();?></div>
                <div class="content-news"><?php the_content();?></div>
                <?php
                    if( have_rows('groupe_images') ):
                ?>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="news-slideset">
                            <div data-uk-slideset="{default: 3}" class="slideset-content">
                                <ul class="uk-grid uk-slideset">
                                    <?php
                                        while ( have_rows('groupe_images') ) : the_row();                                    
                                    ?>
                                    <li><a data-uk-lightbox href="<?php the_sub_field('image');?>"><img src="<?php the_sub_field('image');?>" alt=""></a></li>
                                    <?php
                                        endwhile;
                                    ?>                        
                                </ul>
                                <a href="" data-uk-slideset-item="previous" class="previous"></a>
                                <a href="" data-uk-slideset-item="next" class="next"></a>
                            </div>      
                        </div> 
                    </div>
                </div>                        
                <?php endif; ?>
            </div>
            <div class="col-lg-3 right-news">
                <div class="dernier-news">DERNIERS NEWS</div>
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