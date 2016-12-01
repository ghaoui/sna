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
    <div class="bg-grey"></div>
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
<section class="assurance" id="object" data-uk-scrollspy="{initcls:'uk-scrollspy-init-inview'}">
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
    </div>
</section>
<section class="sites">
    <div class="text-center uk-margin-bottom">
        <h3 class="title-primary">NOS PRODUITS</h3>
    </div>
    <div class="content">
        <div class="left-section" data-uk-scrollspy="{cls:'uk-animation-slide-left'}">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptatum, perspiciatis nemo beatae sapiente facilis, possimus debitis error voluptatibus natus officiis omnis cum. Facere, temporibus aliquid porro quos nam officiis.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptatum, perspiciatis nemo beatae sapiente facilis, possimus debitis error voluptatibus natus officiis omnis cum. Facere, temporibus aliquid porro quos nam officiis.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptatum, perspiciatis nemo beatae sapiente facilis, possimus debitis error voluptatibus natus officiis omnis cum. Facere, temporibus aliquid porro quos nam officiis.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptatum, perspiciatis nemo beatae sapiente facilis, possimus debitis error voluptatibus natus officiis omnis cum. Facere, temporibus aliquid porro quos nam officiis.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptatum, perspiciatis nemo beatae sapiente facilis, possimus debitis error voluptatibus natus officiis omnis cum. Facere, temporibus aliquid porro quos nam officiis.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptatum, perspiciatis nemo beatae sapiente facilis, possimus debitis error voluptatibus natus officiis omnis cum. Facere, temporibus aliquid porro quos nam officiis.</p>
        </div>
        <div class="right-section" data-uk-scrollspy="{cls:'uk-animation-slide-right'}" >
            <div data-uk-scrollspy="{cls:'uk-animation-fade', target: '.anim', delay: 1000}" data-uk-check-display>
                <div class="top-image anim">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/sites.png">
                </div>
                <div class="right-content">
                    <div class="left-text anim">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptatum, perspiciatis nemo beatae sapiente facilis, possimus debitis error voluptatibus natus officiis omnis cum. Facere, temporibus aliquid porro quos nam officiis.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate voluptatum, perspiciatis nemo beatae sapiente facilis, possimus debitis error voluptatibus natus officiis omnis cum. Facere, temporibus aliquid porro quos nam officiis.</p>
                    </div>
                    <div class="right-image anim">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/sites2.png">
                    </div>
                </div>
            </div>                
        </div>
    </div>        
</section>
<section class="gallery" data-uk-scrollspy="{cls:'uk-animation-fade', target: '.anim', delay: 700}">
    <div class="text-center uk-margin-bottom">
        <h3 class="title-primary">GALLERIE</h3>
    </div>
    <div class="uk-grid-width-1-4" data-uk-grid >
        <?php 
            $args  = array(
                'post_type' => 'gallery',
                'posts_per_page' => -1,
                'order' => 'ASC'
            );
            $the_query = new WP_Query( $args ); 
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post(); 
        ?>
        <div >
            <a href="<?php the_post_thumbnail_url();?>" class="anim" data-uk-lightbox="{group: 'group1'}"><?php the_post_thumbnail(); ?></a>
        </div>
        <?php
                endwhile;
            endif;
        ?>
    </div>
</section>
<section class="gallery">
    <div class="container">
        <div class="text-center uk-margin-bottom">
            <h3 class="title-primary">Actualités</h3>
        </div>
        <div class="row">
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
            <div class="col-lg-4">
                <?php the_post_thumbnail();?>
            </div>
            <div class="col-lg-8">
                <?php the_excerpt();?>
            </div>
            <?php
                    endwhile;
                endif;
            ?>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-4"></div>
        </div>
    </div>
</section>
<?php get_footer(); ?>