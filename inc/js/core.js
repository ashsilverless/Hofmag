//@prepros-prepend jquery.magnific-popup.js
//@prepros-prepend mixitup.js
//@prepros-prepend owl.carousel.min.js

jQuery(document).ready(function($) {
  /* ADD CLASS ON LOAD*/

  $("html")
    .delay(1500)
    .queue(function(next) {
      $(this).addClass("loaded");
      next();
    });

  //Smooth Scroll

  /*$("nav a, a.button, a.next-section, a.explore").click(function() {
    if ($(this).attr("href") != "#") {
      $("html, body").animate(
        {
          scrollTop: $($(this).attr("href")).offset().top - 100
        },
        500
      );
      return false;
    }
  });*/

  /* ADD CLASS ON SCROLL*/

  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
      $("body").addClass("scrolled");
    } else {
      $("body").removeClass("scrolled");
    }
  });

  // ========== Controller for lightbox elements

  $(".gallery").each(function() {
    $(this)
      .find(".lightbox-gallery")
      .magnificPopup({
        type: "image",
        gallery: {
          enabled: true
        }
      });
  });

  /* Magnific Popup */

  $(".img-wrapper").each(function(gallery) {
    $(this).magnificPopup({
      delegate: 'a',
      type: 'image',
      closeOnContentClick: true,
      closeBtnInside: false,
      image: {
        verticalFit: true,
      },
      gallery: {
        enabled: true,
        navigateByImgClick: true,
      },
    });
  });

  $(".post-image a").magnificPopup({
    type: "image",
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: "mfp-no-margins mfp-with-zoom",
    image: {
      verticalFit: true
    },
    zoom: {
      enabled: true,
      duration: 300
    }
  });

  // GLOBAL OWL CAROUSEL SETTINGS

  /* CLASS AND FOCUS ON CLICK */

  $(".menu-trigger").click(function() {
    $(".menu-collapse").toggleClass("visible");
    $(".current-menu-item").toggleClass("loaded");
    $(".menu-trigger").toggleClass("opened");
  });

  $(".read-more").click(function(e) {
    e.preventDefault();
    $(this).siblings('.additional_content').slideDown();
    $(this).fadeOut(300);
  });
  $(".read-less").click(function(e) {
    e.preventDefault();
    $(this).parent('.additional_content').slideUp();
    $(".read-more").fadeIn(300);
  });

  $(".tab-trigger").click(function() {
    $(".tab-trigger.active").removeClass("active");
    $(this).addClass("active");
  });

  $(".see-more").click(function() {
    $(this)
      .closest(".camp-summary__item")
      .toggleClass("open");
  });

  // ========== Add class if in viewport on page load

  $.fn.isOnScreen = function() {
    var win = $(window);

    var viewport = {
      top: win.scrollTop(),
      left: win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();

    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();

    return !(
      viewport.right < bounds.left ||
      viewport.left > bounds.right ||
      viewport.bottom < bounds.top ||
      viewport.top > bounds.bottom
    );
  };

  $(".slide-up, .slide-down, .slide-right, .slow-fade, .col__circle-list ul li").each(function() {
    if ($(this).isOnScreen()) {
      $(this).addClass("active");
    }
  });

  // ========== Add class on entering viewport

  $.fn.isInViewport = function() {
    var elementTop = $(this).offset().top;
    var elementBottom = elementTop + $(this).outerHeight();
    var viewportTop = $(window).scrollTop();
    var viewportBottom = viewportTop + $(window).height();
    return elementBottom > viewportTop && elementTop < viewportBottom;
  };

  $(window).on("resize scroll", function() {
    $(".slide-up, .slide-down, .slide-right, .slow-fade, .col__circle-list ul li").each(function() {
      if ($(this).isInViewport()) {
        $(this).addClass("active");
      }
    });
  });

  /* ACCORDION */
  $(".accordion:first-of-type h3").addClass('active');

  $(".accordion h3").on('click', function() {
    var self = this;
    if ($(this).hasClass('active')){
      $(this).removeClass('active')
    } else {
      $(this).addClass('active')
    }
    $(this).closest("div").siblings().find(".collapsible").slideUp(500);
    $(this).parent().find(".collapsible").slideToggle(500, function() {
      $('html,body').animate({
        scrollTop: $(self).offset().top - 75
      }, 500);
    });
  });


  // ========== Tab Slider

  var action = false,
    clicked = false;
  var Owl = {
    init: function() {
      Owl.carousel();
    },
    carousel: function() {
      var owl;
      $(document).ready(function() {
        owl = $(".tabs").owlCarousel({
          items: 1,
          center: true,
          nav: false,
          dots: true,
          loop: true,
          margin: 10,
          dotsContainer: ".test",
          navText: ["prev", "next"]
        });
        $(".owl-next").on("click", function() {
          action = "next";
        });
        $(".owl-prev").on("click", function() {
          action = "prev";
        });
        $(".tabs-header").on("click", "li", function(e) {
          owl.trigger("to.owl.carousel", [$(this).index(), 300]);
        });
      });
    }
  };
  $(document).ready(function() {
    Owl.init();
  });

  /***********HERO SLIDER***********/
  var slideCount = $("#slider ul li").length;
  var slideWidth = $("#slider ul li").width();
  var slideHeight = $("#slider ul li").height();
  var sliderUlWidth = slideCount * slideWidth;
  $("#slider ul").css({ width: sliderUlWidth, marginLeft: -slideWidth });
  $("#slider ul li:last-child").prependTo("#slider ul");
  function moveLeft() {
    $("#slider ul").animate(
      {
        left: +slideWidth
      },
      500,
      function() {
        $("#slider ul li:last-child").prependTo("#slider ul");
        $("#slider ul").css("left", "");
      }
    );
  }
  function moveRight() {
    $("#slider ul").animate(
      {
        left: -slideWidth
      },
      500,
      function() {
        $("#slider ul li:first-child").appendTo("#slider ul");
        $("#slider ul").css("left", "");
      }
    );
  }
  $("a.control_prev").click(function() {
    moveLeft();
  });
  $("a.control_next").click(function() {
    moveRight();
  });

  //Tabs
  var initialHeight = $('.services-content-container').find('.services-tab-content').height();
  $('.services-content-container').css('height', (initialHeight + 200))

  $('.services-tab .tab').on('click', function(){
    var selectedTab = $(this).attr('data-tab');
    var tabHeight = $('#' + selectedTab).height();
    $('.services-tab .tab').removeClass('selected');
    $(this).addClass('selected');
    $('.services-tab-content').removeClass('selected');
    $('.services-content-container').css('height', (tabHeight + 200))
    $('#' + selectedTab).addClass('selected');
  })


  // ========== Filtering controller (mixitup)

if($('#mixitup-gallery').length) {

var campsMixer = mixitup('#mixitup-gallery', {
    load: {
        filter: 'all'
    },
    selectors: {
        control: '.mixitup-control',
        target: '.condition-item'
    }
});
}

  //Mobile Menu

  $(".mobileMenu").on('click', function() {
    if($(".mainMenu").hasClass('active')){
      $(".mainMenu").removeClass('active');
    } else {
      $(".mainMenu").addClass('active');
    }

  });

  var navHeight = $("header").height();
  $(".company-title").css({
    "padding-top": navHeight + "px"
  });

  $(".single-carousel").owlCarousel({
    items: 1,
    loop:true,
    nav: true,
    autoplay: true,
    nav: false,
    responsive : {
      768 : {
          autoplay: false,
          nav: true,
      }
    }
  })

  $(".mid-carousel").owlCarousel({
    items: 1,
    loop:true,
    center: true,
    margin:75,
    nav: true,
    autoplay: true,
    autoplaySpeed: 500,
    autoplayTimeout: 8000,
    responsive : {
      768 : {
          autoplay: false,
      },
      1200 : {
          items: 2,
      }
    }
  })

  $(".research_carousel").owlCarousel({
    items: 1,
    loop:true,
    nav: true
  })


}); //Don't remove ---- end of jQuery wrapper
