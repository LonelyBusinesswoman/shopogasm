jQuery(document).ready(function($) {
  // header height
  var height = $( 'header' ).height();
  $( '.headerMargin' ).height(height);

  // Search mobile
  if(window.innerWidth <= 560){
    var searchBlock = $('.search_all');
    $(document).on('click', '.search_mobile', function () {
      searchBlock.slideToggle();
      return false;
    });
  }
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
$('.slider').slick({
  arrows: false,
  dots: true,
  fade: true,
  cssEase: 'linear',
  slidesToShow: 1,
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
$(".slider .fa-angle-right").on('click',  function(event) {
	var number = $(".slick-active").attr('data-sec');
	$('.slide_number').text(number);
});
$(".slider .fa-angle-left").on('click',  function(event) {
	var number = $(".slick-active").attr('data-sec');
	$('.slide_number').text(number);
});
// for dots
$(".slider .slick-dots li").on('click',  function(event) {
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
$(document).focusout(function() {
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
  $('.recomendations_and_viewed .action_button').click(function() {
     var id = $(this).attr('data-tab'),
         content = $('.recomendations_and_viewed .products[data-tab="'+ id +'"]');

     $('.recomendations_and_viewed .action_button').removeClass('active_button');
     $(this).addClass('active_button');

     $('.recomendations_and_viewed .products').removeClass('item_active');
     content.addClass('item_active');
  });
});
