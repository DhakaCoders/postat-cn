<?php 
get_header();
$thisID = get_the_ID();
$banners = get_field('banners', $thisID);
if($banners){
?>
<section class="page-banner">
  <div class="page-bnr-slider-cntlr">
    <div class="page-bnr-slider pageBnrSlider">
      <?php foreach( $banners as $banner ): ?>
      <div class="pg-bnr-slide-item-cntlr">
        <div class="pg-bnr-slide-item">
          <div class="page-banner-bg-black"></div>
          <div class="page-bnr-bg inline-bg" style="background-image: url(<?php echo !empty($banner)? cbv_get_image_src($banner): ''; ?>);"></div>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="page-bnr-cntlr">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php } ?>
<?php 
$thumbID = get_post_thumbnail_id(get_the_ID());
$thumb = !empty($thumbID)? cbv_get_image_src($thumbID): news_placeholder();
$thumbtag = !empty($thumbID)? cbv_get_image_tag($thumbID): news_placeholder('tag');
$ovview = get_field('overview', get_the_ID());
?>
<div class="cabin-facilities-specific-ctlr">

  <section class="lftdes-rgtimg-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="lftdes-rgtimg-sec-inr">
            <div class="lftdes-rgtimg-ctlr lftimg-rgtdes">
              <div class="lftdes-rgtimg-lft">
                <div class="lftdes-rgtimg-img inline-bg" style="background:url(<?php echo $thumb; ?>)">
                  <?php echo $thumbtag; ?>
                </div>
              </div>
              <div class="lftdes-rgtimg-rgt">
                <div class="lftdes-rgtimg-des pt-link-hover">
                  <h2 class="lftdes-rgtimg-title fl-h2"><?php the_title(); ?></h2>
                  <div class="fea-grd-ctlr">
                    <?php if( !empty($ovview['person']) ): ?>
                    <div class="fea-item pt-user">
                      <i>
                        <svg class="fea-item-img-01-svg" width="34.393" height="43.773" viewBox="0 0 34.393 43.773" fill="#000000">
                        <use xlink:href="#fea-item-img-01-svg"></use> </svg>
                      </i>
                      <?php printf('<span>%s</span>', $ovview['person']); ?>
                    </div>
                    <?php endif; ?>
                    <?php if( !empty($ovview['bed']) ): ?>
                    <div class="fea-item pt-bed">
                      <i>
                        <svg class="fea-item-img-02-svg" width="50.661" height="42" viewBox="0 0 50.661 42" fill="#000000">
                        <use xlink:href="#fea-item-img-02-svg"></use> </svg>
                      </i>
                      <?php printf('<span>%s</span>', $ovview['bed']); ?>
                    </div>
                    <?php endif; ?>
                    <?php if( !empty($ovview['bathroom']) ): ?>
                    <div class="fea-item pt-bath">
                      <i>
                        <svg class="fea-item-img-03-svg" width="42.47" height="42.3" viewBox="0 0 42.47 42.3" fill="#000000">
                        <use xlink:href="#fea-item-img-03-svg"></use> </svg>
                      </i>
                      <?php printf('<span>%s</span>', $ovview['bathroom']); ?>
                    </div>
                    <?php endif; ?>
                  </div>
                  <?php 
                    if( !empty($ovview['subtitle']) ) printf('<h3 class="lftdes-rgtimg-subtitle fl-h6">%s</h3>', $ovview['subtitle']);
                    if( !empty($ovview['description']) ) echo wpautop($ovview['description']); 
                  ?>
                  <div class="lftdes-rgtimg-des-btn btn-ctlr">
                    <ul class="reset-list clearfix">
                      <?php 
                        $booklink = $ovview['booking_link'];
                        if( is_array( $booklink ) &&  !empty( $booklink['url'] ) ){
                            printf('<li><a class="fl-transparent-btn" href="%s" target="%s">%s</a></li>', $booklink['url'], $booklink['target'], $booklink['title']); 
                        }
                      ?>
                      <li><a class="fl-gray-btn" href="#">floor plan</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
$showhide_block = get_field('showhide_block', $thisID);
if($showhide_block): 
$intro = get_field('fullblock', $thisID);
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
<?php endif; ?>
<?php
$showhide_amenities = get_field('showhide_amenities', $thisID);
if($showhide_amenities): 
$amenities = get_field('amenitiessec', $thisID);
if($amenities):
  $amens = $amenities['amenities'];
?>  
<section class="amenities-sec">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="amenities-sec-inr">
        <div class="pt-grids-sec-entry-hdr">
        <?php if( !empty($amenities['title']) ) printf('<h2 class="fl-h2 pt-grids-sec-entry-hdr-title">%s</h2>', $amenities['title']); ?>
        </div>
        <?php if( $amens ): ?>
        <div class="amenities-grds">
          <ul class="reset-list clearfix">
            <?php foreach( $amens as $amen ): ?>
            <li>
              <div class="amenities-grd-item">
                <i>
                  <?php if( !empty($amen['icon']) ) echo cbv_get_image_tag($amen['icon']); ?>
                </i>
                <?php printf('<span>%s</span>', $amen['title']); ?>
              </div>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
</section>
<?php endif; ?>
<?php endif; ?>
<?php
$showhide_luxuary_block = get_field('showhide_luxuary_block', $thisID);
if($showhide_luxuary_block): 
$pacage_sec = get_field('luxury_pacage_sec', $thisID);
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
</div>

<?php get_footer(); ?>

  