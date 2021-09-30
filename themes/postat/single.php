<?php 
get_header(); 
$thisID = get_the_ID();
$bannerID = get_field('banner', $thisID);
$banner = !empty($bannerID)? cbv_get_image_src($bannerID): banner_placeholder();
//$page_title = !empty($customtitle)? $customtitle: get_the_title($thisID);
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
<?php $tags = get_the_tags($thisID); ?>
<div class="news-specific-ctlr">
<section class="pt-news-specific-tag-article-sec">
 <div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="pt-news-specific-tag-article-sec-inr">
         <div class="pt-news-specific-tag-date">
           <?php if( !empty($tags) ): ?>
           <div class="pt-news-specific-tag">
            <?php foreach($tags as $tag) :  ?>
             <strong><a href="<?php echo get_tag_link( $tag ); ?>">#<?php echo $tag->name; ?></a></strong>
             <?php endforeach; ?>
           </div>
            <?php endif; ?>
           <div class="pt-news-specific-date">
             <span><?php echo get_the_date('F Y'); ?></span>
           </div>
         </div>
         <div class="pt-news-specific-article">
           <ul class="reset-list">
             <?php if( get_previous_post_link( ) ){ ?>
             <li>
              <?php 
                preg_match('/href=(["\'])([^\1]*)\1/i', get_previous_post_link( ), $prev);
              ?>
              <a class="pt-article-prev" href="<?php echo $prev[2]?>">Previous article</a>
              </li>
              <?php } ?>
              <?php if( get_next_post_link( ) ){ ?>
             <li>
              <?php 
                preg_match('/href=(["\'])([^\1]*)\1/i', get_next_post_link( ), $next);
              ?>
              <a class="pt-article-nxt" href="<?php echo $next[2]?>">Next article</a>
             </li>
             <?php } ?>
           </ul>
         </div>
       </div>
     </div>
   </div>
 </div>
</section> 
<?php while ( have_rows('contents') ) : the_row();  ?>
<?php 
  if( get_row_layout() == 'introduction' ){ 
  $fctitle = get_sub_field('fc_title');
  $fc_text = get_sub_field('fc_text');
  $fc_image = get_sub_field('image');
  $introtitle = !empty($fctitle)?$fctitle:get_the_title($thisID);
?>
<section class="lftdes-rgtimg-sec">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="lftdes-rgtimg-sec-inr">
        <div class="lftdes-rgtimg-ctlr lftimg-rgtdes">
          <div class="lftdes-rgtimg-lft">
            <div class="lftdes-rgtimg-img-ctlr">
              <div class="lftdes-rgtimg-img inline-bg" style="background:url(<?php if( !empty($fc_image) ) echo cbv_get_image_src($fc_image); ?>)">
                <?php if( !empty($fc_image) ) echo cbv_get_image_tag($fc_image); ?>
              </div>
            </div>
          </div>
          <div class="lftdes-rgtimg-rgt">
            <div class="lftdes-rgtimg-des">
              <h2 class="lftdes-rgtimg-title fl-h2"><?php echo $introtitle; ?></h2>
              <h3 class="lftdes-rgtimg-subtitle fl-h6"><?php echo get_the_date('d F Y'); ?></h3>
              <?php if( !empty($fc_text) ) echo wpautop($fc_text); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<?php }elseif( get_row_layout() == 'full_width' ){ 
  $fctitle = get_sub_field('fc_title');
  $heading_color = get_sub_field('heading_color');
  $fc_text = get_sub_field('fc_text');
  $body_color = get_sub_field('body_color');
  $bg_color = get_sub_field('bg_color');
?>
<section class="pt-fullwidth-txt-module"<?php echo !empty($bg_color)?' style="background:'.$bg_color.'"':''; ?> >
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div>
            <?php if( !empty($fctitle) ): ?>
            <h2<?php echo !empty($heading_color)?' style="color:'.$heading_color.'"':''; ?>>
              <?php printf('%s', $fctitle)?>
            </h2>
            <?php endif; ?>
            <?php if( !empty($fc_text) ): ?>
            <div class="text-body"<?php echo !empty($body_color)?' style="color:'.$body_color.'!important"':''; ?>>
              <?php echo wpautop($fc_text); ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php 
}elseif( get_row_layout() == 'two_columns' ){
$fc_title = get_sub_field('fc_title');
$fc_text1 = get_sub_field('fc_text1');
$fc_text2 = get_sub_field('fc_text2');
$bg_color = get_sub_field('bg_color');
$txt_color = get_sub_field('txt_color');
$hd_color = get_sub_field('hd_color');
$txt_color = !empty($txt_color)?' style="color:'.$txt_color.'!important"':''; 
$string = '';
if( !empty($hd_color) ){
  $string = str_replace(' ', '', strip_tags($fc_text1));
  $string = strip_tags(substr($string,2, 8)); 
}elseif(!empty($txt_color)){
  $string = str_replace(' ', '', strip_tags($fc_text1));
  $string = strip_tags(substr($string,2, 8)); 
  $hd_color = $txt_color;
}

?>
<section class="pt-grids-sec-cntlr"<?php echo !empty($bg_color)?' style="background:'.$bg_color.'"':''; ?>>
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pt-grd-sec-inr">
            <div class="pt-grids-sec-entry-hdr">
              <?php if( !empty($fc_title) ) printf('<h2 class="fl-h2 pt-grids-sec-entry-hdr-title"%s>%s</h2>', $fc_title, $txt_color); ?>
            </div>
            <div class="pt-columns pt-columns-2"<?php echo $txt_color; ?>>
              <?php if( !empty($string) ): ?>
              <style type="text/css">
                .<?php echo $string; ?> h2{
                  color: <?php echo $hd_color; ?>;
                }
              </style>
              <?php endif; ?>
              <div class="pt-grid-item<?php echo !empty($string)?' '.$string:''; ?>">
                <div class="pt-grid-item-inr">
                  <?php if( !empty($fc_text1) ) echo wpautop($fc_text1); ?>
                </div>
              </div>
              <div class="pt-grid-item<?php echo !empty($string)?' '.$string:''; ?>">
                <div class="pt-grid-item-inr">
                  <?php if( !empty($fc_text2) ) echo wpautop($fc_text2); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php 
}elseif( get_row_layout() == 'three_columns' ){ 
$fc_title = get_sub_field('fc_title');
$fc_text1 = get_sub_field('fc_text1');
$fc_text2 = get_sub_field('fc_text2');
$fc_text3 = get_sub_field('fc_text3');
?>
<section class="pt-grids-sec-cntlr">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pt-grd-sec-inr">
            <div class="pt-grids-sec-entry-hdr">
            <?php if( !empty($fc_title) ) printf('<h2 class="fl-h2 pt-grids-sec-entry-hdr-title">%s</h2>', $fc_title); ?>
            </div>
            <div class="pt-columns pt-columns-3">
              <div class="pt-grid-item">
                <div class="pt-grid-item-inr">
                  <?php if( !empty($fc_text1) ) echo wpautop($fc_text1); ?>
                </div>
              </div>
              <div class="pt-grid-item">
                <div class="pt-grid-item-inr">
                  <?php if( !empty($fc_text2) ) echo wpautop($fc_text2); ?>
                </div>
              </div>
              <div class="pt-grid-item">
                <div class="pt-grid-item-inr">
                  <?php if( !empty($fc_text3) ) echo wpautop($fc_text3); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php 
}elseif( get_row_layout() == 'columns1_2' ){ 
$fc_title = get_sub_field('fc_title');
$fc_text1 = get_sub_field('fc_text1');
$fc_text2 = get_sub_field('fc_text2');
?>
<section class="pt-grids-sec-cntlr">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pt-grd-sec-inr">
            <div class="pt-grids-sec-entry-hdr">
              <?php if( !empty($fc_title) ) printf('<h2 class="fl-h2 pt-grids-sec-entry-hdr-title">%s</h2>', $fc_title); ?>
            </div>
            <div class="pt-columns pt-columns-2L">
              <div class="pt-grid-item">
                <div class="pt-grid-item-inr">
                  <?php if( !empty($fc_text1) ) echo wpautop($fc_text1); ?>
                </div>
              </div>
              <div class="pt-grid-item">
                <div class="pt-grid-item-inr">
                  <?php if( !empty($fc_text2) ) echo wpautop($fc_text2); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php 
}elseif( get_row_layout() == 'columns_2_1' ){ 
$fc_title = get_sub_field('fc_title');
$fc_text1 = get_sub_field('fc_text1');
$fc_text2 = get_sub_field('fc_text2');
?>
<section class="pt-grids-sec-cntlr">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pt-grd-sec-inr">
            <div class="pt-grids-sec-entry-hdr">
              <?php if( !empty($fc_title) ) printf('<h2 class="fl-h2 pt-grids-sec-entry-hdr-title">%s</h2>', $fc_title); ?>
            </div>
            <div class="pt-columns pt-columns-2R">
              <div class="pt-grid-item">
                <div class="pt-grid-item-inr">
                  <?php if( !empty($fc_text1) ) echo wpautop($fc_text1); ?>
                </div>
              </div>
              <div class="pt-grid-item">
                <div class="pt-grid-item-inr">
                  <?php if( !empty($fc_text2) ) echo wpautop($fc_text2); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php 
}elseif( get_row_layout() == 'four_columns' ){ 
$fc_title = get_sub_field('fc_title');
$fc_text1 = get_sub_field('fc_text1');
$fc_text2 = get_sub_field('fc_text2');
$fc_text3 = get_sub_field('fc_text3');
$fc_text4 = get_sub_field('fc_text4');
?>
<section class="pt-grids-sec-cntlr">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pt-grd-sec-inr">
            <div class="pt-grids-sec-entry-hdr">
              <?php if( !empty($fc_title) ) printf('<h2 class="fl-h2 pt-grids-sec-entry-hdr-title">%s</h2>', $fc_title); ?>
            </div>
            <div class="pt-columns pt-columns-4">
              <div class="pt-grid-item">
                <div class="pt-grid-item-inr">
                  <?php if( !empty($fc_text1) ) echo wpautop($fc_text1); ?>
                </div>
              </div>
              <div class="pt-grid-item">
                <div class="pt-grid-item-inr">
                 <?php if( !empty($fc_text2) ) echo wpautop($fc_text2); ?>
                </div>
              </div>
              <div class="pt-grid-item">
                <div class="pt-grid-item-inr">
                  <?php if( !empty($fc_text3) ) echo wpautop($fc_text3); ?>
                </div>
              </div>
              <div class="pt-grid-item">
                <div class="pt-grid-item-inr">
                  <?php if( !empty($fc_text4) ) echo wpautop($fc_text4); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php 
}elseif( get_row_layout() == 'testimonials' ){ 
$testiobj = get_sub_field('select_testimonial');
if( empty($testiobj) ){
    $testiobj = get_posts( array(
      'post_type' => 'testimonials',
      'posts_per_page'=> -1,
      'orderby' => 'date',
      'order'=> 'asc',

    ) );  
}
if($testiobj){
?>
<section class="pt-text-slider-ctlr">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pt-text-slider-wrap">
           <div class="pt-text-slider">
            <div class="pt-slider-prev-nxt">
              <span class="pt-prev"></span>
              <span class="pt-nxt"></span>
            </div>
            <div class="pt-text-slider-inr ptTextSlider">
              <?php foreach( $testiobj as $testi ) : ?>
              <div class="pt-text-slider-item">
                <h2 class="pt-text-slider-title fl-h2">“<?php echo $testi->post_content; ?>”</h2>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
}
}elseif( get_row_layout() == 'luxury_packages' ){ 
$packobj = get_sub_field('select_package');
if( empty($packobj) ){
    $packobj = get_posts( array(
      'post_type' => 'packages',
      'posts_per_page'=> 2,
      'orderby' => 'date',
      'order'=> 'asc'
    ) );  
}
if($packobj){
?>
<section class="full-width-img-bleed-sec">
<div class="full-width-img-bleed-sec-rows-cntlr">
  <ul class="reset-list clearfix">
    <?php 
      foreach( $packobj as $package ) :
      $imgID = get_post_thumbnail_id($package->ID);
      $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): ''; 
      $imgsrc = !empty($imgID)? cbv_get_image_src($imgID): ''; 
    ?>
    <li>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="full-width-img-des-cntlr">
              <div class="full-width-img-des-lft mHc">
                <div class="full-width-img-cntlr">
                  <div class="inline-bg" style="background-image: url(<?php echo $imgsrc; ?>);"></div>
                  <?php echo $imgtag; ?>
                </div>
              </div>
              <div class="full-width-img-des-rgt mHc">
                <div class="full-width-des-innr">
                  <h2 class="full-width-des-title fl-h2"><?php echo get_the_title($package->ID); ?></h2>
                  <?php echo get_the_excerpt($package->ID); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>
    <?php endforeach; ?>
  </ul>
</div>
</section>
<?php 
}
}elseif( get_row_layout() == 'accordion_design_1' ){ 
$fc_title = get_sub_field('fc_title');
$fc_text = get_sub_field('fc_text');
$accordions = get_sub_field('accordions');
?>
<section class="pt-des-accordion-sec pt-grids-sec-cntlr">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pt-des-accordion-sec-inr">
          <div class="pt-columns pt-columns-2L">
            <div class="pt-grid-item">
              <div class="pt-grid-item-inr">
                <div class="pt-grids-col-entry-hdr">
                  <?php if( !empty($fc_title) ) printf('<h2 class="fl-h2 pt-grids-col-entry-hdr-title">%s</h2>', $fc_title); ?>
                </div>
                <?php if( !empty($fc_text) ) echo wpautop($fc_text);?>
              </div>
            </div>
            <?php if( $accordions ): ?>
            <div class="pt-grid-item">
              <div class="pt-grid-item-inr">
                <?php foreach( $accordions as $accordion ): ?>
                <div class="pt-accordion-menu">
                  <div class="pt-accordion-hdr">
                  <?php if( !empty($accordion['title']) ) printf('<h3 class="pt-accordion-title fl-h6">%s</h3>', $accordion['title']); ?>
                  </div>
                  <div class="pt-accordion-des">
                    <?php if( !empty($accordion['description']) ) echo wpautop($accordion['description']);?>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
}elseif( get_row_layout() == 'accordion_design_2' ){ 
$fc_title = get_sub_field('fc_title');
$fc_text = get_sub_field('fc_text');
$accordions = get_sub_field('accordions');
?>
<section class="pt-des-accordion-sec pt-grids-sec-cntlr pt-des-accordion-gray-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pt-des-accordion-sec-inr">
          <div class="pt-columns pt-columns-2L">
            <div class="pt-grid-item">
              <div class="pt-grid-item-inr">
                <div class="pt-grids-col-entry-hdr">
                  <?php if( !empty($fc_title) ) printf('<h2 class="fl-h2 pt-grids-col-entry-hdr-title">%s</h2>', $fc_title); ?>
                </div>
                <?php if( !empty($fc_text) ) echo wpautop($fc_text);?>
              </div>
            </div>
            <?php if( $accordions ): ?>
            <div class="pt-grid-item">
              <div class="pt-grid-item-inr">
                <?php foreach( $accordions as $accordion ): ?>
                <div class="pt-accordion-menu">
                  <div class="pt-accordion-hdr">
                    <?php if( !empty($accordion['title']) ) printf('<h3 class="pt-accordion-title fl-h6">%s</h3>', $accordion['title']); ?>
                  </div>
                  <div class="pt-accordion-des">
                    <?php if( !empty($accordion['description']) ) echo wpautop($accordion['description']);?>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
}elseif( get_row_layout() == 'text_image' ){ 
$fc_title = get_sub_field('fc_title');
$fc_text = get_sub_field('fc_text');
$fc_image = get_sub_field('image');
$image_position = get_sub_field('image_position');
$class_position = $image_position == 'right'?' lftimg-rgtdes':'';
?>
<section class="pt-grids-sec-cntlr">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pt-grd-sec-inr">
            <div class="pt-columns pt-columns-2R<?php echo $class_position; ?>">
              <div class="pt-grid-item">
                <div class="pt-grid-item-inr">
                  <div class="pt-grid-item-img inline-bg" style="background:url(<?php echo !empty($fc_image)?cbv_get_image_src($fc_image):''; ?>);">
                    <?php echo !empty($fc_image)?cbv_get_image_tag($fc_image):''; ?>
                  </div>
                </div>
              </div>
              <div class="pt-grid-item">
                <div class="pt-grid-item-inr">
                  <div class="pt-grids-col-entry-hdr">
                  <?php if( !empty($fc_title) ) printf('<h2 class="fl-h2 pt-grids-col-entry-hdr-title">%s</h2>', $fc_title); ?>
                  </div>
                  <?php if( !empty($fc_text) ) echo wpautop($fc_text);?>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php 
}elseif( get_row_layout() == 'text_image2' ){ 
$fc_title = get_sub_field('fc_title');
$fc_text = get_sub_field('fc_text');
$fc_image = get_sub_field('image');
$image_position = get_sub_field('image_position');
$class_position = $image_position == 'right'?' lftimg-rgtdes':'';
?>
<section class="pt-grids-sec-cntlr">
  <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="pt-grd-sec-inr">
            <div class="pt-columns pt-columns-2<?php echo $class_position; ?>">
              <div class="pt-grid-item">
                <div class="pt-grid-item-inr">
                <div class="pt-grid-item-img pt-grd-item-img-columns2 inline-bg" style="background:url(<?php echo !empty($fc_image)?cbv_get_image_src($fc_image):''; ?>)">
                    <?php echo !empty($fc_image)?cbv_get_image_tag($fc_image):''; ?>
                  </div>
                </div>
              </div>
              <div class="pt-grid-item">
                <div class="pt-grid-item-inr">
                  <div class="pt-grids-col-entry-hdr">
                    <?php if( !empty($fc_title) ) printf('<h2 class="fl-h2 pt-grids-col-entry-hdr-title">%s</h2>', $fc_title); ?>
                  </div>
                  <?php if( !empty($fc_text) ) echo wpautop($fc_text);?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section>
<?php 
}elseif( get_row_layout() == 'team_members' ){ 
$fc_title = get_sub_field('fc_title');
$memberobj = get_sub_field('select_members');
if( empty($memberobj) ){
    $memberobj = get_posts( array(
      'post_type' => 'team-members',
      'posts_per_page'=> -1,
      'orderby' => 'date',
      'order'=> 'asc',

    ) );  
}
?>
<section class="pt-team-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pt-team-sec-inr">
          <div class="pt-grids-sec-entry-hdr">
            <?php if( !empty($fc_title) ) printf('<h2 class="fl-h2 pt-grids-sec-entry-hdr-title">%s</h2>', $fc_title); ?>
          </div>
          <div class="pt-team-slider-ctlr">
            <div class="pt-slider-prev-nxt">
              <span class="pt-prev">
                <!-- <i><svg class="fl-prev-svg" width="53" height="46" viewBox="0 0 53 46" fill="#fff">
                  <use xlink:href="#fl-prev-svg"></use> </svg></i> -->
              </span>
              <span class="pt-nxt"></span>
            </div>
            <?php if($memberobj): ?>
            <div class="pt-team-grds ptTeamSlider">
            <?php 
                foreach( $memberobj as $member ) :
                $imgID = get_post_thumbnail_id($member->ID);
                $imgtag = !empty($imgID)? cbv_get_image_tag($imgID): ''; 
                $position = get_field('position', $member->ID);
                $link = get_field('link', $member->ID);
            ?>
              <div class="pt-team-grd-item-ctlr">
                <div class="pt-team-grd-item">
                  <?php if( !empty($link) ) printf('<a href="%s" class="overlay-link"></a>', $link); ?>
                  <div class="pt-team-grd-item-img-ctlr">
                    <div class="pt-team-grd-item-img">
                      <?php echo $imgtag; ?>
                    </div>
                  </div>
                  <div class="pt-team-grd-item-des">
                    <h3 class="pt-team-grd-des-title fl-h6">
                      <a href="#">
                        <?php if( !empty($link) ) printf('<a href="%s">', $link); ?>
                        <?php echo get_the_title($member->ID); ?>,
                      <?php if( !empty($link) ) printf('</a>'); ?>
                    </h3>
                    <?php if( !empty($position) ) printf('<strong>%s</strong>', $position); ?>
                    <p><?php echo get_the_excerpt($member->ID); ?></p>
                    <?php if( !empty($link) ) printf('<a class="fl-transparent-btn" href="%s">read more</a>', $link); ?>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
}elseif( get_row_layout() == 'featured_images' ){ 
$fc_title = get_sub_field('fc_title');
$fc_images = get_sub_field('fc_images');
?>
<section class="pt-fea-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pt-fea-sec-inr">
          <div class="pt-grids-sec-entry-hdr">
            <?php if( !empty($fc_title) ) printf('<h2 class="fl-h2 pt-grids-sec-entry-hdr-title">%s</h2>', $fc_title); ?>
          </div>
          <?php if($fc_images): ?>
          <div class="pt-fea-slider-ctlr">
            <div class="pt-fea-slider-grds">
              <?php foreach( $fc_images as $image ): ?>
              <div class="pt-fea-slider-grd-item">
                <div class="pt-fea-slider-grd-item-img">
                  <?php echo !empty($image)?cbv_get_image_tag( $image ):''; ?>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php 
}elseif( get_row_layout() == 'gallery' ){ 
$fc_title = get_sub_field('fc_title');
$gallery = get_sub_field('fc_gallery');
$lightbox = get_sub_field('display_lightbox');
?>
<section class="pt-gallery-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="pt-gallery-sec-inr">
          <div class="pt-grids-sec-entry-hdr">
            <?php if( !empty($fc_title) ) printf('<h2 class="fl-h2 pt-grids-sec-entry-hdr-title">%s</h2>', $fc_title); ?>
          </div>
          <?php if( $gallery ): ?>
          <div class="gallery-wrap clearfix">
            <div class="gallery gallery-columns-4">
              <?php 
                foreach( $gallery as $image ): 
                $lightboxImg = !empty($image)?cbv_get_image_src( $image ):'';
              ?>
              <figure class="gallery-item">
                <div class="gallery-icon portrait">
                  <?php if( isset($lightbox[0]) && $lightbox[0] == '1' ) echo "<a data-fancybox='gallery' href='{$lightboxImg}' class='overlay-link'></a>"; ?>
                  <div class="gallery-icon-img inline-bg" style="background: url('<?php echo !empty($image)?cbv_get_image_src( $image ):''; ?>');"></div>
                  <?php echo !empty($image)?cbv_get_image_tag( $image ):''; ?>
                </div>
              </figure>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php }elseif( get_row_layout() == 'horizontal_line' ){ ?>
<hr>
<?php }elseif( get_row_layout() == 'gap' ){ 
  $fc_gap = get_sub_field('fc_gap');
?>
<div class="gap-<?php echo $fc_gap; ?>"></div>
<?php } ?>
<?php endwhile; ?>
</div>
<?php get_footer(); ?>