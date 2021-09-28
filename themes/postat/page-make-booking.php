<?php 
/*Template Name: Make a Booking*/
get_header();
$thisID = get_the_ID();
$menu = get_field('select_menu', $thisID);
$bgimg = get_field('bgimg', $thisID);
?>
<section class="make-a-booking-sec">
  <div class="make-bking-bg inline-bg" style="background-image: url('<?php if( !empty($bgimg) ) echo cbv_get_image_src($bgimg); ?>');"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="make-bking-cntlr">
          <div class="make-bking-desc">
            <?php the_content(); ?>
          </div>
          <div class="make-bking-contact">
            <div class="contact-form-wrp">
              <div class="wpforms-container">
                <div class="wpforms-form needs-validation novalidate">
                  <div class="wpforms-field-container">
                    <div class="wpforms-field wpforms-field-start-date">
                      <i><svg class="date-icon" width="27" height="27" viewBox="0 0 27 27" fill="#48484a">
                        <use xlink:href="#date-icon"></use></svg>
                      </i>
                      <label class="wpforms-field-label">arrival date</label>
                      <input type="text" class="start-flatpickr" required="">
                      <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                    </div>
                    <div class="wpforms-field wpforms-field-end-date">
                      <i><svg class="date-icon" width="27" height="27" viewBox="0 0 27 27" fill="#48484a">
                        <use xlink:href="#date-icon"></use></svg>
                      </i>
                      <label class="wpforms-field-label">departure date</label>
                      <input type="text" class="end-flatpickr" required="">
                      <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                    </div>

                    <div class="wpforms-field wpforms-field-user">
                      
                      <i><svg class="user-icon" width="20.896" height="26.719" viewBox="0 0 20.896 26.719" fill="#48484a">
                        <use xlink:href="#user-icon"></use></svg>
                      </i>
                      <label class="wpforms-field-label">number of guests</label>
                      <input type="text" required="">
                      <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                    </div>
                    <div class="wpforms-field wpforms-field-promo-code">

                      <label class="wpforms-field-label">promo code</label>
                      <input type="text" required="">
                      <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                    </div>
                  </div>
                  <div class="wpforms-submit-container">
                    <button type="submit" name="submit" class="wpforms-submit">search availability</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="make-bking-nav">
            <ul class="reset-list">
              <li><a href="#">Terms & Conditions </a></li>
              <li><a href="#">Cancellation Policy </a></li>
              <li><a href="#">Travel Directions </a></li>
              <li><a href="#">Features</a></li>
              <li><a href="#">Things To Do</a></li>                             
            </ul>
          </div>
          <?php 
            $email = get_field('emailaddres', 'options');
            if( !empty($email) ):
          ?>
          <div class="make-bking-mail">
            <a href="mailto:<?php echo $email; ?>">
              <?php printf('<span>%s</span>', $email); ?>
              <i><svg class="mail-icon" width="19" height="15" viewBox="0 0 19 15" fill="#d4e3ce">
                <use xlink:href="#mail-icon"></use></svg>
              </i>
            </a>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>