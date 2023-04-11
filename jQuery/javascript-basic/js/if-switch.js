console.log(45 + 18);

console.log(45 > 18);

console.log('5'==5);
console.log('5'===5);

let num = Math.floor(Math.random()*5);
console.log(num);
if (num === 4) {
  console.log('大当たりです');
}

else if(num ===3){
  console.log('当たりです');
}

else{
  console.log('はずれです');
}

num = Math.floor(Math.random() * 5);
console.log(num);

switch(num){
  case 2:
    console.log('小吉です');
    break;
  case 3:
    console.log('中吉です');
    break;
  case 4:
    console.log('大吉です');
    break;
  default:
    console.log('末吉です');
    break;
}
