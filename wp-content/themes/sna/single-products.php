<?php get_header(); ?>
<?php 
$idPost = get_the_ID();
?>
<section class="content-product">
    <div class="container-fluid">
        <div class="text-center uk-margin-large-bottom">
            <h3 class="title-primary green">NOS PRODUITS</h3>
        </div>
        <div class="item-flex">
            <?php 
                $args  = array(
                    'post_type' => 'products',
                    'posts_per_page' => 4,
                    'order' => 'DESC'
                );
                $the_query = new WP_Query( $args ); 
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post(); 
            ?>
            <div class="item <?php echo (get_the_ID() == $idPost)? 'active':'' ?>">
                <a href="<?php the_permalink();?>">
                    <figure>
                        <?php the_post_thumbnail();?>
                    </figure>
                    <div class="title"><?php the_title();?></div>
                </a>
            </div>
            <?php 
                    endwhile;
                endif;
            ?>
        </div>
        
        <div class="row">
            <div class="col-lg-3">
                <div class="uk-accordion" data-uk-accordion>
                     <?php 
                        $args  = array(
                            'p' => $idPost,
                            'post_type' => 'products',
                            'posts_per_page' => 1,
                        );
                        $the_query = new WP_Query( $args ); 
                        if ( $the_query->have_posts() ) :
                            while ( $the_query->have_posts() ) : $the_query->the_post(); 
                                if( have_rows('categorie') ):
                                    while( have_rows('categorie') ): the_row(); 
                    ?>

                    <h3 class="uk-accordion-title"><?php the_sub_field('titre');?></h3>
                    <div class="uk-accordion-content">
                        <ul>
                            <?php
                                if( have_rows('produit') ):
                                    while( have_rows('produit') ): the_row(); 
                            ?>
                            <li>
                                <a href="#"><?php the_sub_field('titre');?></a>
                            </li>
                            <?php 
                                    endwhile;
                                endif;
                            ?>
                        </ul>
                    </div>
                    <?php 
                                    endwhile;
                                endif;
                            endwhile;
                        endif;
                    ?>
                </div>
            </div>
            <div class="col-lg-offset-2 col-lg-5">
                <div class="uk-slidenav-position" data-uk-slideshow="{animation: 'scale'}">
                    <ul class="uk-slideshow">
                        <?php 
                            $args  = array(
                                'p' => $idPost,
                                'post_type' => 'products',
                                'posts_per_page' => 1,
                            );
                            $the_query = new WP_Query( $args ); 
                            if ( $the_query->have_posts() ) :
                                while ( $the_query->have_posts() ) : $the_query->the_post(); 
                                    if( have_rows('categorie') ):
                                        while( have_rows('categorie') ): the_row(); 
                                            if( have_rows('produit') ):
                                                while( have_rows('produit') ): the_row(); 
                        ?>
                        <li>
                            <figure>
                                <img src="<?php the_sub_field('image');?>">
                            </figure>
                            <div class="description">
                                <?php the_sub_field('text');?>
                            </div>
                            
                        </li>
                        <?php 
                                                endwhile;
                                            endif;
                                        endwhile;
                                    endif;
                                endwhile;
                            endif;
                        ?>
                    </ul>
                    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>