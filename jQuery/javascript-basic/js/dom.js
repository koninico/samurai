console.log(document.head);
console.log(document.body);

console.log(window);

console.log(document.getElementById('first-list'));

console.log(document.getElementsByClassName('heading'));

const headings = document.getElementsByClassName('heading');

for(let i = 0; i < headings.length; i++){
  console.log(headings[i]);
}

console.log(document.querySelector('h1'));
console.log(document.querySelector('#second-heading'));
console.log(document.querySelector('.list'));

console.log(document.querySelectorAll('.heading'));
console.log(document.querySelectorAll('li'));

// 複数のHTML要素を取得し、定数に代入する
const cssHeadings = document.querySelectorAll('.heading');
const cssLists = document.querySelectorAll('li');

// 複数のHTML要素を1つずつ取得し、中身を出力する
for (let i = 0; i < cssHeadings.length; i++) {
  console.log(cssHeadings[i]);
}
for (let i = 0; i < cssLists.length; i++) {
  console.log(cssLists[i]);
}

console.log(document.querySelectorAll('.heading'));
console.log(document.querySelectorAll('li'));

const li = document.createElement('li');

li.textContent ='JavaScriptで新しくしたリスト3';

document.querySelector('ul').appendChild(li);