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
                   Tél.: 70 011 740 - Fax: 72 640 180
                </p>
            </address>
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
