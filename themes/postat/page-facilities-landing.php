<?php 
/*Template Name: Facilities Landing */
get_header();
$thisID = get_the_ID();
?>



  <section class="page-banner">
    <div class="page-banner-bg-black"></div>
    <div class="page-bnr-bg inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/facilities-landing-bnr-bg.jpg');"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-bnr-cntlr">
            
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <div class="gap-50"></div> -->
  
  <div class="facilites-landing-ctlr">
    <?php 
    $intro = get_field('introsec', $thisID);
      if($intro):
    ?>
    <section class="pt-intro-text-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="pt-intro-text-module">
              <?php if( !empty($intro['description']) ) echo wpautop( $intro['description'] ); ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>



    <?php 
    $blocksec = get_field('blocksec', $thisID);
      if($blocksec):
    ?>
    <section class="lftdes-rgtimg-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="lftdes-rgtimg-sec-inr">
              <div class="lftdes-rgtimg-grds">
                <?php 
                  $i = 1;
                  foreach( $blocksec as $block ): 
                    if($i%2 == 0)  {  
                     $lftimg = '';  
                    }else{  
                     $lftimg = 'lftimg-rgtdes'; 
                    }
                ?>
                <div class="lftdes-rgtimg-grd-item <?php echo $lftimg; ?>">
                  <div class="lftdes-rgtimg-ctlr">
                    <div class="lftdes-rgtimg-lft">
                      <div class="lftdes-rgtimg-img inline-bg" style="background:url(<?php if( !empty($block['image']) ) echo cbv_get_image_src($block['image']); ?>)">
                        <?php if( !empty($block['image']) ) echo cbv_get_image_tag($block['image']); ?>
                      </div>
                    </div>
                    <div class="lftdes-rgtimg-rgt">
                      <div class="lftdes-rgtimg-des pt-link-hover">
                        <?php 
                        if( !empty($block['title']) ) printf( '<h2 class="lftdes-rgtimg-title fl-h2">%s</h2>', $block['title'] );
                        if( !empty($block['subtitle']) ) printf( '<h3 class="lftdes-rgtimg-subtitle fl-h6">%s</h3>', $block['subtitle'] );
                        if( !empty($block['description']) ) echo wpautop( $block['description'] ); 
                        ?>

                        <?php  
                          $link = $block['link'];
                          if( $link ): 
                        ?>
                        <a href="<?php echo esc_url( $link ); ?>">Learn more</a>
                        <?php endif;?>
                      </div>
                    </div>
                  </div>
                </div>
                <?php  $i++; endforeach;?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <?php
    $showhide_luxuary_block = get_field('showhide_luxuary_block', $thisID );
    if($showhide_luxuary_block): 
    $pacage_sec = get_field('luxury_pacage_sec', $thisID );
    if($pacage_sec):
    ?>
    <section class="luxury-sec inline-bg" style="background:url(<?php if( !empty($pacage_sec['image']) ) echo cbv_get_image_src($pacage_sec['image']); ?>)">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="luxury-sec-inr">
              <div class="luxury-des">
                <?php 
                  $pacagelink = $pacage_sec['link'];
                  if( is_array( $pacagelink ) &&  !empty( $pacagelink['url'] ) ){
                      printf('<h2 class="luxury-des-title fl-h2"><a href="%s" target="%s">%s</a></h2>', $pacagelink['url'], $pacagelink['target'], $pacagelink['title']); 
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>
    <?php endif; ?>

    <section class="follow-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="follow-sec-inr">
              <div class="follow-des">
                <h2 class="follow-des-title fl-h2">Follow @postatoakgate</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="follow-img-ctlr">
        <div class="follow-img">
          <img src="<?php echo THEME_URI; ?>/assets/images/follow-des-img.png">
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="follow-btm-des">
              <div class="follow-btm-des-hdr">
                <h3 class="follow-btm-des-title fl-h6">Immerse yourself in the landscape, Tag us #postatoakgate #cabinporn #immersivelandscapes </h3>
              </div>
              <div class="follow-btm-des-btn">
                <a class="fl-black-btn" href="#">follow @postatoakgate</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php get_footer(); ?>


  