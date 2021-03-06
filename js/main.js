jQuery(document).ready(function($) {
  // header height
  var height = $( 'header' ).height();
  $( '.headerMargin' ).height(height);

  // for menu of menu_category
  var menuCategory = $('.menu_category');
  menuCategory.css('marginTop', height);

  $('.header .left .links a').hover(function () {
    menuCategory.fadeIn().css("display", "flex");

    return false;
  });
  menuCategory.mouseleave(function () {
    $(this).fadeOut();
  });
  // search clear input
  $('.search input').focus( function () {
    $(this).parent().find('.search_btn .fa')
      .removeClass('fa-search')
      .addClass('fa-times');
      // click
      $('.search .search_btn').click(function () {
        var input =  $(this).parent().find('input').val('');
      })
  })
  $('.search input').focusout(function () {
    $(this).parent().find('.search_btn .fa')
      .removeClass('fa-times')
      .addClass('fa-search');

  })

  // Search mobile
  if(window.innerWidth <= 560){
    var searchBlock = $('.search_all');
    $(document).on('click', '.search_mobile', function () {
      searchBlock.slideToggle();
      return false;
    });
  }

  // like hover
  $('.product .fa').hover(function(){
    $(this).removeClass('fa-heart-o');
    $(this).addClass('fa-heart');
  });
  // like none hover
  $('.product .fa').mouseleave(function(){
    $(this).removeClass(' fa-heart');
    $(this).addClass('fa-heart-o');
  });

  $('.to_basket .fa').hover(function(){
    $(this).removeClass('fa-heart-o');
    $(this).addClass('fa-heart');
  });
  // like none hover
  $('.to_basket .fa').mouseleave(function(){
    $(this).removeClass(' fa-heart');
    $(this).addClass('fa-heart-o');
  });

	// mobile menu
  $('.mobile_menu').click(function(){
	$('.mobile').addClass('active');
	$('header, main, footer').addClass('blur');
    })
    $('.close_mob_menu').click(function(){
    	$('header, main, footer').removeClass('blur');
    	$('.mobile').removeClass('active');
    })
    $(document).click(function(e){
    	if(
    		$('.mobile').hasClass('active') &&
    		$('.mobile_menu').has(e.target).length == 0 &&
    		$('.mobile').has(e.target).length == 0
    	)
    	{
    		$('header, main, footer').removeClass('blur');
	    	$('.mobile').removeClass('active');
    	}
    });

    // modal popup
    $(".modal").each( function(){
        $(this).wrap('<div class="overlay"></div>')
    });
    $(".open-modal").on('click', function(e){
        e.preventDefault();
        e.stopImmediatePropagation;

        var $this = $(this),
                modal = $($this).data("modal");

        $(modal).parents(".overlay").addClass("open");
        setTimeout( function(){
            $(modal).addClass("open");
        }, 350);

        $(document).on('click', function(e){
            var target = $(e.target);

            if ($(target).hasClass("overlay")){
                $(target).find(".modal").each( function(){
                    $(this).removeClass("open");
                });
                setTimeout( function(){
                    $(target).removeClass("open");
                }, 350);
            }

        });
    });
    $(".close-modal").on('click', function(e){
        e.preventDefault();
        e.stopImmediatePropagation;

        var $this = $(this),
                modal = $($this).data("modal");

        $(modal).removeClass("open");
        setTimeout( function(){
            $(modal).parents(".overlay").removeClass("open");
        }, 350);
    });

  // MAIN slider
  $('.main_slider').slick({
    arrows: false,
    dots: true,
    fade: true,
    cssEase: 'linear',
    slidesToShow: 1,
    arrows: true,
    nextArrow: '<img class="desktop_arrow arrow_next" src="img/content/arrow_right_2.png" alt="slide">',
    prevArrow: '<img class="desktop_arrow arrow_prev" src="img/content/arrow_left_2.png" alt="slide">',
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          nextArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
          prevArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
          dots: false
        }
      }
    ]
  });
  // slide_number
  // for arrows
  $(".main_slider .fa-angle-right").on('click',  function(event) {
  	var number = $(".slick-active").attr('data-sec');
  	$('.slide_number').text(number);
  });
  $(".main_slider .fa-angle-left").on('click',  function(event) {
  	var number = $(".slick-active").attr('data-sec');
  	$('.slide_number').text(number);
  });
  $(".main_slider .desktop_arrow").on('click',  function(event) {
  	var number = $(".slick-active").attr('data-sec');
  	$('.slide_number').text(number);
  });
  // for dots
  $(".main_slider .slick-dots li").on('click',  function(event) {
  	var number = $(".slick-active").attr('data-sec');
  	$('.slide_number').text(number);
  });

    // video popup
    $('.open_video').magnificPopup({
     type: 'iframe',
   });

 // catalog dropdown
  for (const dropdown of document.querySelectorAll(".custom-select-wrapper")) {
      dropdown.addEventListener('click', function() {
          this.querySelector('.custom-select').classList.toggle('open');
      })
  }
    for (const option of document.querySelectorAll(".custom-option")) {
        option.addEventListener('click', function() {
            if (!this.classList.contains('selected')) {
                this.parentNode.querySelector('.custom-option.selected').classList.remove('selected');
                this.classList.add('selected');
                this.closest('.custom-select').querySelector('.custom-select__trigger span').textContent = this.textContent;
            }
        })
    }
    window.addEventListener('click', function(e) {
        for (const select of document.querySelectorAll('.custom-select')) {
            if (!select.contains(e.target)) {
                select.classList.remove('open');
            }
        }
    });
  // slider range
  $(".polzunok-5").slider({
    min: 0,
    max: 600,
    values: [34, 460],
    range: true,
    animate: "fast",
    slide : function(event, ui) {

        $(".polzunok-input-5-left").val(ui.values[ 0 ] + "$");
        $(".polzunok-input-5-right").val(ui.values[ 1 ] + "$");
    }
  });
  $(".polzunok-input-5-left").val($(".polzunok-5").slider("values", 0) + "$");
  $(".polzunok-input-5-right").val($(".polzunok-5").slider("values", 1) + "$");
  var zone = $('.all_filters');
  zone.focusout(function() {
      var input_left = $(".polzunok-input-5-left").val().replace(/[^0-9]/g, ''),
      opt_left = $(".polzunok-5").slider("option", "min"),
      where_right = $(".polzunok-5").slider("values", 1),
      input_right = $(".polzunok-input-5-right").val().replace(/[^0-9]/g, ''),
      opt_right = $(".polzunok-5").slider("option", "max"),
      where_left = $(".polzunok-5").slider("values", 0);
      if (input_left > where_right) {
          input_left = where_right;
      }
      if (input_left < opt_left) {
          input_left = opt_left;
      }
      if (input_left == "") {
      input_left = 0;
      }
      if (input_right < where_left) {
          input_right = where_left;
      }
      if (input_right > opt_right) {
          input_right = opt_right;
      }
      if (input_right == "") {
      input_right = 0;
      }
      $(".polzunok-input-5-left").val(input_left);
      $(".polzunok-input-5-right").val(input_right);
      $(".polzunok-5").slider( "values", [ input_left, input_right ] );
  });
  // open all_filters
  if(window.innerWidth <= 550){
    var openFilters = $('.all_filters');
    $(document).on('click', '.filter_button', function () {
      openFilters.slideToggle();
      return false;
    });
  }
  // recomendations and viewed
  // tabs
  $('.recomendations_and_viewed .default_button').click(function() {
     var id = $(this).attr('data-tab'),
         content = $('.recomendations_and_viewed .products[data-tab="'+ id +'"]');

     $('.recomendations_and_viewed .default_button').removeClass('active_button');
     $(this).addClass('active_button');

     $('.recomendations_and_viewed .products').removeClass('item_active');
     content.addClass('item_active');
  });
  // dashboard orders tabs
  $('.filters_and_action .filters .filter_status').click(function (){
    $('.filters .filter_status').removeClass('active');
    $(this).addClass('active');
  })
  // shopping basket
  $(".plus").on("click", function() {
    var button = $(this);
    var input = button.closest('.all_information').find('input[name=count]');
    var oldValue = input.val();
    console.log(oldValue)
    // operations
    var newVal = parseInt(oldValue) + 1;
    console.log(newVal)
    input.val(newVal);
  })

  $(".minus").on("click", function() {
    var button = $(this);
    var input = button.closest('.all_information').find('input[name=count]');

    var oldValue = input.val();
    if(oldValue > 0){
      var newVal = parseInt(oldValue) - 1;
      input.val(newVal);
    } else{
      newVal = 0;
    }
  });
  // change password block - profile data
  $('.change_password_button').click(function (e) {
    e.preventDefault();
    $(this).css('display', 'none');
    $('.password_field').css('display', 'block');
  });
  // goods sliders
  $('.goods_slider').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: true,
   nextArrow: '<i class="fa fa-angle-right" aria-hidden="true"></i>',
   prevArrow: '<i class="fa fa-angle-left" aria-hidden="true"></i>',
   dots: false,
   fade: true,
   asNavFor: '.mini_slider'
  });
  $('.mini_slider').slick({
   slidesToShow: 3,
   vertical: true,
   verticalSwiping: true,
   slidesToScroll: 1,
   asNavFor: '.goods_slider',
   dots: false,
   arrows: false,
   focusOnSelect: true,
   responsive: [
     {
       breakpoint: 950,
       settings: {
        vertical: false,
        verticalSwiping: false
       }
     }
   ]
  });

  // autocomplete search

  $( function() {
    var availableTags = [
      "T-shirt",
      "Nike",
      "Adidas",
      "Zara",
      "Converse",
      "Gucci",
      "New Rel",
      "Addition",
      "New Balance"
    ];
    $( ".search_input" ).autocomplete({
      source: availableTags
    });
  } );
});
