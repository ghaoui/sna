<?php get_header(); ?>
<section class="content-gallery" data-uk-scrollspy="{cls:'uk-animation-fade', target: '.anim', delay: 500}">
    <div class="container-fluid">
        <div class="text-center uk-margin-large-bottom">
            <h3 class="title-primary red">GALERIE</h3>
        </div>
        
        <ul id="my-id" class="uk-subnav uk-flex-middle">  
            <li data-uk-filter="" class="uk-active"><a>ALL</a></li>  
            <li data-uk-filter="image"><a>PHOTO</a></li>  
            <li data-uk-filter="video"><a>VIDEO</a></li>  
        </ul>  
        <!-- Dynamic Grid -->  
        <div class="uk-grid-width-1-4" data-uk-grid="{controls: '#my-id'}">  
            <?php 
            $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
            $args  = array(
                'post_type' => 'gallery',
                'posts_per_page' => 3,
                'order' => 'ASC',
                'paged' => $paged,
            );
            $the_query = new WP_Query( $args ); 
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post(); 
        ?>
        <div class="uk-overlay-hover parent-anim" data-uk-filter="<?php the_field('type');?>">
            <div class="anim">
                <?php if(get_field('type') == 'image'){?>
                    <img src="<?php the_field('image');?>" class="uk-overlay-spin">
                <?php }else{ ?>
                    <video src="<?php the_field('video');?>" style="height: 383px;"></video>                    
                <?php } ?>            
                <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-slide-bottom">
                    <a href="<?php echo (get_field('type') == 'image')? get_field('image'):get_field('video');?>" class="" data-uk-lightbox="{group: 'group1'}"></a>
                </figcaption>            
            </div>
        </div>
        <?php
                endwhile;
            endif;
        ?>
        </div>
        <div id='page_navigation'></div>
        <input type="hidden" id="current_page" value="0">
        <input type="hidden" id="show_per_page" value="6">
    </div>
</section>
<?php get_footer(); ?>
