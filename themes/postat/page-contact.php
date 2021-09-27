<?php 
/*Template Name: Contact*/
get_header();
$thisID = get_the_ID();
?>
    <section class="hm-banner">
      <div class="hm-banner-bg-black"></div>
      <div class="hm-bnr-bg inline-bg" style="background-image: url('<?php echo THEME_URI; ?>/assets/images/contact-bnr.jpg');"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="hm-bnr-cntlr">
              <div class="hm-bnr-desc-cntlr">
                <!-- <div class="hm-bnr-desc">
                  <p>“Sleek and seductive accommodation with unsurpassed views of our rural Australian landscape.” <a href="#">gourmet traveller</a></p>
                </div>
                <div class="hm-bnr-btn">
                  <a class="fl-transparent-btn" href="#">make a booking</a>
                </div> -->
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
                <div class="contact-form-info-cntlr">
                  <div class="contact-form-info">
                    <h2 class="contact-form-info-title fl-h2">Let’s Talk</h2>
                    <div class="contact-form-info-des">
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu blandit erat. In ullamcorper nisl nec elementum dapibus. Nulla nec quam pellentesque, pellentesque odio non, maximus erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu blandit erat. In ullamcorper nisl nec elementum dapibus. Nulla nec quam pellentesque, pellentesque odio non, maximus erat. </p>
                    </div>
                    <div class="contact-form-dtails">
                      <div class="cnt-addres">
                        <a href="#"><span>379 Hunter Valley Road</span><span>Oakgate Farm NSW 2998</span></a>
                      </div>
                      <div class="cnt-tel">
                        <a href="tel:(02)49939876">(02) 4993 9876</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="contact-form-rgt mHc">
                <div class="contact-form-dsc-wrp">
                  <div class="contact-form-title-cntlr">
                    <h2 class="contact-form-title fl-h2">Get in touch</h2>
                  </div>
                  <div class="contact-form-wrp clearfix">
                    <div class="wpforms-container">
                      <div class="wpforms-form needs-validation novalidate">
                        <div class="wpforms-field-container">
                          <div class="wpforms-field XsNameField">
                            <input type="text" name="name" placeholder="First Name" required="">
                            <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                          </div>
                          <div class="wpforms-field NameField">
                            <input type="text" name="text" placeholder="Last Name" required="">
                            <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                          </div>
                          <div class="wpforms-field">
                            <input type="email" name="email" placeholder="Your Email" required="">
                            <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                          </div>
                          <div class="wpforms-field">
                            <input type="text" name="text" placeholder="Contact Number" required="">
                            <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                          </div>
                          <div class="wpforms-field FullWidthField">
                            <input type="text" name="text" placeholder="Subject of Enquiry" required="">
                            <label id="wpforms-222-field_1-error" class="wpforms-error" for="wpforms-222-field_1">Check this field!</label>
                          </div>
                          <div class="wpforms-field wpforms-field-textarea">
                            <textarea name="message" placeholder="Write your message here"></textarea>
                          </div>
                        </div>
                        <div class="wpforms-submit-container">
                          <button type="submit" name="submit" class="wpforms-submit">submit</button>
                        </div>
                        <div class="contact-form-check">
                          <input type="checkbox" id="robot" name="robot" value="yes">
                          <span class="checkmark"></span>
                          <label for="robot">I’m not a robot</label>
                          <div class="robot">
                            <i>
                              <img src="<?php echo THEME_URI; ?>/assets/images/robot.png" alt="">
                            </i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contact-google-map-sec-wrp">
      <div class="contact-google-map-wrp">
        <div class="contact-google-map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2820.620296085823!2d151.39996116786583!3d-32.78425810710255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b7335f59a99a157%3A0xf017d68f9f2aa10!2sWerakata%20National%20Park!5e0!3m2!1sen!2sbd!4v1632465689922!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </section>
<?php get_footer(); ?>