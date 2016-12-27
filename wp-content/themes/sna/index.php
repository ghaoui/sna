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
                endwhile;
            endif;
        ?>
    </div>
</section>
<section class="produit" id="produit">
    <div class="bg-grey"></div>
    <div class="container">
        <div class="text-center">
            <h3 class="title-primary">NOS PRODUITS</h3>
        </div>
        <div class="text-center uk-margin-large-bottom">
            <a class="link-all" href="#">Afficher tous les produits</a>
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
            <div class="col-lg-3">
                <div class="item">
                    <figure>
                        <?php the_post_thumbnail();?>
                    </figure>
                    <div class="content">
                        <h4><?php the_title();?></h4>
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
        <div class="row">
            <div class="col-lg-offset-1 col-lg-10">
                <div class="row">
                    <div class="col-lg-4 text-center">
                        <input type="text" class="dial"  data-linecap=round data-fgColor="#ffc875" value="74" data-thickness=".2"  data-readOnly=true data-bgColor="#354357" data-inputColor="#ffffff">
                        <div class="text-knob">Lorem Ipsum</div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <input type="text" class="dial"  data-linecap=round data-fgColor="#f3595b" value="46" data-thickness=".2"  data-readOnly=true data-bgColor="#354357" data-inputColor="#ffffff">
                        <div class="text-knob">Lorem Ipsum</div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <input type="text" class="dial"  data-linecap=round data-fgColor="#83d7c0" value="62" data-thickness=".2"  data-readOnly=true data-bgColor="#354357" data-inputColor="#ffffff">
                        <div class="text-knob">Lorem Ipsum</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row uk-margin-large-top">
            <div class="col-lg-12 text-center ">
               <?php the_excerpt();?>
            </div>
        </div>
    </div>
    <?php
            endwhile;
        endif;
    ?>
</section>
<section class="sites" id="sites">
    <div class="text-center uk-margin-bottom">
        <h3 class="title-primary">SITES DE PRODUCTION</h3>
    </div>
    <?php 
        $args  = array(
            'page_id' => 98,
        );
        $the_query = new WP_Query( $args ); 
        if ( $the_query->have_posts() ) :
            while ( $the_query->have_posts() ) : $the_query->the_post(); 
    ?>
        <?php the_content();?>
    <?php
            endwhile;
        endif;
    ?>
</section>
<section class="gallery" id="gallery" data-uk-scrollspy="{cls:'uk-animation-fade', target: '.anim', delay: 500}">
    <div class="text-center uk-margin-bottom">
        <h3 class="title-primary">GALERIE</h3>
    </div>
    <div class="uk-grid-width-1-4" data-uk-grid >
        <?php 
            $args  = array(
                'post_type' => 'gallery',
                'posts_per_page' => 12,
                'order' => 'ASC'
            );
            $the_query = new WP_Query( $args ); 
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post(); 
        ?>
        <div class="uk-overlay-hover parent-anim">
            <div class="anim">
                <img src="<?php the_field('image');?>" class="uk-overlay-spin">
                <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-slide-bottom">
                    <a href="<?php the_field('image');?>" class="" data-uk-lightbox="{group: 'group1'}"></a>
                </figcaption>
            
            </div>
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
        <?php 
                $args  = array(
                    'post_type' => 'news',
                    'posts_per_page' => 1,
                    'order' => 'DESC'
                );
                $the_query = new WP_Query( $args ); 
                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) : $the_query->the_post(); 
            ?>
        <div class="row news-first">
            
            <div class="col-lg-4" data-uk-scrollspy="{cls:'uk-animation-slide-left'}">
                <figure class="uk-overlay uk-overlay-hover">
                    <?php the_post_thumbnail('', array('class'=>'uk-overlay-spin'));?>
                    <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-slide-bottom">
                        <a class="readmoreicon" href="<?php the_permalink();?>"></a>
                    </figcaption>
                </figure>                
            </div>
            <div class="col-lg-8" data-uk-scrollspy="{cls:'uk-animation-slide-right'}">
                <?php the_content();?>
            </div>
            
        </div>
        <div class="text-right border">
            <a href="<?php the_permalink();?>">Lire la suite</a>
        </div>
        <?php
                endwhile;
            endif; 
        ?>
        
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
            <div class="col-lg-4 text-center anim">
                <figure class="uk-overlay uk-overlay-hover">
                    <?php the_post_thumbnail('', array('class'=>'uk-overlay-spin'));?>
                    <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-icon uk-overlay-slide-bottom">
                        <a class="readmoreicon" href="<?php the_permalink();?>"></a>
                    </figcaption>
                </figure>
                <div class="">
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
<section class="contact">
    <div class="text-center uk-margin-bottom">
        <h3 class="title-primary">CONTACT</h3>
    </div>
    <div id="map" data-uk-scrollspy="{initcls:'uk-scrollspy-init-inview'}"></div>
</section>
<div class="form">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-uk-scrollspy="{cls:'uk-animation-slide-left'}">
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
                </address>
            </div>
            <div class="col-lg-6" data-uk-scrollspy="{cls:'uk-animation-slide-right'}">
                <?php echo do_shortcode('[contact-form-7 id="71" title="Formulaire de contact 1"]');?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>