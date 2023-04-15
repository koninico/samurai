$(function(){
  //aタグにホバーすると半透明
  $('a').hover(
    function(){
      $(this).animate({opacity:0.5,},400);
    },
    function(){
      $(this).animate({opacity:1.0,},400);
    }
  );

   //カルーセル
  $('.carousel').slick({
    autoplay: true,
    dots: true,
    fade: true,
    autoplaySpeed: 2500,
    arrows: false,
    speed: 1000,
  })

  //100pxスクロールするとTOPボタンを表示する
  $(window).scroll(function(){
    if($(this).scrollTop() > 100){
      //エラーあり
      $('#back_btn').fadeIn();
    }else{
      //エラーなし
      $('#back_btn').fadeOut();
    }
  });
});

  // topに戻るを押したときにスクロールして戻る
  $('a[href^="#"]').click(function(){
    const speed = 500;
    const href = $(this).attr('href');
    console.log(href);
    let $target;
    if(href == '#'){
      $target = $('html');
    }else{
      $target = $(href);
    }
    const position = $target.offset().top;
    $('html,body').animate({
      'scrollTop':position},
      speed,'swing');
      return false;
  });

const pos = $('.aboutlink').offset({
  top: 50,
  left: 600
});
console.log(pos);