<?php get_header(); ?>
<section class="content-gallery" <?php /*data-uk-scrollspy="{cls:'uk-animation-fade', target: '.anim', delay: 500}" */?>>
    <div class="container-fluid">
        <div class="text-center uk-margin-large-bottom">
            <h3 class="title-primary red">GALERIE</h3>
        </div>
        
        <ul id="my-id" class="uk-subnav uk-flex-middle">  
            <li data-uk-filter="" class="uk-active"><a href="">ALL</a></li>  
            <li data-uk-filter="image"><a href="">PHOTO</a></li>  
            <li data-uk-filter="video"><a href="">VIDEO</a></li>  
        </ul>  
        <!-- Dynamic Grid -->  
        <div class="parent-div-padding" data-uk-grid-match="{target: 'h5'}">
            <div class="uk-grid uk-grid-width-large-1-5 uk-grid-width-medium-1-3 uk-grid-width-small-1-1 uk-grid-large album" data-uk-grid="{controls: '#my-id'}">  
                <?php 
                $args  = array(
                    'post_type' => 'gallery',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                );
                if(isset($_GET['filter'])){
                    if($_GET['filter']!= 'all'){
                        $args['meta_key']= 'type';
                        $args['meta_value'] =  $_GET['filter'];
                    }
                }
                $the_query = new WP_Query( $args ); 
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post(); 
                $i=0;
            ?>
                <div data-uk-filter="<?php the_field('type');?>">
            <div class="uk-overlay-hover">
                <a href="<?php the_permalink();?>" class="link-album">
                <div class="anim">
                    <?php   if(get_field('type') == 'image'):
                              if( have_rows('groupe_photo') ):
                                 //echo '<pre>'; print_r(get_sub_field('image'));echo '</pre>';
                                      while( have_rows('groupe_photo') ): the_row();
                              $image_gallery = get_sub_field('image');
                                          if($i<4): 
                    ?>
                                               <img src="<?php echo $image_gallery['url'];?>">   
                    <?php
                                            $i++;
                                           else:
                                               break;
                                        endif;
                                    endwhile;
                               endif;
                            else :
                                if( have_rows('groupe_video') ):
                                    $j=0;
                                 //echo '<pre>'; print_r(get_sub_field('image'));echo '</pre>';
                                      while( have_rows('groupe_video') ): the_row();
                              $image_gallery = get_sub_field('image');
                                          if($j<3): 
                    ?>
                                               <img src="<?php echo $image_gallery['url'];?>">   
                    <?php
                                            $j++;
                                           else:
                                               break;
                                        endif;
                                    endwhile;
                               endif;
                    ?>
                                               <img src="<?php bloginfo('stylesheet_directory'); ?>/images/video.png">  
                                                
                    <?php
                            endif;
                    ?>

                </div>
                    <h5><?php the_title();?></h5>
                </a>
            </div>
                </div>
            <?php
                    endwhile;
                endif;
            ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
