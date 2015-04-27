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
    });

    closeTrigger.on('click', function(e) {
      e.preventDefault();
  
      var modalWrapper = $('.modal-wrapper.is-active');
      
      body.toggleClass('modal-active');
      modal.toggleClass('is-active');
      modal.toggleClass('not-active');      
      modalWrapper.toggleClass('is-active').toggleClass('not-active');
    });
    
  }

  navScroll();
  modal();
  mobileNav();

  $('.modal-body').optiscroll({
/*     preventParentScroll: true, */
    forceScrollbars: true
  });

});


/*
  sectionNavScroll = function() {
  
    var navListItem = $('.section-nav li');
    var navLink = $('.section-nav a');
    var fullViewUpBtn = $('.slide-up-btn');
    
    fullViewUpBtn.on('click', function(e) {
      e.preventDefault();
      var introPos = $('#intro').offset();
      
      $('html,body').animate({
        scrollTop: introPos.top
      }, 1000);      
    });
  
    navListItem.on({
      mouseenter: function() {
        var toolTip = $(this).data('tooltip');
        $('<div class="tooltip">' + toolTip + '</div>').hide().appendTo(this).fadeIn(200);
      },
      mouseleave: function() {
        $(this).find('.tooltip').fadeOut(200, function() {
          $(this).remove();
        });
      }
    });
    
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
    
    var aChildren = $('.section-nav li').children(); // find the a children of the list items
    var aArray = []; // create the empty aArray
    
    for (var i=0; i < aChildren.length; i++) {    
      var aChild = aChildren[i];
      var ahref = $(aChild).attr('href');
      aArray.push(ahref);
    } // this for loop fills the aArray with attribute href values
    
    $(window).scroll(function(){
      var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
      var windowHeight = $(window).height(); // get the height of the window
      var docHeight = $(document).height();
      
      for (var i=0; i < aArray.length; i++) {
        var theID = aArray[i];
        var sectionPos = $(theID).offset().top; // get the offset of the div from the top of page
        var sectionHeight = $(theID).height(); // get the height of the div in question

        if (windowPos > (sectionPos - 40) && windowPos < (sectionPos + 40)) {
          $(theID).find('.triggers').addClass('fadeInUp animated');
        }
        
        if (windowPos >= (sectionPos - 300) && windowPos < ( (sectionPos - 300) + sectionHeight)) {
          $(".section-nav a[href='" + theID + "']").addClass('active');
        } else {
          $(".section-nav a[href='" + theID + "']").removeClass('active');
        }
      }
      
      if(windowPos + windowHeight == docHeight) {
        if (!$(".section-nav li:last-child a").hasClass("active")) {
          var navActiveCurrent = $(".active").attr("href");
          $("a[href='" + navActiveCurrent + "']").removeClass("active");
          $(".section-nav li:last-child a").addClass("active");
        }
      }
    });

  }
*/
