<?php 
/*Template Name: Cabin*/
get_header();
$thisID = get_the_ID();
$bannerID = get_field('banner', $thisID);
$banner = !empty($bannerID)? cbv_get_image_src($bannerID): banner_placeholder();
?>
<section class="page-banner">
<div class="page-banner-bg-black"></div>
<div class="page-bnr-bg inline-bg" style="background-image: url('<?php echo $banner; ?>');"></div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="page-bnr-cntlr">
        
      </div>
    </div>
  </div>
</div>
</section>
<div class="cabin-landing-ctlr">
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
$showhide_col = get_field('showhide_col', $thisID);
if($showhide_col): 
$col = get_field('colsec', $thisID);
if($col):
?>
<section class="pt-grids-sec-cntlr">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pt-grd-sec-inr">
          <div class="pt-columns pt-columns-3">
          	<?php if( !empty($col['col_1']) ): ?>
            <div class="pt-grid-item">
              <div class="pt-grid-item-inr">
                <?php echo wpautop( $col['col_1'] ); ?>
              </div>
            </div>
        	<?php endif; ?>
        	<?php if( !empty($col['col_2']) ): ?>
            <div class="pt-grid-item">
              <div class="pt-grid-item-inr">
                <?php echo wpautop( $col['col_2'] ); ?>
              </div>
            </div>
            <?php endif; ?>
            <?php if( !empty($col['col_3']) ): ?>
            <div class="pt-grid-item">
              <div class="pt-grid-item-inr">
                <?php echo wpautop( $col['col_3'] ); ?>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>    
</section>
<?php endif; ?>
<?php endif; ?>
<?php
$showhide_secabin = get_field('showhide_secabin', $thisID);
if($showhide_secabin): 
$cabinobj = get_field('select_cabin', $thisID);
if( empty($cabinobj) ){
    $cabinobj = get_posts( array(
      'post_type' => 'cabin',
      'posts_per_page'=> -1,
      'orderby' => 'date',
      'order'=> 'DESC',

    ) );  
}
if( $cabinobj ){
?>
<section class="lftdes-rgtimg-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="lftdes-rgtimg-sec-inr">
          <div class="lftdes-rgtimg-grds">
          <?php
          	$i = 1;
            foreach( $cabinobj as $cabin ) {
            global $post;
            $imgID = get_post_thumbnail_id($cabin->ID);
            $thumb = !empty($imgID)? cbv_get_image_src($imgID): cabin_placeholder();
            $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): cabin_placeholder('tag');
            $ovview = get_field('overview', $cabin->ID);
          ?>
            <div class="lftdes-rgtimg-grd-item">
              <div class="lftdes-rgtimg-ctlr<?php echo ($i%2 != 0)?' lftimg-rgtdes':''; ?>">
                <div class="lftdes-rgtimg-lft">
                  <div class="lftdes-rgtimg-img inline-bg" style="background:url(<?php echo $thumb; ?>)">
                    <?php echo $imgtag; ?>
                  </div>
                </div>
                <div class="lftdes-rgtimg-rgt">
                  <div class="lftdes-rgtimg-des pt-link-hover">
                    <h2 class="lftdes-rgtimg-title fl-h2"><?php echo get_the_title($cabin->ID); ?></h2>
                    
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
                    <a href="<?php the_permalink($cabin->ID); ?>">Learn more</a>
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
        	<?php $i++; } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php } ?>
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