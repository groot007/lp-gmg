//import("../libs/jquery/dist/jquery.min.js");
//import("../libs/slick/slick.min.js");
//import("../libs/niceSelect/jquery.nice-select.min.js");
//import("../libs/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.min.js");
//import("../libs/waypoint/jquery.waypoints.min.js");
//import("../libs/masked-input.min.js");
//import("../libs/circlefull.min.js");
//import("../libs/scrollToId/jquery.malihu.PageScroll2id.js");
//import("../libs/magnific-popup/js/jquery.magnific-popup.min.js");
//import("../libs/countdown/jquery.countdown.min.js");
//import("../libs/ZeroClipboard.js");

$(window).on('load', function () {
  var $preloader = $('#page-preloader'),
  $spinner   = $preloader.find('.spinner');
  $spinner.fadeOut();
  $preloader.delay(200).fadeOut('slow');
  $(".overlay").addClass("animate");
});

$(function() {
  var day = new Date(),
      curMonth = day.getMonth() + 1,
      curYear = day.getFullYear(),
      firstDate = curYear +'/'+ curMonth +'/16 01:30:20',
      secondDate = curYear +'/'+ curMonth + '/29 12:56:45';
$('#timer-1').countdown(firstDate).on('update.countdown', function(event) {
  $(this).html(event.strftime("%D д. | %H ч.  | %M мин. | %S сек."));
}).on('finish.countdown', function(){
  $('#timer-1').html("Действие акции закончилось")
});;
$('#timer-2').countdown(secondDate).on('update.countdown', function(event) {
  $(this).html(event.strftime('%D д. | %H ч. | %M мин. | %S сек.'));
}).on('finish.countdown', function(){
  $('#timer-2').html("Действие акции закончилось")
});;


  $(".phone-num").each(function(){
    if ($(window).width() < 768) {
      var num = $(this).text().replace(/[^\d]/g, "");
      $(this).attr("href", "tel:+" +num).removeClass("popup-with-form");
    } else{
      $(this).attr("href", "#test-form");
    }

  })

  var client = new ZeroClipboard($(".email"), {
    moviePath: "../libs/ZeroClipboard.swf"
  });
  // После того как происходит загрузка флеш файла
  client.on("load", function(client) {
    // и завершено копирование в буфер
    client.on("complete", function(client, args) {
      $(".mail .cb-message").animate({
        opacity : 1
      }, 100, function(){
        setTimeout(function(){
            $(".mail .cb-message").animate({
            opacity : 0
          }, 1000);
        },1000);

      });
    });
  });


  $(".phone").mask("+7(999) 999-99-99");
  $('.subslides').each(function(indx){
    $(this).find(".gallery").magnificPopup({
      type: 'image',
      delegate: 'a',
      closeOnContentClick: true,
      closeBtnInside: false,
      fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        image: {
          verticalFit: true
        },
        gallery: {
          enabled: true
        },
        zoom: {
          enabled: true,
            duration: 300 // don't foget to change the duration also in CSS
          }
        });
  });

  $(".works-slide").slick({
    arrows: false,
    infinite: true,
    draggable: false,
    swipe: false,
    waitForAnimate: false
  });
  var menu = $(".top-head nav");
  $(".resp-mnu").on("click", function(e) {
    if (menu.hasClass("visible")) {
      menu.removeClass("visible");
    } else {
      menu.addClass("visible");
    }

  });

  $(document).on("click touchend", function(e) {
    var target = $(e.target);
    var fa = $(".resp-mnu .fa");
    if (target.is(fa) || target.closest(".message").length) return;
    if (message.hasClass("showM") || menu.hasClass("visible")) {
      message.addClass("hideM").removeClass("showM");
      menu.removeClass("visible");
      clearTimeout(timer);
    }
  });

  $(".subslides").slick({
    infinite: true,
    dots: true,
    arrows: true,
    waitForAnimate: false,
    nextArrow: '<i class="fa fa-angle-right"></i>',
    prevArrow: '<i class="fa fa-angle-left"></i>',
    customPaging: function(slider, i) {
      var slide = $(slider.$slides[i]).find("img").attr('src');
      var div = slide.replace(/.{1,}\./, "");
      var thumb = slide.replace(/\..{1,}/, "");
      return '<a><img src="' + thumb + '-mini.'+ div +'"></a>';
    },

    responsive: [{
      breakpoint: 500,
      settings: {
        dots: false,
      }
    }]
  });

  $(document).on("click", ".tabs .tab", function(e) {
    e.preventDefault();
    var target = $(e.target);
    var content = $(e.target).data("target");
    target.closest(".tabs-nav").find(".tab").removeClass("active");
    target.addClass("active");
    target.closest(".tabs").find(".tab-content").removeClass("active");
    target.closest(".tabs").find("." + content).addClass("active");
    var section = $(this).closest("section");
    if (content === "tab-content-1") {

      section.find(".wrap-outer-s").css("display", "block");
      section.find(".wrap-outer-s .works-slide").slick("setPosition");
      section.find(".wrap-outer-s .works-slide .subslides").slick("setPosition");
      section.find(".wrap-inner-s").css("display", "none");
    } else {
      section.find(".wrap-inner-s").css("display", "block");
      section.find(".wrap-inner-s .inner").slick("setPosition");
      section.find(".wrap-inner-s .inner .subslides").slick("setPosition");
      section.find(".wrap-outer-s").css("display", "none");
    }

  });
  $(document).on("click", ".tabs .tab-content .partner-inf", function(e) {
    e.preventDefault();

    var target = $(e.target);
    target.closest(".tab-content").find(".partner-inf").removeClass("active");
    target.closest(".partner-inf").addClass("active");
    var slideIndex = target.closest(".partner-inf").index();
    var sliderOut = target.closest("section").find(".works-slide").not(".inner");
    var sliderIn = target.closest("section").find(".works-slide.inner");
    if (target.closest(".tab-content-1").length) {
      sliderOut.slick("slickGoTo", slideIndex);
    } else {
      sliderIn.slick("slickGoTo", slideIndex);
    }

  })
  if ($(window).width() < 480) {
    $("#select-city").insertAfter(".first-step .input-group:first-child").niceSelect();
  }
  $(".calc-form .right-group select").niceSelect();
  $(".slider").slider({
    animate: "fast",
    value: 50,
    min: 0,
    max: 100,
    step: 1,
    slide: function(event, ui) {
      $('input.range').val(ui.value + "%");
    }

  });

  $("input.range").val(50 + "%");
  $("input.range").on("blur", function() {
    var value = parseInt($("input.range").val());
    $(".slider").slider("value", value);
  });

  var message = $(".message-box");

  var userLeave = false;
  var timer;
  var hideTimer;
  $(document).on("mouseleave mouseenter", function(e) {
    userLeave = (e.type === "mouseleave") ? true : false;
    clearTimeout(hideTimer);
    if (e.type === "mouseleave") {
      clearTimeout(timer);
      message.removeClass("hideM").addClass("showM");
    } else if (!message.hasClass("hideM")) {
      timer = setTimeout(function() {
        message.addClass("hideM").removeClass("showM");
      }, 3000)
    }
  });

  $(document).on("mouseenter mouseleave mousedown", ".message", function(e) {
    clearTimeout(timer);
        if (e.type === "mouseleave") {
          hideTimer = setTimeout(function(){
            message.removeClass("showM").addClass("hideM");
          }, 1000)

        } else {
          clearTimeout(hideTimer);
          message.removeClass("hideM").addClass("showM");
        }
      });

  $('.circlestat').circliful();
  $(document).on("click", ".toogle-stats", function(e) {
    e.preventDefault();
    var target = $(e.target);
    var attr = target.attr("id");
    if (attr === "first-stat") {
      target.css("display", "none").next().css("display", "inline-block");

      target.closest(".row").find(".stats-wrap-1").css("display", "none").next().css("display", "block")
    } else {
      target.css("display", "none").prev().css("display", "inline-block");
      target.closest(".row").find(".stats-wrap-2").css("display", "none").prev().css("display", "block")
    }
  })

  var $menu = $(".menu");
  var $respMenu = $(".resp-mnu");
  var headerH = $("header").height();
  var windowW = $(window).width();
  var windowH = $(window).height();
  var differens = headerH - windowH;
  var steps = $(".steps");
  var percent = 0;
  var topHead =  $(".top-head");
  $(window).scroll(function() {
    var headerHeightD = $("header").height();
    var st = $(this).scrollTop();
    var offsetT = steps.offset().top;
      if (st >= offsetT) {
        topHead.addClass("fixed");
      } else if (st <= offsetT) {
        topHead.removeClass("fixed");
      }
    });



  $("a.to-id").mPageScroll2id({
    offset: 70,
    scrollEasing: "easeInOutQuint",
    pageEndSmoothScroll: true,
    highlightClass: "highlighted",
  });


  $('.slide-wrap .video-pop').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });
  $(".first-step .radio").on("change", function() {
    if ($(".first-step #radio1").prop("checked")) {
      $(".first-step #select-city").prop('disabled', false).niceSelect("update");
      $("#custom-city").prop('disabled', true);
    } else {
      $("#custom-city").prop('disabled', false);
      $(".first-step #select-city").prop('disabled', true).niceSelect("update");
    }
  });


  ymaps.ready(init);
  function init() {
    var geolocation = ymaps.geolocation;
    if (geolocation.city) {
      $("#custom-city").val(geolocation.city);
      $(".first-step #select-city").prop('disabled', true).niceSelect("update");
      $(".first-step #radio2").prop("checked", true)
    } else {
      console.log('Не удалось установить местоположение');
    }
  };

  $('.pulse, .btn').each(function() {
    var $this = $(this);

    var ink, d, x, y;

    setInterval(function() {
      if($this.find(".ink").length === 0){
        $this.prepend("<span class='ink'></span>");
      }

      ink = $this.find(".ink");
      ink.removeClass("animate");

      if(!ink.height() && !ink.width()){
        d = Math.max($this.outerWidth(), $this.outerHeight());
        ink.css({height: d, width: d});
      }

      x = Math.round(Math.random()*ink.width() - ink.width()/2);
      y = Math.round(Math.random()*ink.height() - ink.height()/2);
                // y = 0;
                // x = e.pageX - $this.offset().left - ink.width()/2;
                // y = e.pageY - $this.offset().top - ink.height()/2;

                ink.css({top: y+'px', left: x+'px'}).addClass("animate");
              }, 3000)
  });
  $('.popup-with-form').magnificPopup({
    type: 'inline',
    preloader: false,
    focus: '#name',

      // When elemened is focused, some mobile browsers in some cases zoom in
      // It looks not nice, so we disable it:
      callbacks: {
        beforeOpen: function() {
          if($(window).width() < 700) {
            this.st.focus = false;
          } else {
            this.st.focus = '#name';
          }
        }
      }
    });

// SHOP SCRIPTS
$(".overlay").on("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function(e){
    $(this).removeClass("animate");
 });

$(document).on("click", ".tabs-vertical a", function(e){
  e.preventDefault();
  var $this = $(this),
    target = $this.data("target"),
    tabsBlock = $this.closest(".tabs-vertical"),
    contBlock = $this.closest("section").find(".tabs-v-content"),
    textBlock = $this.closest("section").find(".deskr-col"),
    textCont = textBlock.find("#text-" + target);
    tabCont = contBlock.find("#tab-" + target);
  if (!$this.hasClass("active")){
    tabsBlock.find("a").removeClass("active");
    $this.addClass("active");
    contBlock.find(".tab-cont").removeClass("visible");
    textBlock.find(".tab-cont").removeClass("visible");
    tabCont.addClass("visible");
    textCont.addClass("visible");
  }
});
var dragstart = false;
$(document).on("mousedown touchstart", ".overlay .control-overlay", function(e){
  if(e.type === "mousedown"){
    dragstart = true
  }
});
$(document).on("mouseup touchend", function(e){
    dragstart = false
});
var pageX;
var overlay = $(".overlay");
$(document).on("mousemove touchmove", "header", function(e){
  if(dragstart){
    e.preventDefault();
    var w = parseFloat(overlay.css("width"));
    // if (e.pageX - pageX > 0) {
    //   overlay.css("width", w + 5 + "px")
    // }else if(e.pageX - pageX < 0){
    //   overlay.css("width", w - 5 + "px")
    // }
    overlay.css("width",e.pageX + "px")
    pageX = e.pageX;
  }
});


});