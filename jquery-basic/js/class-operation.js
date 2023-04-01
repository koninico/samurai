$(function(){
  $('#toggle').on('click',function(){
    $('#target').toggleClass('sample');
  });
});

$(function(){
  $('#has').on('click',function(){
    let result = $('#target').hasClass('sample');
    if(result) {
      console.log('sampleクラスがあります');
    }else {
      console.log('sampleクラスがありません');
    }
  });
});
