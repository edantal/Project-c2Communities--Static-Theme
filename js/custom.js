$(document).ready(function() {
  // AOS Animations
  AOS.init({
    duration: 1200,
    easing: 'ease-out-quad',
  });

  // Youtube Video
  $("#popup-video .popup__close").click(function(){
    $("#youtube-player").attr('src','');
  });
  $("#video-btn").click(function(){
    if ($("#youtube-player").attr('src') == '' ) {
      $("#youtube-player").attr('src','https://www.youtube.com/embed/iBBKMyecdLg');
    }
  });

  // Header Navigation
  function toggleNav() {
    $('.header__nav-icon').toggleClass('is-clicked'); 
    $('.header').toggleClass('menu-is-open');
    
    //in firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
    if( $('.nav__primary').hasClass('is-visible') ) {
      $('.nav__background').removeClass('active');
      $('.nav__primary').removeClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
        //
      });
    } else {
      $('.nav__background').addClass('active');
      $('.nav__primary').addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend',function(){
        //$('body').addClass('overflow-hidden');
      });	
    }
  }
  $('.navigation__button').on('click', function(){
    toggleNav();
  });
  $('.link').on('click', function(){
    toggleNav();
    $('.navigation__button').trigger('click');
  });
  $('.nav__background').on('click', function(){
    $('.navigation__button').trigger('click');
  });

  // SLICK SLIDER
  var prevButton = '<button type="button" data-role="none" class="slick-prev" aria-label="prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" version="1.1"><path fill="#FFFFFF" d="M 16,16.46 11.415,11.875 16,7.29 14.585,5.875 l -6,6 6,6 z" /></svg></button>',
  nextButton = '<button type="button" data-role="none" class="slick-next" aria-label="next"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="#FFFFFF" d="M8.585 16.46l4.585-4.585-4.585-4.585 1.415-1.415 6 6-6 6z"></path></svg></button>';

  $('.stories__slider').slick({
    infinite: true,
    dots: true,
    autoplay: true,
    autoplaySpeed: 4000,
    speed: 1000,
    cssEase: 'ease-in-out',
    prevArrow: prevButton,
    nextArrow: nextButton
  });

  $('.stories__story').mousedown(function(){
    $('.stories__slider').addClass('dragging');
  });
  $('.stories__story').mouseup(function(){
    $('.stories__slider').removeClass('dragging');
  });

  $( '#legal-nav li:has(ul)' ).doubleTapToGo();

});