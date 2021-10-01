<?php 
get_header(); 
$thisID = get_option( 'page_for_posts' );
$bannerID = get_field('banner', $thisID);
$customtitle = get_field('custom_title', $thisID);
$banner = !empty($bannerID)? cbv_get_image_src($bannerID): banner_placeholder();
$page_title = !empty($customtitle)? $customtitle: get_the_title($thisID);
?>
<section class="hm-banner">
  <div class="hm-banner-bg-black"></div>
  <div class="hm-bnr-bg inline-bg" style="background-image: url('<?php echo $banner; ?>');"></div>
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

<section class="news-landing-grid-sec">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="news-landing-sec-entry-hdr">
            <?php printf('<h1 class="news-landing-sec-title fl-h2">%s</h1>', $page_title); ?>
          </div>
          <?php echo do_shortcode('[ajax_posts]'); ?>
        </div>
      </div>
    </div>
</section>
<?php get_footer(); ?>