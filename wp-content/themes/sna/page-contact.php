<?php get_header(); ?>
<?php 
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
?>
<section class="content-contact">
    <div class="text-center uk-margin-large-bottom">
        <h3 class="title-primary red">CONTACT</h3>
    </div>
    <div class="contact" data-uk-grid-match>
        <div class="contact-left" data-uk-scrollspy="{cls:'uk-animation-slide-left'}">
            <?php the_content();?>
        </div>
        <div class="contact-right" data-uk-scrollspy="{cls:'uk-animation-slide-right'}">
            <div id="map"  data-uk-scrollspy="{initcls:'uk-scrollspy-init-inview'}"></div>
        </div>  
    </div>           
</section>
<section class="content-contact-form">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-container"><?php echo do_shortcode('[contact-form-7 id="71" title="Formulaire de contact 1"]');?></div>
            </div>
        </div>
    </div>
</section>
<?php 
        endwhile;
    endif;
?>
<?php get_footer(); ?>
