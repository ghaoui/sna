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
                        <img src="<?php the_field('image_hover');?>" class="hover">
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
            <div class="col-lg-10 col-lg-offset-1">
                <div class="itefm-product-flex">
                    <?php 
                        $args  = array(
                            'p' => $idPost,
                            'post_type' => 'products',
                            'posts_per_page' => 1,
                        );
                        $i = 0;
                        $the_query = new WP_Query( $args ); 
                            if ( $the_query->have_posts() ) :
                                while ( $the_query->have_posts() ) : $the_query->the_post(); 
                                    if( have_rows('categorie') ):
                                        while( have_rows('categorie') ): the_row(); 
                    ?>
                        <div class="item-product">
                            <figure class="uk-overlay uk-overlay-hover">
                                <img class="uk-overlay-scale" src="<?php the_sub_field('logo');?>">
                                <div class="uk-overlay-panel">...</div>
                                <a href="#modal<?php echo $idPost.'-'.$i;?>" role="button" data-toggle="modal" class="uk-position-cover" href=""></a>
                            </figure>
                        </div>
                    <?php require 'modal.php';?>
                    <?php 
                    $i++;
                                        endwhile;
                                    endif;
                                endwhile;
                            endif;
                    ?>
                </div>
            </div>                    
        </div>
    </div>
</section>
<?php get_footer(); ?>