var friends = {
  name: '太郎',
  age: 20,
  address: '東京都渋谷区○○○',
  '母国語': '日本語'
}

for ( var list in friends){
  if(friends.hasOwnProperty(list)){
    if(friends[list]==='日本語')console.log(list);
  }
}