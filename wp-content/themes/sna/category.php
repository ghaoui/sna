<?php get_header(); ?>
<section class="content-news">
    <div class="container-fluid">
        <?php 

$args  = array(
                            'post_type' => 'news',
                            'cat' =>  get_cat_ID(single_cat_title('',false)),
                            'order' => 'DESC',
                            'posts_per_page' => 1
                        );

 $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) :
                            while ( $the_query->have_posts() ) : $the_query->the_post(); 
   ?>
        <div class="text-center uk-margin-large-bottom">
            <h3 class="title-primary red">ACTUALITÉS</h3>
        </div>
        <div class="text-center uk-margin-large-bottom">
            <?php the_post_thumbnail();?>
        </div>
        <div class="row">
            <div class="col-lg-4"> <?php wp_list_cats();?></div>
            <div class="col-lg-8">
                <div class="content">
                    <?php the_content();?>
                </div>
            </div>
        </div> 
        <?php 
        endwhile;
    endif;
?>
        <div class="border uk-margin-large-bottom">
            <div class="autre">Autres articles</div>
        </div>
        
        <div data-uk-slideset="{default: 3}" class="content-autre">
            <div class="uk-slidenav-position">
                <ul class="uk-grid uk-slideset">
                    <?php 
                        $args  = array(
                            'post_type' => 'news',
                            'posts_per_page' => -1,
                            'order' => 'DESC',
                            'cat' =>  get_cat_ID(single_cat_title('',false)),
                        );
                        $the_query = new WP_Query( $args ); 
                        if ( $the_query->have_posts() ) :
                            while ( $the_query->have_posts() ) : $the_query->the_post(); 
                    ?> 
                    <li>
                        <div class="slideset-content">
                            <figure>
                                <?php the_post_thumbnail();?>
                                <a href="<?php the_permalink();?>">Lire la suite</a>
                            </figure>
                            <div class="excerpt"><?php the_excerpt();?></div>
                        </div>
                        
                    </li>
                    <?php
                            endwhile;
                        endif; 
                    ?>
                </ul>
                <a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
                <a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>