$(function(){
 $(document).on('click keydown',(e) => {
  if(e.type === 'click'){
    $('div').text('クリックされました！');
  }
  if(e.type === 'keydown'){
    $('div').text('キーが押されました！');
  }
 });
});