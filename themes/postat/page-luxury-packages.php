<?php 
/*Template Name: Luxury Packages*/
get_header();
$thisID = get_the_ID();
$bannerID = get_field('banner', $thisID);
$content = get_field('description', $thisID);
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
<?php if( !empty($content) ): ?>
<section class="pt-intro-text-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pt-intro-text-module">
          <?php echo wpautop($content); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php 
$query = new WP_Query(array( 
    'post_type'=> 'packages',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order'=> 'DESC'
  ) 
);
?>
<section class="full-width-img-bleed-sec">
  <div class="full-width-img-bleed-sec-rows-cntlr">
    <?php if($query->have_posts()):  ?>
    <ul class="reset-list clearfix">
      <?php 
        while($query->have_posts()): $query->the_post(); 
        $thumbID = get_post_thumbnail_id(get_the_ID());
        $thumb = !empty($thumbID)? cbv_get_image_src($thumbID): package_placeholder();
        $thumbtag = !empty($thumbID)? cbv_get_image_tag($thumbID): package_placeholder('tag');
      ?>
      <li>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="full-width-img-des-cntlr">
                <div class="full-width-img-des-lft mHc">
                  <div class="full-width-img-cntlr">
                    <div class="inline-bg" style="background-image: url(<?php echo $thumb; ?>);"></div>
                    <?php echo $thumbtag; ?>
                  </div>
                </div>
                <div class="full-width-img-des-rgt mHc">
                  <div class="full-width-des-innr">
                    <h2 class="full-width-des-title fl-h2"><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>
                    <a class="fl-transparent-btn" href="<?php the_permalink(); ?>">learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <?php endwhile; ?>
    </ul>
    <?php  
      else:
      echo '<div class="no-result">No Result.</div>';   
      endif;  
      wp_reset_postdata();
    ?>
  </div>
</section>



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

<?php get_footer(); ?>