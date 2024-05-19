$(function(){
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});

$(function(){
let swipeOption = {
  loop: true,
  effect: 'fade',
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  speed: 2000,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  }
}
new Swiper('.swiper-container', swipeOption);
});


//スクロールインコンテンツ
//複数回処理したい場合はoneをonに変える
$(function() {
	$('.sc01').one('inview', function(event, isInView, visiblePartX, visiblePartY) {
		if(isInView){
			$(this).stop().addClass('mv01');
		}
		else{
			$(this).stop().removeClass('mv01');
		}
	});
});
$(function(){
  $('#faq dt').click(function(){
        $(this).toggleClass("open");
	  	$(this).next('dd').slideToggle("fast");
     });
  });