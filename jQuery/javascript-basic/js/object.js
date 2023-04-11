const personalData = {name: '侍太郎',age:36,gender:'男性'};

console.log(personalData);

personalData.age = 37;

personalData.address = '東京都';

console.log(personalData);

console.log(personalData.gender);

const sayGoodMorning = () => {
  console.log('おはようございます！');
  console.log('昨日はよく眠れましたか？');
  console.log('今日も一日頑張りましょう！');
}

sayGoodMorning();

sayGoodMorning();
