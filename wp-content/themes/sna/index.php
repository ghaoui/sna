<?php get_header(); ?>
<section class="slider">
    <?php putRevSlider("home");?>
    <div id="entreprise" class="entreprise" data-uk-scrollspy="{cls:'uk-animation-slide-bottom'}">
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
            ?>
        <div class="text-center">
            <?php the_post_thumbnail();?>
        </div>  
                <?php
                endwhile;
            endif;
        ?>
    </div>
</section>
<section class="news" id="news">
    <div class="container">
        <div class="text-center uk-margin-bottom">
            <h3 class="title-primary">Actualités</h3>
        </div>        
        <div class="row uk-margin-large-top" data-uk-scrollspy="{cls:'uk-animation-fade', target: '.anim', delay: 500}">
           <?php 
                $args  = array(
                    'post_type' => 'news',
                    'posts_per_page' => 4,
                    'order' => 'DESC'
                );
                $the_query = new WP_Query( $args ); 
                $i = 0;
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post(); 
                if ( $i!=0 ) :
            ?> 
            <div class="col-lg-4 col-md-4 col-sm-4 text-center anim">
                <figure class="uk-overlay uk-overlay-hover">
                    <?php the_post_thumbnail('', array('class'=>'uk-overlay-spin'));?>
                    <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-slide-bottom">
                        <a class="readmoreicon" href="<?php the_permalink();?>"></a>
                    </figcaption>
                </figure>
                <div class="content-news-sub">
                    <h4><?php the_title();?></h4>
                    <a class="readmore" href="<?php the_permalink();?>">Lire la suite</a>
                </div>                    
            </div>
            <?php
            endif;
            $i++;
                endwhile;
            endif; 
        ?>
        </div>
    </div>
</section>
<section class="produit" id="produit">
    <div class="bg-grey"></div>
    <div class="container">
        <div class="text-center">
            <h3 class="title-primary">NOS PRODUITS</h3>
        </div>
        <div class="contents">
            <?php 
                $args  = array(
                    'post_type' => 'page',
                    'p' => 964
                );
                $the_query = new WP_Query( $args ); 
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post(); 
                        the_content();
                    endwhile;
                endif;
            ?>
        </div>
        <div class="text-center uk-margin-large-bottom">
            <a class="link-all" href="/products/ruminants/">Afficher tous les produits</a>
        </div>
        
        <div class="row" data-uk-scrollspy="{cls:'uk-animation-fade', target: '.item', delay: 300}">
            <?php 
                $args  = array(
                    'post_type' => 'products',
                    'posts_per_page' => 4,
                    'order' => 'DES'
                );
                $the_query = new WP_Query( $args ); 
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post(); 
            ?>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="item">
                    <figure>
                        <?php the_post_thumbnail();?>
                    </figure>
                    <div class="content">
                        <h4><?php the_title();?></h4>
                        <?php //the_excerpt(); ?>
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
<section class="assurance" id="object" data-uk-scrollspy="{initcls:'uk-scrollspy-init-inview'}">
    <?php 
        $args  = array(
            'page_id' => 100,
        );
        $the_query = new WP_Query( $args ); 
        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post(); 
    ?>
    <div class="container">
        <div class="text-center uk-margin-large-bottom">
            <h3 class="title-primary white">Assurance qualité</h3>
        </div>
        <div class="row" data-uk-grid-match="{target: '.target'}">
                    <div class="col-lg-4 col-md-4 col-sm-3">
                        <div class="target">
                            <?php the_post_thumbnail();?>
                        </div>                            
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-9 hidden-xs">                    
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
                                        <li>
                                            <?php //the_sub_field("text")?>
                                            <?php if (strlen(get_sub_field("text")) > 90) {
                                                echo substr(get_sub_field("text"), 0, 90) . '...'; } else {
                                                    the_sub_field("text");
                                                } ?>
                                        </li>
                                <?php 
                                        endwhile;
                                    endif;
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
        <div class="row uk-margin-large-top">
            <div class="col-lg-12 text-center ">
               <?php the_excerpt();?>
            </div>
        </div>
        <div class="text-center">
            <a class="voir-plus" href="/assurance"><span>Afficher Plus</span></a>
        </div>
    </div>
    <?php
            endwhile;
        endif;
    ?>
</section>

<section class="sites content-production" id="sites">
    <div class="text-center uk-margin-bottom">
        <h3 class="title-primary">SITES DE PRODUCTION</h3>
    </div>
    <div class="text-center">
        <a class="voir-plus" href="/production"><span>Afficher Plus</span></a>
    </div>
    <?php 
        $args  = array(
            'page_id' => 98,
        );
        $the_query = new WP_Query( $args ); 
        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post(); 
    ?>
        <div class="production-container" data-uk-grid-match>
        <div class="production-left">
            <div id="production_map"></div>
        </div>
        <div class="production-right">
            <div class="row">			
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <ul id="locations">
                                        <?php 
                                            if( have_rows('sites') ):
                                                $i = 0;
                                                while( have_rows('sites') ): the_row(); 
                                        ?>
                                        <li class="news-item">
                                            <a href="#" data-lat="<?php echo floatval(get_sub_field('lat'));?>" data-long="<?php echo floatval(get_sub_field('long'));?>" data-cpt="<?php echo $i; ?>">
                                                <div class="icon"></div>
                                                <div class="local">
                                                    <div class="titre"><?php the_sub_field('titre');?></div>
                                                    <div class="description"><?php the_sub_field('description');?></div>
                                                    <div class="adresse"><?php the_sub_field('adresse');?></div>
                                                </div>
                                            </a>
                                            <div class="titre"></div>
                                        </li>
                                        <?php 
                                        $i++;
                                                endwhile;
                                            endif;
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
            endwhile;
        endif;
    ?>
    
</section>

<section class="gallery" id="gallery" data-uk-scrollspy="{cls:'uk-animation-fade', target: '.anim', delay: 500}">
    <div class="text-center uk-margin-bottom">
        <h3 class="title-primary">GALERIE</h3>
    </div>
    <div class="text-center">
        <a class="voir-plus" href="/gallery?filter=all"><span>Afficher Plus</span></a>
    </div>
    <div class="uk-grid-width-large-1-4 uk-grid-width-medium-1-4 uk-grid-width-small-1-1" data-uk-grid >
        <?php 
            $args  = array(
                'post_type' => 'gallery',
                'posts_per_page' => -1,
                'order' => 'ASC'
            );
            $i = 0;
            $the_query = new WP_Query( $args ); 
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post(); 
                    if( have_rows('groupe_photo') ):
                            while( have_rows('groupe_photo') ): the_row();
                                if($i<12):
        ?>
        <div>
        <div class="uk-overlay-hover parent-anim">
            <div class="anim">
                <?php $image_gallery = get_sub_field('image');?>
                <img src="<?php echo $image_gallery['url'];?>" class="uk-overlay-spin">
                <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-slide-bottom">
                    <a href="<?php echo $image_gallery['original_image']['url'];?>" class="" data-uk-lightbox="{group: 'group1'}"></a>
                </figcaption>
            
            </div>
        </div>
        </div>
        <?php
                                $i++;
                            endif;
                        endwhile;
                    endif;
                endwhile;
            endif;
        ?>
    </div>
</section>

<section class="contact">
    <div class="text-center uk-margin-bottom">
        <h3 class="title-primary">CONTACT</h3>
    </div>
    <div id="map" data-uk-scrollspy="{initcls:'uk-scrollspy-init-inview'}"></div>
</section>
<div class="form">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6" data-uk-scrollspy="{cls:'uk-animation-slide-left'}">
                <address>
                    <h5>Société de Nutrition Animale</h5>
                    <p>Z.I. Borj Cédria - Ben Arous - Tél.: 70 020 640 - Fax : 71 430 911<br>
                    Z.I. Sidi El Héni - Sousse - Tél.: 73 280 400 - Fax : 73 280 409
                    </p>
                    <h5>Société Almès</h5>
                    <p>Z.I. Mateur - Tél.: 72 468 777 - Fax : 72 468 349<br>
                        Route de Tunis - km 13 Sidi Salah - Sfax - Tél.: 73 280 400 - Fax : 73 280 409<br>
                        E-mail : <a href="mailto:sna@sna.com.tn">sna@sna.com.tn</a><br>
                        <a href="www.sna-web.com" target="_blank" class="url">www.sna-web.com</a>
                    </p>
                    <h5>Usine Nutrimix</h5>
                    <p>Z.I Djebel El Oust -   KM 31 route el fahs, 1111 Zaghouan <br>
                       Tél.: 70 011 740 - Fax: 72 640 180<br>
                    </p>
                </address>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6" data-uk-scrollspy="{cls:'uk-animation-slide-right'}">
                <?php echo do_shortcode('[contact-form-7 id="71" title="Formulaire de contact 1"]');?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>