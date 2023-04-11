const btn = document.getElementById('output-btn');

btn.addEventListener('click',() => {
  console.log('クリックされました！');
});

////////////////////////////////////////////////////
const addBtn = document.getElementById('add-btn');

const parentList = document.getElementById('parent-list');


addBtn.addEventListener('click',() => {
  const childList =document.createElement('li');
  childList.textContent ='これはリスト要素です'; 
  parentList.appendChild(childList);
});
//////////////////////////////////////////////////
const countBtn =document.getElementById('count-btn');

countBtn.addEventListener('click',() => {
  const text = document.forms.textForm.textBox.value;
  console.log(text.length + '文字');
});

//////////////////////////////////////////////// 
const getBtn = document.getElementById('area-btn');

getBtn.addEventListener('click',()=> {
  const area =document.forms.areaForm.area.value;
  console.log(area);
});
////////////////////////////////////////////////
const osBtn = document.getElementById('os-btn');

osBtn.addEventListener('click',()=> {
  const items =document.forms.osForm.os;
  for(let i=0; i<items.length; i++){
    if(items[i].checked){
      console.log(items[i].value);
    }
  }
});
