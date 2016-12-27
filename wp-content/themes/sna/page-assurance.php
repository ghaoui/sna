<?php get_header(); ?>
<?php 
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
?>
<section class="content-assurance" id="object" data-uk-scrollspy="{initcls:'uk-scrollspy-init-inview'}">
    <div class="container-fluid">
        <div class="text-center uk-margin-large-bottom">
            <h3 class="title-primary white">ASSURANCE QUALITÉ</h3>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="excerpt"><?php the_excerpt();?></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-offset-1 col-lg-10">
                <div class="row">
                    <?php 
                        if( have_rows('qnob') ):
                            while( have_rows('qnob') ): the_row(); 
                    ?>
                    <div class="col-lg-4 text-center">
                        <input type="text" class="dial"  data-linecap=round data-fgColor="<?php the_sub_field('couleur')?>" value="<?php the_sub_field('value')?>" data-thickness=".2"  data-readOnly=true data-bgColor="#354357" data-inputColor="#ffffff">
                        <div class="text-knob"><?php the_sub_field('titre')?></div>
                    </div>
                    <?php 
                            endwhile;
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content-assurance-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php the_content();?>
            </div>
        </div>
    </div>
</section>
<?php 
        endwhile;
    endif;
?>
<?php get_footer(); ?>
