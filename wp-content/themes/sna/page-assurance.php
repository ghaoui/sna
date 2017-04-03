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
                <div class="text-center uk-margin-large-bottom">
                    <img src="<?php the_field('image_seconde');?>">
                </div>
            </div>
        </div>

                <div class="row" data-uk-grid-match="{target: '.target'}">
                    <div class="col-lg-4">
                        <div class="target text-center">
                            <?php the_post_thumbnail();?>
                        </div>                            
                    </div>
                    <div class="col-lg-8">                    
                    <div class="uk-grid target">
                        <div class="uk-width-medium-1-2">
                            <ul class="uk-tab uk-tab-left" data-uk-tab="{connect:'#my-id'}">
                              <?php 
                        if( have_rows('qnob') ):
                            while( have_rows('qnob') ): the_row(); 
                        ?>  
                                <li><a><?php the_sub_field("titre")?></a></li>
                        <?php 
                                endwhile;
                            endif;
                        ?>
                            </ul>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <ul id="my-id" class="uk-switcher">
                                <?php
                                if( have_rows('qnob') ):
                                    while( have_rows('qnob') ): the_row(); 
                                ?>  
                                        <li><?php the_sub_field("text")?></li>
                                <?php 
                                        endwhile;
                                    endif;
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
    </div>
</section>
<?php 
        endwhile;
    endif;
?>
<?php get_footer(); ?>
