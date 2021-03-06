<?php 
/*Template Name: Contact*/
get_header();
$thisID = get_the_ID();
$telephone = get_field('telephone', 'options');
$address = get_field('address', 'options');
$gurl = get_field('gurl', 'options');
$gmaplink = !empty($gurl)?$gurl: 'javascript:void()';
$mapcode = get_field('gmap_code', $thisID);
$bannerID = get_field('banner', $thisID);
$banner = !empty($bannerID)? cbv_get_image_src($bannerID): banner_placeholder();
?>
<section class="hm-banner">
  <div class="hm-banner-bg-black"></div>
  <div class="hm-bnr-bg inline-bg" style="background:url(<?php echo $banner; ?>);"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="hm-bnr-cntlr">
          <div class="hm-bnr-desc-cntlr">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="contact-form-sec-wrp">
  <div class="contact-form-lft-bg"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="contact-form-block clearfix">
          <div class="contact-form-lft mHc">
            <?php 
              $intro = get_field('introsec', $thisID);
              if($intro):
            ?>
            <div class="contact-form-info-cntlr">
              <div class="contact-form-info">
                <?php if( !empty($intro['title']) ) printf( '<h2 class="contact-form-info-title fl-h2">%s</h2>', $intro['title'] ); ?>
                <div class="contact-form-info-des">
                  <?php if( !empty($intro['description']) ) echo wpautop( $intro['description'] ); ?>
                </div>
                <div class="contact-form-dtails">
                  <?php 
                    if( !empty($address) ) printf('<div class="cnt-addres"><a href="%s" target="_blank">%s</a></div>', $gmaplink, $address); 
                    if( !empty($telephone) ) printf('<div class="cnt-tel"><a href="tel:%s">%s</a></div>', phone_preg($telephone), $telephone); 
                  ?>
                </div>
              </div>
            </div>
            <?php endif; ?>
          </div>
          <div class="contact-form-rgt mHc">
            <?php 
              $form = get_field('form', $thisID);
              if($form):
                $shortcode = $form['shortcode'];
            ?>
            <div class="contact-form-dsc-wrp">
              <div class="contact-form-title-cntlr">
                <?php if( !empty($form['title']) ) printf( '<h2 class="contact-form-title fl-h2">%s</h2>', $form['title'] ); ?>
              </div>
              <div class="contact-form-wrp clearfix">
                <div class="wpforms-container">
                   <?php if( !empty($shortcode) ) echo do_shortcode($shortcode); ?>
                </div>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php if( $mapcode ): ?>
<section class="contact-google-map-sec-wrp">
  <div class="contact-google-map-wrp">
    <div class="contact-google-map">
      <?php echo $mapcode; ?>
  </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>