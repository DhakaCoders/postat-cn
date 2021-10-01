  <?php get_header(); ?>
  <?php  
  $hbanner = get_field('banner', HOMEID);
  if($hbanner):
  $banner = !empty($hbanner['image'])? cbv_get_image_src( $hbanner['image'] ): '';

  $hqoutlink = $hbanner['quote_link'];
  $hbookinglink = $hbanner['booking_link'];
  $hreslink = $hbanner['reservation_link'];
  $havaillink = $hbanner['availability_link'];
?>
<section class="hm-banner">
  <div class="hm-bnr-btm-btn-cntlr">
    <?php 
      if( is_array( $hreslink ) &&  !empty( $hreslink['url'] ) ){
          printf('<div class="hm-bnr-btm-btn"><a href="%s" target="%s">%s</a></div>', $hreslink['url'], $hreslink['target'], $hreslink['title']); 
      }
      if( is_array( $havaillink ) &&  !empty( $havaillink['url'] ) ){
          printf('<div class="hm-bnr-btm-btn hm-bnr-btm-btn-2"><a href="%s" target="%s">%s</a></div>', $havaillink['url'], $havaillink['target'], $havaillink['title']); 
      }
    ?>
  </div>
  <div class="hm-banner-bg-black"></div>
  <div class="hm-bnr-bg inline-bg" style="background-image: url('<?php echo $banner; ?>');"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-bnr-cntlr">
          <div class="hm-bnr-desc-cntlr">
            <?php if( !empty($hbanner['quote_text']) ): ?>
            <div class="hm-bnr-desc">
              <p>“<?php printf('%s', $hbanner['quote_text']); ?>” 
                <?php 
                  if( is_array( $hqoutlink ) &&  !empty( $hqoutlink['url'] ) ){
                      printf('<a href="%s" target="%s">%s</a>', $hqoutlink['url'], $hqoutlink['target'], $hqoutlink['title']); 
                  }
                ?>
              </p>
            </div>
            <?php endif; ?>
            <?php 
              if( is_array( $hbookinglink ) &&  !empty( $hbookinglink['url'] ) ){
                  printf('<div class="hm-bnr-btn"><a class="fl-transparent-btn" href="%s" target="%s">%s</a></div>', $hbookinglink['url'], $hbookinglink['target'], $hbookinglink['title']); 
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php
$showhide = get_field('showhide', HOMEID);
if($showhide): 
$intro = get_field('introsec', HOMEID);
if($intro):
?>
<section class="lftdes-rgtimg-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="lftdes-rgtimg-sec-inr">
          <div class="lftdes-rgtimg-ctlr lftimg-rgtdes display-align">
            <div class="lftdes-rgtimg-lft">
              <div class="lftdes-rgtimg-img-ctlr">
                <div class="lftdes-rgtimg-img inline-bg" style="background:url(<?php if( !empty($intro['image']) ) echo cbv_get_image_src($intro['image']); ?>)">
                  <?php if( !empty($intro['image']) ) echo cbv_get_image_tag($intro['image']); ?>
                </div>
              </div>
            </div>
            <div class="lftdes-rgtimg-rgt">
              <div class="lftdes-rgtimg-des">
                <?php 
                if( !empty($intro['title']) ) printf('<h2 class="lftdes-rgtimg-title fl-h2">%s</h2>', $intro['title']);
                if( !empty($intro['subtitle']) ) printf('<h3 class="lftdes-rgtimg-subtitle fl-h6">%s</h3>', $intro['subtitle']);
                if( !empty($intro['description']) ) echo wpautop( $intro['description'] ); 
                $introlink = $intro['link'];
                if( is_array( $introlink ) &&  !empty( $introlink['url'] ) ){
                    printf('<a class="fl-transparent-btn" href="%s" target="%s">%s</a>', $introlink['url'], $introlink['target'], $introlink['title']); 
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>
<?php
$showhide_cabin = get_field('showhide_cabin', HOMEID);
if($showhide_cabin): 
$cabin = get_field('cabinsec', HOMEID);
if($cabin):
?>
<section class="cabin-sec inline-bg" style="background:url(<?php if( !empty($cabin['image']) ) echo cbv_get_image_src($cabin['image']); ?>)">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="cabin-sec-inr">
          <div class="cabin-des">
            <?php 
            if( !empty($cabin['title']) ) printf('<h2 class="cabin-des-title fl-h2">%s</h2>', $cabin['title']);
            if( !empty($cabin['subtitle']) ) printf('<h3 class="cabin-des-subtitle fl-h6">%s</h3>', $cabin['subtitle']);
            if( !empty($cabin['description']) ) echo wpautop( $cabin['description'] ); 
            $cabinlink = $cabin['link'];
            if( is_array( $cabinlink ) &&  !empty( $cabinlink['url'] ) ){
                printf('<a class="fl-white-btn" href="%s" target="%s">%s</a>', $cabinlink['url'], $cabinlink['target'], $cabinlink['title']); 
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
<?php
$showhide_secabin = get_field('showhide_secabin', HOMEID);
if($showhide_secabin): 
$cabinobj = get_field('select_cabin', HOMEID);
if( empty($cabinobj) ){
    $cabinobj = get_posts( array(
      'post_type' => 'cabin',
      'posts_per_page'=> -1,
      'orderby' => 'date',
      'order'=> 'asc',

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
                  <div class="lftdes-rgtimg-img-ctlr">
                    <div class="lftdes-rgtimg-img inline-bg" style="background:url(<?php echo $thumb; ?>)">
                    <?php echo $imgtag; ?>
                    </div>
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
                    <div class="lftdes-rgtimg-des-btn">
                      <?php 
                        $booklink = $ovview['booking_link'];
                        if( is_array( $booklink ) &&  !empty( $booklink['url'] ) ){
                            printf('<a class="fl-transparent-btn" href="%s" target="%s">%s</a>', $booklink['url'], $booklink['target'], $booklink['title']); 
                        }
                      ?>
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
$showhide_luxuary_block = get_field('showhide_luxuary_block', HOMEID);
if($showhide_luxuary_block): 
$pacage_sec = get_field('luxury_pacage_sec', HOMEID);
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
<?php
$showhide_testimonial = get_field('showhide_testimonial', HOMEID);
if($showhide_testimonial): 
$testi = get_field('testimonial_sec', HOMEID);
if($testi):
?>
<section class="waking-up-sec inline-bg" style="background:url(<?php if( !empty($testi['image']) ) echo cbv_get_image_src($testi['image']); ?>)">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="waking-up-sec-inr">
          <div class="waking-up-des">
            <blockquote>
              <?php if( !empty($testi['quote_text']) ): ?>
              <p>“<?php echo $testi['quote_text']; ?>”</p>
              <?php endif; ?>
              <?php if( !empty($testi['name']) ) printf('<strong>%s</strong>', $testi['name']); ?>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php endif; ?>
<?php
$showhide_post_og = get_field('showhide_post_og', HOMEID);
if($showhide_post_og): 
$post_akg = get_field('post_akg', HOMEID);
if($post_akg):
?>
<section class="lftdes-rgtimg-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="lftdes-rgtimg-sec-inr">
          <div class="lftdes-rgtimg-ctlr lftimg-rgtdes display-align">
            <div class="lftdes-rgtimg-lft">
              <div class="lftdes-rgtimg-img-ctlr">
                <div class="lftdes-rgtimg-img inline-bg" style="background:url(<?php if( !empty($post_akg['image']) ) echo cbv_get_image_src($post_akg['image']); ?>)">
                  <?php if( !empty($post_akg['image']) ) echo cbv_get_image_tag($post_akg['image']); ?>
                </div>
              </div>
            </div>
            <div class="lftdes-rgtimg-rgt">
              <div class="lftdes-rgtimg-des">
                <?php 
                if( !empty($post_akg['title']) ) printf('<h2 class="lftdes-rgtimg-title fl-h2">%s</h2>', $post_akg['title']);
                if( !empty($post_akg['subtitle']) ) printf('<h3 class="lftdes-rgtimg-subtitle fl-h6">%s</h3>', $post_akg['subtitle']);
                if( !empty($post_akg['description']) ) echo wpautop( $post_akg['description'] ); 
                ?>
              </div>
            </div>
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

<?php
$showhide_exploring = get_field('showhide_exploring', HOMEID);
if($showhide_exploring): 
$exploring = get_field('exploring_sec', HOMEID);
if($exploring):
?>
<section class="hunter-sec inline-bg" style="background:url(<?php if( !empty($exploring['image']) ) echo cbv_get_image_src($exploring['image']); ?>)">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hunter-sec-inr">
          <div class="hunter-des">
            <?php 
            if( !empty($exploring['title']) ) printf('<h2 class="hunterd-des-title fl-h2">%s</h2>', $exploring['title']);
            if( !empty($exploring['subtitle']) ) printf('<h3 class="hunter-des-subtitle fl-h6">%s</h3>', $exploring['subtitle']);
            if( !empty($exploring['description']) ) echo wpautop( $exploring['description'] ); 
            $expllink = $exploring['link'];
            if( is_array( $expllink ) &&  !empty( $expllink['url'] ) ){
                printf('<a class="fl-white-btn" href="%s" target="%s">%s</a>', $expllink['url'], $expllink['target'], $expllink['title']); 
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
<?php get_footer(); ?>