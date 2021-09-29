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



<div class="modal fade show" id="hdr-rgt-btm-add-card" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-right:0;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i><svg class="mail-icon" width="66" height="64" viewBox="0 0 66 64" fill="#48484a">
            <use xlink:href="#close-icon"></use></svg>
          </i>
        </button>
        <div class="modal-con-cntlr"> 
          <div class="modal-img">
            <img src="<?php echo THEME_URI; ?>/assets/images/modal-bg.jpg" alt="">
          </div>
          <div class="modal-btn">
            <a class="fl-transparent-btn" href="#">download plan</a>
          </div>
        </div>  
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>