$(function(){

  navScroll = function() {
    var navLink = $('#nav a');
  
    navLink.on('click', function(e) {
      e.preventDefault();
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
      }
    });
  }
  
  mobileNav = function() {
    var menuBtn = $('.btn-mobile');
    var navContainter = $('.menu-menu-1-container');
    
    menuBtn.on('click', function() {
      navContainter.toggleClass('is-active');
    });
  }
  
  modal = function() {
    var trigger = $('.modal-trigger');
    var closeTrigger = $('.close-modal');
    var modal = $('#modal');
    var body = $('body');
    
    trigger.on('click', function(e) {
      e.preventDefault();
  
      var modalContent = $(this).attr('data-modal-content');
      
      body.toggleClass('modal-active');
      modal.toggleClass('is-active');
      modal.toggleClass('not-active');
      $(modalContent).toggleClass('is-active');
      $(modalContent).toggleClass('not-active');
      modal.fadeIn('slow');
      $(modalContent).fadeIn('slow');
    });

    closeTrigger.on('click', function(e) {
      e.preventDefault();
  
      var modalWrapper = $('.modal-wrapper.is-active');
      
      body.toggleClass('modal-active');
      modal.toggleClass('is-active');
      modal.toggleClass('not-active');      
      modal.fadeOut('slow');
      modalWrapper.fadeOut('slow');
      modalWrapper.toggleClass('is-active').toggleClass('not-active');
    });
  }

  navScroll();
  modal();
  mobileNav();

  $('.modal-body').optiscroll({
    forceScrollbars: true
  });

});
