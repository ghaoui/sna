<?php get_header(); ?>
<section class="content-gallery" <?php /*data-uk-scrollspy="{cls:'uk-animation-fade', target: '.anim', delay: 500}" */?>>
    <div class="container-fluid">
        <div class="text-center uk-margin-large-bottom">
            <h3 class="title-primary red">GALERIE</h3>
        </div>
        
        <!-- Dynamic Grid -->  
        <div class="uk-grid uk-grid-width-1-4 uk-grid-collapse">  
            <?php 
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); 
                    if(get_field('type') == 'image'):
                    if( have_rows('groupe_photo') ):
                         while( have_rows('groupe_photo') ): the_row();
        ?>
        <div class="uk-overlay-hover parent-anim" data-uk-filter="<?php the_field('type');?>">
            <div class="anim">
                    <img src="<?php the_sub_field('image');?>" class="uk-overlay-spin">           
                <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-slide-bottom">
                    <a href="<?php echo (get_field('type') == 'image')? get_sub_field('image'):get_sub_field('video');?>" class="" data-uk-lightbox="{group: 'group1'}"></a>
                </figcaption>
            
            </div>
        </div>
        <?php
                    endwhile;    
        endif;
                    

            else:
                if( have_rows('groupe_video') ):
                         while( have_rows('groupe_video') ): the_row();
        ?>
        <div class="uk-overlay-hover parent-anim" data-uk-filter="<?php the_field('type');?>">
            <div class="anim">
                    <video src="<?php the_sub_field('video');?>" style="height: 383px;"></video>        
                <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-slide-bottom">
                    <a href="<?php echo (get_field('type') == 'image')? get_sub_field('image'):get_sub_field('video');?>" class="" data-uk-lightbox="{group: 'group1'}"></a>
                </figcaption>
            
            </div>
        </div>
        <?php
                    endwhile;    
        endif;
                    
            endif; 
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
