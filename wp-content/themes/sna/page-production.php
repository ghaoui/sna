<?php get_header(); ?>
<?php 
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
?>
<section class="content-production">
    <div class="text-center uk-margin-large-bottom">
        <h3 class="title-primary">SITES DE PRODUCTION</h3>
    </div>
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

</section>

<section class="content-production-content sites" id="section-production-content">
    <h3>DESCRIPTION</h3>
    <ul class="content">
        <?php 
            if( have_rows('sites') ):
                $i = 0;
                while( have_rows('sites') ): the_row(); 
        ?>
        <li compteur="<?php echo $i; ?>">
            <div class="left-section">
                <?php the_sub_field('content');?>
            </div>
            <div class="right-section">
                <img src="<?php the_sub_field('image');?>">
            </div>
        </li>
        <?php 
        $i++;
                endwhile;
            endif;
        ?>
    </ul>
</section>
<?php 
        endwhile;
    endif;
?>
<?php get_footer(); ?>