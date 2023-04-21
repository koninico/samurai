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
  //windowオブジェクト全体をスクロールする関数
  $(window).scroll(function(){
    //もしスクロールしたwindowのトップ位置が上から100px進んだら
    if($(this).scrollTop() > 100){
      //ボタンをフェードインで表示する
      $('#back_btn').fadeIn();
    }else{
      //トップ位置が100px未満のときはフェードアウトで消す
      $('#back_btn').fadeOut();
    }
  });
});

  // ＃を押したときに移動先を検索して、＃があるhtmlに移動する
  $('a[href^="#"]').click(function(){
    //戻るスピードを設定
    const speed = 500;
    //クリックしたhrefの属性(URLの移動先)を取得
    const href = $(this).attr('href');
    //targetを定義
    let $target;
    //もしクリックしたhrefが#（トップかトップに戻る）だったときは関数を終わらせる
    if(href == '#'){
      $target = $('html');
    //クリックしたhrefが#以外のときは、targetにその位置を入れる
    }else{
      $target = $(href);
    }

    //targetの位置情報をpositionに入れる
    const position = $target.offset().top;
    //htmlやbodyを動かす
    $('html,body').animate({
      //position（target）の先頭位置までスクロールする
      'scrollTop':position},
      //スピードは500、動きがswing
      speed,'swing');
      //次の関数が発動しないようここで停止させる
      return false;
  });

  //スクロールしたときにフェードインで表示させる
  //ウィンドウをスクロールしたときに
  $(window).scroll(function(){
  //window画面をスクロールしたときの位置を入れる
  const scrollAmount = $(window).scrollTop();
  //window画面の高さを取得する
  const windowHeight = $(window).height();

  // section（aboutとworks）を繰り返す関数
  $('section').each(function(){
    // セクションの開始位置をpositionに入れる
    const position = $(this).offset().top;
    // もしスクロールした時の位置が画面の位置よりも大きい場合に
    if(scrollAmount > position - windowHeight + 100){
      // フェードイン用のクラスを追加する→CSSで動きをつける
      $(this).addClass('fade-in');
    }
  });
});

// Worksの画像をクリックしたときにモーダルで拡大表示する
$('.works img').click(function () {
  const imgSrc = $(this).attr('src');
  $('.big-img').attr('src',imgSrc);
  $('.modal').fadeIn();
  return false
});


$('.close-btn').click(function () {
  $('.modal').fadeOut();
  return false
});

