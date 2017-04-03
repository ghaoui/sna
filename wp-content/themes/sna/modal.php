<div id="modal<?php echo $idPost.'-'.$i;?>" class="modal" data-easein="whirlIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-body">
            <div class="uk-panel uk-panel-box">
                <div class="text-center img-article">
                    <img src="<?php the_sub_field('logo');?>" width:="150">
                </div>
                <?php the_sub_field('fiche');?>
            </div>
          </div>
        </div>
      </div>
    </div>