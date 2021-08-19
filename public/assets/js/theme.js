/**
 * EX Properties
 *
 * This file contains all template JS functions
 *
 * @package EX Properties
--------------------------------------------------------------
                   Contents
--------------------------------------------------------------

 * 01 - Swipe Slider 
 * 02 - Team Slider
 * 03 - Video Play
 * 04 - Property Popup Dialog
 * 05 - Navigation
 * 06 - Dropdown
 * 07 - Smooth Scroll
 * 08 - Mailchimp Form
 * 09 - Gallery Lightbox Gallery
 * 10 - Facts Count
 * 11 - Preloader

--------------------------------------------------------------*/
(function($) {
  "use strict";

// Swipe Slider

    // Home Slider
    if($('.home-slider').length){  
      var swiper = new Swiper('.home-slider', {     
        autoplay: 3000,
        loop: true,
        speed: 400,
        paginationClickable: true
      }); 
    }  

    // Recent Property Slider
    if($('.property-slider').length){  
      var swiper = new Swiper('.property-slider', {
        pagination: '.home-pagination',
        paginationClickable: true
      }); 
    }  

    // Recent Property Popup Slider
    if($('.property-popup').length){  
      var swiper = new Swiper('.property-popup', {
        paginationClickable: true
      }); 
    }  

    // Patners Slider
    if($('.patners-slider').length){  
      var swiper = new Swiper('.patners-slider', {
        paginationClickable: true,
      });
    }

// Team Slider
    $(function() {
      $('#coverflow').coverflow({
        active: 3,
        select: function(event, ui) {
          console.log();
        }
      });
      $('.ui-state-active a').on('click',function() {
        window.location = $this.attr('href');
      });
      $('#coverflow-background .prev-arrow').on('click',function() {
        $('#coverflow').coverflow('next');
      });
      $('#coverflow-background .next-arrow').on('click',function() {
        $('#coverflow').coverflow('prev');
      });
      $("body").keydown(function(e) {
        // left arrow
        if ((e.keyCode || e.which) == 37) {
          $('#coverflow').coverflow('prev');
        }
        // right arrow
        if ((e.keyCode || e.which) == 39) {
          $('#coverflow').coverflow('next');
        }
      });
    });

// Video Play 
    $('.btn-video-play').on('click',function() {
      $('.video-box .video-preview').append(video_url);
      $(this).hide();
    });
    $('.btn-video-play-two').on('click',function() {
      $('.video-item .video-preview-two').append(video_url);
      $(this).hide();
    });
    $('.btn-video-play-three').on('click',function() {
      $('.video-item .video-preview-two').append(video_url);
      $(this).hide();
    });
    // $('.btn-video-play').on('click',function() {
    //   $('.video-item .video-preview').append(video_url);
    //   $(this).hide();
    // }); 
    // $('.btn-video-play-two').on('click',function() {
    //   $('.video-item .video-preview-two').append(video_url);
    //   $(this).hide();
    // }); 

// Property Popup Dialog
    $(function() {
      $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,      
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
      });        
    });

    // Floor plan Popup
    $(function() {
      $('.image-popup-vertical-fit').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
          verticalFit: true
        }
        
      });
    });

// Navigation 
    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $(function() {
      $('a.page-scroll').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 101
        }, 1200, 'easeInOutExpo');
        event.preventDefault();
      });
    });   

    // Menu Auto dropdown
    $(function() {
      $('.nav .dropdown').hover(function() {
        $(this).addClass('open');
      }, function() {
        $(this).removeClass('open');
      });
    });

// Dropdown 
    $(function() {
      function DropDown(el) {
        this.dd = el;
        this.initEvents();
      }
      DropDown.prototype = {
        initEvents : function() {
          var obj = this;
          obj.dd.on('click', function(event){
            $(this).toggleClass('active');
            event.stopPropagation();
          }); 
        }
      }    
      var dd = new DropDown( $('#rent-sale') );
      $().on('click', function() {    
        $('.drp-home').removeClass('active');
      });
      var dd = new DropDown( $('#prop-type') );
      $().on('click', function() {     
        $('.prop-type').removeClass('active');
      });
      var dd = new DropDown( $('#gbl') );
      $().on('click', function() {     
        $('.prop-type').removeClass('active');
      });
    });

// Smooth Scroll
    smoothScroll.init();

// Mailchimp Form
    $('#subscribe-form').ajaxChimp({
        url: 'http://blahblah.us1.list-manage.com/subscribe/post?u=5afsdhfuhdsiufdba6f8802&id=4djhfdsh9'
    });

// Gallery Lightbox Gallery
    $(function() {
      $('.popup-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',    
        tLoading: 'Loading image #%curr%...',
        mainClass: 'mfp-img-mobile',    
        gallery: {
          enabled: true,
          navigateByImgClick: true,
          preload: [0,1] // Will preload 0 - before current, and 1 after the current image
        },
        image: {
          tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
          titleSrc: function(item) {
            return item.el.attr('title') + '<small>by Ex Property</small>';
          }
        }
      });
    });   

// Facts Count 
    if ($('.counter').length) {   
      $(function( $ ) {
        $('.counter').counterUp({
          delay: 30,
          time: 5000
        });
      });  
    }

// Preloader   
    $(window).on('load', function()  { 
      $('.status').fadeOut();
      $('.preloader').delay(350).fadeOut('slow'); 
    });     

})(jQuery);
const selected = document.querySelector(".selected");
const optionsContainer = document.querySelector(".options-container");
const optionsList = document.querySelectorAll(".option");

selected.addEventListener("click", () => {
  optionsContainer.classList.toggle("active");
});

optionsList.forEach(option => {
  option.addEventListener("click", () => {
    selected.innerHTML = option.querySelector("label").innerHTML;
    optionsContainer.classList.remove("active");
  });
});
