//video gallery
function smallSliders() {
  /* function for logo slider */
  $('.logoSlider').append('<span class="control next"></span>');
  $('.logoSlider').prepend('<span class="control prev"></span>');
  $('.logoWrapper').wrap('<div class="logoSliderCon"></div>');

  /* set width */
  var moveSlider = 150;
  var moveSliderNew = 160;
  var moveSliderNew1 = 0;
  var slideWraperWidth = $('.logoSlider');
  var slideridcount= 0;
  var countLeng = $('#slider3 .Residentialbox').length;
  $('#slider3').find('.logoWrapper').css('width', moveSliderNew*countLeng+'px');

  $('#slider3 .control').click( function(){
    if($(this).hasClass('next')){
      moveSliderNew += moveSlider;

      $(this).prev('.logoSliderCon').find('.logoWrapper').stop().animate({
        left: -moveSliderNew
        },800, function(){

        var w = parseFloat($('#slider3 .logoSliderCon').find('.logoWrapper').css('width'));
        var l = parseFloat($('#slider3 .logoSliderCon').find('.logoWrapper').css('left'))-300;

        if( - w > l ){
          $('#slider3 .logoSliderCon').find('.logoWrapper').animate({
            left:0
          },800, function(){
            moveSliderNew=0;
          });
        }
      });
    }else{
      var w = $('#slider3 .logoSliderCon').find('.logoWrapper').css('width');
      var l = parseInt($('#slider3 .logoSliderCon').find('.logoWrapper').css('left') );
      if(l==0 || l > 1) {
        $(this).next('.logoSliderCon').find('.logoWrapper').stop().animate({
          left: '0px'
        },800);
      }else{
        moveSliderNew -= moveSlider;
        $(this).next('.logoSliderCon').find('.logoWrapper').stop().animate({
          left: -moveSliderNew
          },800);
      }
    }
  });
}

$(document).ready( function(){
  /*  video slider */
  $('.Residentialbox .play').click( function(){
    /*m4v = $(this).attr('m4v');
		ogg = $(this).attr('ogg');
		poster = $(this).attr('poster');
		videoSlider();*/
    var x= $(this).html();
    var vtitle = $.trim($(this).parent(".Residentialbox").find(".img img").attr('title'));
    x = (vtitle!="") ? "<h3>"+vtitle+"</h3>"+x:x;
    $('.youtube').html(x);
    $('.videoCon').fadeIn('slow')
  });
  $('.close').click( function(){
    $('.videoCon').fadeOut('slow');
    $('.youtube').html();
  });
  smallSliders();
});