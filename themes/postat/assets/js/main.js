(function($) {


var windowWidth = $(window).width();
var windowWidth_1920 = $('.page-body-cntlr').width();
$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});
	
if($("ul.slick-dots li").length == 1){
   $("ul.slick-dots").hide();
}
//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
};
if($('.mHc1').length){
  $('.mHc1').matchHeight();
};
if($('.mHc2').length){
  $('.mHc2').matchHeight();
};
if($('.mHc3').length){
  $('.mHc3').matchHeight();
};
if($('.mHc4').length){
  $('.mHc4').matchHeight();
};
if($('.mHc5').length){
  $('.mHc5').matchHeight();
};
if($('.mHc6').length){
  $('.mHc6').matchHeight();
};
$(window).load(function() {
//matchHeightCol
  if($('.mHc').length){
    $('.mHc').matchHeight();
  };
  if($('.mHc1').length){
    $('.mHc1').matchHeight();
  };
  if($('.mHc2').length){
    $('.mHc2').matchHeight();
  };
  if($('.mHc3').length){
    $('.mHc3').matchHeight();
  };
  if($('.mHc4').length){
    $('.mHc4').matchHeight();
  };
  if($('.mHc5').length){
    $('.mHc5').matchHeight();
  };
  if($('.mHc6').length){
    $('.mHc6').matchHeight();
  };
});

//$('[data-toggle="tooltip"]').tooltip();

//banner animation
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $('.page-banner-bg').css({
    '-webkit-transform' : 'scale(' + (1 + scroll/2000) + ')',
    '-moz-transform'    : 'scale(' + (1 + scroll/2000) + ')',
    '-ms-transform'     : 'scale(' + (1 + scroll/2000) + ')',
    '-o-transform'      : 'scale(' + (1 + scroll/2000) + ')',
    'transform'         : 'scale(' + (1 + scroll/2000) + ')'
  });
});


if($('.fancybox').length){
$('.fancybox').fancybox({
    //openEffect  : 'none',
    //closeEffect : 'none'
  });

}


/**
Responsive on 767px
*/

// if (windowWidth <= 767) {
  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }



// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


/**
Slick slider
*/
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}





/* BS form Validator*/
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


/*start of Kashob*/

if( $('.contact-form-wrp').length ){
  $('.contact-form-wrp .wpforms-container .wpforms-form .wpforms-submit-container button').on('click', function(){
    $('.wpforms-field input[required],.wpforms-field select[required]').parents('.wpforms-field').addClass('wpforms-has-error');
    $('.wpforms-field input[required],.wpforms-field select[required]').addClass('wpforms-error');
  });
}


if( $('.wpforms-error').length ){
  $('.wpforms-error').on('click', function(){
    $(this).parents('.wpforms-field').removeClass('wpforms-has-error');
  });
}

var windowWidth = $(window).width();
var containerWidth = $('.container').width();
var containerOffset = (windowWidth_1920 - containerWidth);

var containerLftOffset = ((containerOffset / 2)+2);
$('.contact-form-lft-bg').css('width', containerLftOffset);


$(window).resize(function(){
  var windowWidth = $(window).width();
  var containerWidth = $('.container').width();
  var containerOffset = (windowWidth_1920 - containerWidth);

  var containerLftOffset = ((containerOffset / 2)+2);
  $('.contact-form-lft-bg').css('width', containerLftOffset);

});

/*start of Noyon*/
if( $('.hamburger-cntlr').length ){
  $('.hamburger-cntlr').click(function(){
    $('body').toggleClass('allWork');
  });
}
if( $('li.menu-item-has-children a').length ){
  $('li.menu-item-has-children a').click(function(e){
   event.preventDefault();
   $(this).next().slideToggle(300);
   $(this).parent().toggleClass('this-sub-menu-active');
 });
}

/*if (windowWidth > 767) {
  if( $('.hm-bnr-cntlr').length ){
    var windowHeight = $(window).height();
    if (windowHeight > 660) {
      $('.hm-bnr-cntlr').css('height', windowHeight);
    }
  }
}*/

if($('.start-flatpickr').length ){
  $('.start-flatpickr').flatpickr({
    disableMobile: true,
  }); 
}

if($('.end-flatpickr').length ){
  $('.end-flatpickr').flatpickr({
    disableMobile: true,
  }); 
}


if( $('.pageBnrSlider').length ){
    $('.pageBnrSlider').slick({
      dots: true,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 1,
      slidesToScroll: 1,
    });
}
/*start of Shariful*/

var containerWidth = $('.container').width();
var containerOffset = (windowWidth_1920 - containerWidth);
var containerLftOffset = (containerOffset / 2);
$('.follow-img-ctlr').css('margin-left', containerLftOffset);

$(window).resize(function(){
  var containerWidth = $('.container').width();
  var containerOffset = (windowWidth_1920 - containerWidth);
  var containerLftOffset = (containerOffset / 2);
  $('.follow-img-ctlr').css('margin-left', containerLftOffset);
});


if( $('.ptTextSlider').length ){
    $('.ptTextSlider').slick({
      dots: false,
      arrows: true,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: $('.pt-text-slider-wrap .pt-slider-prev-nxt .pt-prev'),
      nextArrow: $('.pt-text-slider-wrap .pt-slider-prev-nxt .pt-nxt'),
    });
}

$('.pt-accordion-title').on('click', function(){
  $(this).toggleClass('active');
  $(this).parents('.pt-accordion-menu').siblings().find('.pt-accordion-title').removeClass('active');
  $(this).parents('.pt-accordion-menu').find('.pt-accordion-des').slideToggle(300);
  $(this).parents('.pt-accordion-menu').siblings().find('.pt-accordion-des').slideUp(300);
});

if( $('.ptTeamSlider').length ){
    $('.ptTeamSlider').slick({
      dots: false,
      arrows: true,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 4,
      slidesToScroll: 1,
      prevArrow: $('.pt-team-slider-ctlr .pt-slider-prev-nxt .pt-prev'),
      nextArrow: $('.pt-team-slider-ctlr .pt-slider-prev-nxt .pt-nxt'),
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 640,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}




    new WOW().init();

})(jQuery);