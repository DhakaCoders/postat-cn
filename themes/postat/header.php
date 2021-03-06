<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#D3E3CE">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php $favicon = get_theme_mod('favicon'); if(!empty($favicon)) { ?> 
  <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
  <?php } ?>

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->	


  <svg style="display: none;">
    <!-- <svg class="id-name" width="16" height="16" viewBox="0 0 16 16" fill="#FF5C26">
      <use xlink:href="#id-name"></use></svg> -->


    <!-- start of Kashob -->
    <symbol id="close-icon" xmlns="http://www.w3.org/2000/svg" width="66" height="64" viewBox="0 0 66 64">
      <g id="Menu" transform="translate(8.633 19)">
        <rect id="background" width="66" height="64" transform="translate(-8.633 -19)" opacity="0"/>
        <line id="Bottom" x2="49.367" transform="translate(7.23 30.454) rotate(-45)" stroke="#48484a" stroke-linecap="round" stroke-width="2"/>
        <line id="Middle" x2="49.367" transform="translate(0 13)" stroke="#48484a" stroke-linecap="round" stroke-width="2" opacity="0"/>
        <line id="Top" x2="49.367" transform="translate(7.23 -4.454) rotate(45)" fill="none" stroke="#48484a" stroke-linecap="round" stroke-width="2"/>
      </g>
    </symbol>


    <!-- start of Noyon -->
    <symbol id="youtube-icom" xmlns="http://www.w3.org/2000/svg" width="23.309" height="16.676" viewBox="0 0 23.309 16.676">
      <g id="Icon_feather-youtube" data-name="Icon feather-youtube" transform="translate(0.5 0.5)">
        <path id="Path_369" data-name="Path 369" d="M23.341,8.454a2.819,2.819,0,0,0-1.967-2.028C19.63,6,12.654,6,12.654,6s-6.976,0-8.72.466A2.819,2.819,0,0,0,1.966,8.494,29.406,29.406,0,0,0,1.5,13.858a29.406,29.406,0,0,0,.466,5.4A2.819,2.819,0,0,0,3.933,21.21c1.744.466,8.72.466,8.72.466s6.976,0,8.72-.466a2.819,2.819,0,0,0,1.967-2.028,29.406,29.406,0,0,0,.466-5.323,29.405,29.405,0,0,0-.466-5.4Z" transform="translate(-1.499 -6)" stroke="#48484a" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
        <path id="Path_370" data-name="Path 370" d="M14.625,19.351l5.83-3.316-5.83-3.316Z" transform="translate(-5.752 -8.177)"/>
      </g>
    </symbol>

    <symbol id="facebook-icon" xmlns="http://www.w3.org/2000/svg" width="9.096" height="16.982" viewBox="0 0 9.096 16.982">
      <path id="Icon_awesome-facebook-f" data-name="Icon awesome-facebook-f" d="M10.109,9.553l.472-3.073H7.632V4.485a1.537,1.537,0,0,1,1.733-1.66h1.341V.208A16.349,16.349,0,0,0,8.325,0C5.9,0,4.309,1.472,4.309,4.137V6.479h-2.7V9.553h2.7v7.43H7.632V9.553Z" transform="translate(-1.609)"/>
    </symbol>

    <symbol id="instagram-icon" xmlns="http://www.w3.org/2000/svg" width="17.329" height="17.329" viewBox="0 0 17.329 17.329">
      <g id="Icon_feather-instagram" data-name="Icon feather-instagram" transform="translate(0.5 0.5)">
        <path id="Path_364" data-name="Path 364" d="M7.082,3h8.165a4.082,4.082,0,0,1,4.082,4.082v8.165a4.082,4.082,0,0,1-4.082,4.082H7.082A4.082,4.082,0,0,1,3,15.247V7.082A4.082,4.082,0,0,1,7.082,3Z" transform="translate(-3 -3)" stroke="#48484a" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
        <path id="Path_365" data-name="Path 365" d="M18.561,14.722A3.266,3.266,0,1,1,15.81,11.97a3.266,3.266,0,0,1,2.751,2.751Z" transform="translate(-7.131 -7.072)" stroke="#48484a" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
        <path id="Path_366" data-name="Path 366" d="M26.25,9.75h0" transform="translate(-13.595 -6.076)" stroke="#48484a" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
      </g>
    </symbol>

    <symbol id="mail-icon" xmlns="http://www.w3.org/2000/svg" width="19" height="15" viewBox="0 0 19 15">
      <g id="new_post" transform="translate(0.266 0.114)">
        <path id="Shape" d="M17.1,15H1.9A1.889,1.889,0,0,1,0,13.127V1.876A1.89,1.89,0,0,1,1.9,0H17.1A1.89,1.89,0,0,1,19,1.876V13.127A1.889,1.889,0,0,1,17.1,15ZM1.9,4.689h0v8.438H17.1V4.689L9.5,9.375,1.9,4.689Zm0-2.813v.938L9.5,7.5l7.6-4.687V1.876Z" transform="translate(-0.266 -0.114)"/>
      </g>
    </symbol>

    <symbol id="phone-icon" xmlns="http://www.w3.org/2000/svg" width="16.186" height="16.186" viewBox="0 0 16.186 16.186">
      <path id="Path" d="M11.465,10.656,9.181,12.931A13.827,13.827,0,0,1,5.766,10.42,13.827,13.827,0,0,1,3.255,7.005L5.53,4.721,4.957,0H0V.9A15.448,15.448,0,0,0,4.466,11.721a15.448,15.448,0,0,0,10.821,4.466h.9V11.23Z"/>
    </symbol>
    <symbol id="user-icon" xmlns="http://www.w3.org/2000/svg" width="20.896" height="26.719" viewBox="0 0 20.896 26.719">
      <g id="Group_938" data-name="Group 938" transform="translate(-5.85 -4.494)">
        <path id="Path_1143" data-name="Path 1143" d="M19.88,16.6a6.583,6.583,0,1,0-7.164,0A9.975,9.975,0,0,0,5.85,26.028v5.185h20.9V26.075A9.975,9.975,0,0,0,19.88,16.6Zm-8.594-5.515A5.012,5.012,0,1,1,16.3,16.1h0A5.026,5.026,0,0,1,11.286,11.087ZM25.175,29.642H7.421V26.075a8.406,8.406,0,0,1,8.39-8.39h.974a8.406,8.406,0,0,1,8.39,8.39Z" transform="translate(0)"/>
      </g>
    </symbol>
    <symbol id="date-icon" xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
      <path id="Path_1149" data-name="Path 1149" d="M26.438,34.031a.846.846,0,0,1-.844.844H22.219a.844.844,0,0,1,0-1.687h3.375A.846.846,0,0,1,26.438,34.031Zm6.75-.844H29.813a.844.844,0,0,0,0,1.688h3.375a.844.844,0,0,0,0-1.687ZM45,23.906V41.625A3.379,3.379,0,0,1,41.625,45H21.375A3.379,3.379,0,0,1,18,41.625V23.906a3.379,3.379,0,0,1,3.375-3.375h2.531V18.844a.844.844,0,0,1,1.688,0v1.688h5.063V18.844a.844.844,0,0,1,1.688,0v1.688h5.063V18.844a.844.844,0,0,1,1.688,0v1.688h2.531A3.379,3.379,0,0,1,45,23.906Zm-1.687,0a1.687,1.687,0,0,0-1.687-1.687H39.094v1.688a.844.844,0,0,1-1.687,0V22.219H32.344v1.688a.844.844,0,0,1-1.687,0V22.219H25.594v1.688a.844.844,0,0,1-1.687,0V22.219H21.375a1.687,1.687,0,0,0-1.687,1.688V41.625a1.687,1.687,0,0,0,1.688,1.688h20.25a1.687,1.687,0,0,0,1.688-1.687Zm-17.719,13.5H22.219a.844.844,0,0,0,0,1.688h3.375a.844.844,0,0,0,0-1.687Zm7.594,0H29.813a.844.844,0,0,0,0,1.688h3.375a.844.844,0,0,0,0-1.687Zm7.594-10.125H22.219a.844.844,0,0,0,0,1.688H40.781a.844.844,0,0,0,0-1.687Zm0,5.906H37.406a.844.844,0,0,0,0,1.688h3.375a.844.844,0,0,0,0-1.687Zm0,4.219H37.406a.844.844,0,0,0,0,1.688h3.375a.844.844,0,0,0,0-1.687Z" transform="translate(-18 -18)"/>
    </symbol>


    <!-- start of Shariful -->
    <symbol id="fea-item-img-01-svg" xmlns="http://www.w3.org/2000/svg" width="34.393" height="43.773" viewBox="0 0 34.393 43.773">
      <g id="Group_917" data-name="Group 917" transform="translate(-5.45 -4.074)">
        <path id="Path_1143" data-name="Path 1143" d="M28.405,23.958a10.582,10.582,0,1,0-11.518,0A16.036,16.036,0,0,0,5.85,39.112v8.335H39.443V39.188A16.036,16.036,0,0,0,28.405,23.958ZM14.589,15.092a8.057,8.057,0,1,1,8.057,8.057h0A8.079,8.079,0,0,1,14.589,15.092ZM36.917,44.921H8.376V39.188A13.514,13.514,0,0,1,21.863,25.7h1.566A13.514,13.514,0,0,1,36.917,39.188Z" transform="translate(0)" stroke="#fff" stroke-width="0.8"/>
      </g>
    </symbol>
    <symbol id="fea-item-img-02-svg" xmlns="http://www.w3.org/2000/svg" width="50.661" height="42" viewBox="0 0 50.661 42">
      <g id="Group_916" data-name="Group 916" transform="translate(-5.288 -11.996)">
        <path id="Path_1141" data-name="Path 1141" d="M34.269,20.031h9.589a1.029,1.029,0,0,1,.96,1.116v4.47a1.027,1.027,0,0,1-.96,1.113H34.269a1.025,1.025,0,0,1-.96-1.113v-4.47A1.027,1.027,0,0,1,34.269,20.031Zm-16.9,0h9.585a1.031,1.031,0,0,1,.964,1.116v4.47a1.029,1.029,0,0,1-.964,1.113H17.372a1.032,1.032,0,0,1-.967-1.113v-4.47A1.034,1.034,0,0,1,17.372,20.031ZM13.755,13.68h33.73a2.4,2.4,0,0,1,2.5,2.71v8.841H46.5V21.147a2.734,2.734,0,0,0-2.643-2.8H34.269a2.739,2.739,0,0,0-2.65,2.8v4.47a2.739,2.739,0,0,0,2.65,2.8h9.589a2.615,2.615,0,0,0,2.322-1.5h4L54.25,41.431V52.3H50.968l-1.152-3.46a.843.843,0,0,0-.8-.575H12.207a.839.839,0,0,0-.8.575L10.255,52.3H6.972V41.431l4.085-14.508h3.986a2.628,2.628,0,0,0,2.329,1.5h9.585a2.739,2.739,0,0,0,2.65-2.8v-4.47a2.739,2.739,0,0,0-2.65-2.8H17.372a2.74,2.74,0,0,0-2.652,2.8v4.085H11.26V16.391A2.411,2.411,0,0,1,13.755,13.68Zm0-1.684C11,12,9.577,13.976,9.577,16.391v9.572L5.315,41.083a.766.766,0,0,0-.026.232V53.139a.841.841,0,0,0,.84.843h4.733a.849.849,0,0,0,.8-.573l1.152-3.462H48.408l1.156,3.462a.836.836,0,0,0,.8.573h4.581a.848.848,0,0,0,.631-.136l.007-.007a.465.465,0,0,0,.062-.046l0,0a.347.347,0,0,0,.057-.054,0,0,0,0,0,0,0,.727.727,0,0,0,.053-.056s0-.007.006-.011a.858.858,0,0,0,.173-.65v-11.7a.875.875,0,0,0-.033-.226L51.666,25.953V16.391A4.071,4.071,0,0,0,47.485,12H13.755Z" transform="translate(0 0)"/>
        <path id="Path_1142" data-name="Path 1142" d="M14.441,56.647c-1.113,0-1.03,1.748.085,1.748H52.368a.874.874,0,1,0,0-1.748Z" transform="translate(-2.835 -16.219)"/>
      </g>
    </symbol>
    <symbol id="fea-item-img-03-svg" xmlns="http://www.w3.org/2000/svg" width="42.47" height="42.3" viewBox="0 0 42.47 42.3">
      <path id="Path_1144" data-name="Path 1144" d="M44.646,26.792H4.748a1.138,1.138,0,0,0-1.136,1.136v3.841a1.138,1.138,0,0,0,1.136,1.136H5.79l1.057,10.15a4.308,4.308,0,0,0,4.295,3.871H38.252a4.307,4.307,0,0,0,4.295-3.871L43.6,32.906h1.041a1.137,1.137,0,0,0,1.136-1.136V27.928A1.137,1.137,0,0,0,44.646,26.792ZM41.191,42.915a2.947,2.947,0,0,1-2.939,2.649H11.141A2.948,2.948,0,0,1,8.2,42.915L7.161,32.906H42.234Zm3.228-11.373H4.976V28.155H44.419ZM8.025,25.657a.682.682,0,0,0,.682-.682h0v-18a.683.683,0,0,1,.682-.682H20.47a.683.683,0,0,1,.682.682v3.572H19.788V8.336a.682.682,0,0,0-.682-.682H10.752a.682.682,0,0,0-.682.682V24.975h0a.682.682,0,0,0,1.364,0V9.018h6.99v1.527H16.35a1.138,1.138,0,0,0-1.136,1.136v1.534a1.138,1.138,0,0,0,1.136,1.136h8.24a1.138,1.138,0,0,0,1.136-1.136V11.681a1.138,1.138,0,0,0-1.136-1.136H22.515V6.972A2.048,2.048,0,0,0,20.47,4.927H9.389A2.048,2.048,0,0,0,7.343,6.972v18A.681.681,0,0,0,8.025,25.657ZM24.363,11.908v1.079H16.577V11.908Zm-3.211,3.627a.681.681,0,0,1-.682.682h0a.682.682,0,0,1-.682-.682v-.227a.682.682,0,1,1,1.364,0Zm0,4.083a.682.682,0,0,1-.682.682h0a.682.682,0,0,1-.682-.682V18.71a.682.682,0,0,1,.682-.682h0a.682.682,0,0,1,.682.682Zm0,3.175v.227a.682.682,0,1,1-1.364,0v-.227a.682.682,0,0,1,.682-.682h0A.682.682,0,0,1,21.152,22.793ZM23.807,16.2a.7.7,0,0,1-.133.013.682.682,0,0,1-.668-.549l-.045-.223a.682.682,0,0,1,1.338-.266l.044.223a.682.682,0,0,1-.535.8Zm-.17,2.643a.682.682,0,0,1,1.338-.265l.18.909a.681.681,0,0,1-.536.8h0a.674.674,0,0,1-.134.014.683.683,0,0,1-.668-.549Zm2.15,3.822.045.223a.682.682,0,0,1-.536.8.707.707,0,0,1-.133.013.682.682,0,0,1-.668-.55l-.044-.223a.681.681,0,0,1,.536-.8h0A.68.68,0,0,1,25.786,22.665Zm-8.519-6.452a.7.7,0,0,1-.133-.013h0a.681.681,0,0,1-.535-.8l.044-.223a.682.682,0,1,1,1.337.265l-.044.223A.682.682,0,0,1,17.267,16.213ZM16.455,20.3a.674.674,0,0,1-.134-.014h0a.681.681,0,0,1-.536-.8l.18-.909a.683.683,0,0,1,.8-.536h0a.681.681,0,0,1,.535.8l-.18.909A.682.682,0,0,1,16.455,20.3Zm.036,2.63-.045.223a.682.682,0,0,1-.668.549.708.708,0,0,1-.134-.013.682.682,0,0,1-.535-.8l.044-.223a.681.681,0,0,1,.8-.536h0A.683.683,0,0,1,16.491,22.931Z" transform="translate(-3.462 -4.777)" stroke="#000" stroke-width="0.3"/>
    </symbol>
    

  </svg>
<link rel="preconnect" href="https://fonts.gstatic.com">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php 
$logoObj = get_field('hdlogo', 'options');
if( is_array($logoObj) ){
  $logo_tag = '<img src="'.$logoObj['url'].'" alt="'.$logoObj['alt'].'" title="'.$logoObj['title'].'">';
}else{
  $logo_tag = '';
}
$telephone = get_field('telephone', 'options');
$email = get_field('emailaddres', 'options');
$sinfo = get_field('social_media', 'options');
?> 
<div class="page-body-cntlr">
<div class="bdoverlay"></div>
<header class="header-wrap">
  <div class="hdr-topbar">
    <div class="container-lg">
      <div class="row">
        <div class="col-md-12">
          <div class="hdr-topbar-cntlr">
            <div class="hdr-topbar-inr">
              <div class="hdr-details-cntlr hide-sm">
                <div class="hdr-details ">
                  <?php if( !empty($email) ): ?>
                  <div class="hdr-mail">
                    <a href="mailto:<?php echo $email; ?>">
                      <i><svg class="mail-icon" width="19" height="15" viewBox="0 0 19 15" fill="#fff">
                        <use xlink:href="#mail-icon"></use></svg>
                      </i>
                    </a>
                  </div>
                <?php 
                  endif;
                  if( !empty($telephone) ):
                ?>
                  <div class="hdr-tel">
                    <a href="tel:<?php echo phone_preg($telephone); ?>">
                      <?php printf('<span>%s</span>', $telephone); ?>
                      <i><svg class="phone-icon" width="16.186" height="16.186" viewBox="0 0 16.186 16.186" fill="#fff">
                        <use xlink:href="#phone-icon"></use></svg>
                      </i>
                    </a>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
              <?php if($sinfo): ?>
              <div class="hdr-socials-cntlr hide-sm">
                <div class="hdr-socials">
                  <ul class="reset-list">
                  <?php 
                    if( !empty($sinfo['instagram_url']) ) printf('<li><a target="_blank" href="%s"><i class="fab fa-instagram"></i></a></li>', $sinfo['instagram_url']); 
                    if( !empty($sinfo['facebook_url']) ) printf('<li><a target="_blank" href="%s"><i class="fab fa-facebook-f"></i></a></li>', $sinfo['facebook_url']); 
                    if( !empty($sinfo['youtube_url']) ) printf('<li><a target="_blank" href="%s"><i class="fab fa-youtube"></i></a></li>', $sinfo['youtube_url']); 
                  ?>
                  </ul>
                </div>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header-inr">
            <div class="hdr-lft">
              <?php if( !empty($logo_tag) ): ?>
              <div class="logo">
               <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                 </a>
              </div>
              <?php endif; ?>
            </div>
            <div class="hdr-rgt">
              <div class="hamburger-cntlr">
                <div class="hamburger-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>


  <div class="xs-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="xs-menu-cntlr">
            <div class="xs-menu-hdr">
              <?php if( !empty($logo_tag) ): ?>
              <div class="logo">
               <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php echo $logo_tag; ?>
                 </a>
              </div>
              <?php endif; ?>
              <div class="hamburger-cntlr">
                <div class="hamburger-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div>
            <div class="xs-mbl-menu clearfix">
              <div class="xs-menu-col">
                <nav class="main-nav">
                  <?php 
                    $mmenuOptions = array( 
                        'theme_location' => 'cbv_main_menu1', 
                        'menu_class' => 'clearfix reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $mmenuOptions ); 
                  ?>
                </nav>
              </div>
              <div class="xs-menu-col">
                <nav class="main-nav">
                  <?php 
                    $mmenuOptions = array( 
                        'theme_location' => 'cbv_main_menu2', 
                        'menu_class' => 'clearfix reset-list',
                        'container' => '',
                        'container_class' => ''
                      );
                    wp_nav_menu( $mmenuOptions ); 
                  ?>
                </nav>
              </div>
              <div class="hdr-details-cntlr show-sm">
                <div class="hdr-details ">
                  <?php if( !empty($email) ): ?>
                  <div class="hdr-mail">
                    <a href="mailto:<?php echo $email; ?>">
                      <i><svg class="mail-icon" width="19" height="15" viewBox="0 0 19 15" fill="#fff">
                        <use xlink:href="#mail-icon"></use></svg>
                      </i>
                    </a>
                  </div>
                  <?php 
                  endif;
                  if( !empty($telephone) ): 
                  ?>
                  <div class="hdr-tel">
                    <a href="tel:<?php echo phone_preg($telephone); ?>">
                       <?php printf('<span>%s</span>', $telephone); ?>
                      <i><svg class="phone-icon" width="16.186" height="16.186" viewBox="0 0 16.186 16.186" fill="#fff">
                        <use xlink:href="#phone-icon"></use></svg>
                      </i>
                    </a>
                  </div>
                  <?php endif; ?>
                </div>
              </div>
              <?php if( $sinfo ): ?>
              <div class="xs-hdr-socials">
                <div class="hdr-socials">
                  <ul class="reset-list">
                  <?php 
                    if( !empty($sinfo['instagram_url']) ) printf('<li><a target="_blank" href="%s"><i class="fab fa-instagram"></i></a></li>', $sinfo['instagram_url']); 
                    if( !empty($sinfo['facebook_url']) ) printf('<li><a target="_blank" href="%s"><i class="fab fa-facebook-f"></i></a></li>', $sinfo['facebook_url']); 
                    if( !empty($sinfo['youtube_url']) ) printf('<li><a target="_blank" href="%s"><i class="fab fa-youtube"></i></a></li>', $sinfo['youtube_url']); 
                  ?>
                  </ul>
                </div>
              </div>
              <?php endif; ?>
            </div>
            <div class="hdr-twiter-feed-gallery">
              <img src="<?php echo THEME_URI; ?>/assets/images/hdr-twiter-feed-galery.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>