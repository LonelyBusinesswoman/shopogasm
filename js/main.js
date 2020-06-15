jQuery(document).ready(function($) {
  // header height
  var height = $( 'header' ).height();
  $( '.headerMargin' ).height(height);

  // Search mobile
  if(window.innerWidth <= 560){
    var searchBlock = $('.search');
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
  console.log(number);
	$('.slide_number').text(number);
});
$(".slider .fa-angle-left").on('click',  function(event) {
	var number = $(".slick-active").attr('data-sec');
	$('.slide_number').text(number);
});
// for dots
$(".slider .slick-dots li").on('click',  function(event) {
	var number = $(".slick-active").attr('data-sec');
  console.log(number);
	$('.slide_number').text(number);
});
  // video popup
  $('.open_video').magnificPopup({
   type: 'iframe',
 });
});
