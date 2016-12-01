<?php get_header(); ?>
<section class="slider">
    <?php putRevSlider("home");?>
    <div class="entreprise" data-uk-scrollspy="{cls:'uk-animation-slide-bottom'}">
        <?php 
            $args  = array(
                'post_type' => 'page',
                'name' => 'lentreprise',
            );
            $the_query = new WP_Query( $args ); 
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post(); 
        ?>
        <h3 class="title-primary"><?php the_title();?></h3>
        <?php
            the_excerpt();
                endwhile;
            endif;
        ?>
    </div>
</section>
<section class="produit">
    <div class="container">
        <div class="text-center uk-margin-large-bottom">
            <h3 class="title-primary">NOS PRODUITS</h3>
        </div>
        
        <div class="row" data-uk-scrollspy="{cls:'uk-animation-fade', target: '.item', delay: 300}">
            <?php 
                $args  = array(
                    'post_type' => 'products',
                    'posts_per_page' => 3,
                    'order' => 'ASC'
                );
                $the_query = new WP_Query( $args ); 
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post(); 
            ?>
            <div class="col-lg-4">
                <div class="item">
                    <figure>
                        <?php the_post_thumbnail();?>
                    </figure>
                    <div class="content">
                        <?php the_excerpt(); ?>
                        <div class="text-center">
                            <a data-couleur="<?php the_field('couleur');?>" href="<?php the_permalink();?>" style="background-color: <?php the_field('couleur');?>">Afficher Plus</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <?php
                    endwhile;
                endif;
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>