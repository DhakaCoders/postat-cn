<?php 
  $logoObj = get_field('ftlogo', 'options');
  if( is_array($logoObj) ){
    $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
  }else{
    $logo_tag = '';
  }
  $telephone = get_field('telephone', 'options');
  $email = get_field('emailaddres', 'options');
  $address = get_field('address', 'options');
  $cont_link = get_field('contact_link', 'options');
  $gurl = get_field('gurl', 'options');
  $gmaplink = !empty($gurl)?$gurl: 'javascript:void()';
  $copyright_text = get_field('copyright_text', 'options');
  $fticon = get_field('fticon', 'options');
  $fticonlink = get_field('fticonlink', 'options');
?>
<footer class="footer-wrp">
  <div class="ftr-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="ftr-top-cntlr">
            <div class="ftr-topbar">
            <?php if( !empty($logo_tag) ): ?>
            <div class="ftr-logo">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php echo $logo_tag; ?>
              </a>
            </div>
            <?php endif; ?>
            <?php if( !empty($cont_link['url']) && is_array($cont_link) ): ?>
              <div class="ftr-btn">
                <?php printf('<a class="fl-black-btn" href="%s" target="%s">%s</a>', $cont_link['url'], $cont_link['target'], $cont_link['title']); ?>
              </div>
            <?php endif; ?>
            </div>
            <div class="ftr-col-cntlr clearfix">
              <div class="ftr-col ftr-col-01">
              <?php 
                if( !empty($telephone) ) printf('<h6 class="fl-h6 ftr-col-title"><a href="tel:%s">%s</a></h6>', phone_preg($telephone), $telephone); 
                if( !empty($email) ) printf('<div class="ftr-mail"><a href="mailto:%s">%s</a></div>', $email, $email); 
                if( !empty($address) ) printf('<div class="ftr-addr"><a href="%s" target="_blank">%s</a></div>', $gmaplink, $address); 
              ?>
              </div>
              <div class="ftr-col ftr-col-02">
                <h6 class="fl-h6 ftr-col-title">explore</h6>
                <div class="ftr-menu">
                  <?php 
                    $ftmenuOptions1 = array( 
                        'theme_location' => 'cbv_footer_menu1', 
                        'menu_class' => 'reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $ftmenuOptions1 ); 
                  ?>
                </div>
              </div>
              <div class="ftr-col ftr-col-03">
                <h6 class="fl-h6 ftr-col-title">About</h6>
                <div class="ftr-menu">
                  <?php 
                    $ftmenuOptions2 = array( 
                        'theme_location' => 'cbv_footer_menu2', 
                        'menu_class' => 'reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $ftmenuOptions2 ); 
                  ?>
                </div>
              </div>
              <div class="ftr-col ftr-col-04">
                <h6 class="fl-h6 ftr-col-title">more</h6>
                <div class="ftr-menu">
                  <?php 
                    $ftmenuOptions3 = array( 
                        'theme_location' => 'cbv_footer_menu3', 
                        'menu_class' => 'reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $ftmenuOptions3 ); 
                  ?>
                </div>
              </div>
              <div class="ftr-col ftr-col-05">
                <?php if( !empty($fticon) ): ?>
                <div class="ftr-icon">
                  <?php 
                    if( !empty($fticonlink) ) printf('<a href="%s">', $fticonlink);
                      echo cbv_get_image_tag($fticon); 
                    if( !empty($fticonlink) ) printf('</a>', $fticonlink);
                  ?>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
  <div class="ftr-btm">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="ftr-btm-cntlr">
            <div class="ftr-btm-lft">
              <div class="ftr-copyright">
                <?php if( !empty( $copyright_text ) ) printf( '%s', $copyright_text); ?>
              </div>
              <div class="ftr-btm-menu">
              <?php 
                $copymenuOptions = array( 
                    'theme_location' => 'cbv_copyright_menu', 
                    'menu_class' => 'reset-list',
                    'container' => '',
                    'container_class' => ''
                  );
                wp_nav_menu( $copymenuOptions ); 
              ?>
              </div>
            </div>
            <div class="ftr-developed-by">
              <p>Website by  <a target="_blank" href="#">BEVIN Creative</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>

<?php $floor_plan = get_field('floor_plan_img', 'options'); ?>
<div class="modal fade show" id="floor-plan-btm-add-card" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="padding-right:0;">
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
      <?php echo !empty($floor_plan)? cbv_get_image_tag($floor_plan):''; ?>
    </div>
    <div class="modal-btn">
      <a class="fl-transparent-btn" href="<?php echo !empty($floor_plan)? cbv_get_image_src($floor_plan):''; ?>" download>download plan</a>
    </div>
  </div>  
</div>
</div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>