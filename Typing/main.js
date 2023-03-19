let untyped = '';
 
const untypedfield = document.getElementById('untyped');

const textLists = [
  'Hello World','This is my App','How are you?',
   'Today is sunny','I love JavaScript!','Good morning',
   'I am Japanese','Let it be','Samurai',
   'Typing Game','Information Technology',
   'I want to be a programmer','What day is today?',
   'I want to build a web app','Nice to meet you',
   'Chrome Firefox Edge Safari','machine learning',
   'Brendan Eich','John Resig','React Vue Angular',
   'Netscape Communications','undefined null NaN',
   'Thank you very much','Google Apple Facebook Amazon',
   'ECMAScript','console.log','for while if switch',
   'var let const','Windows Mac Linux iOS Android',
   'programming'
];

const createText = () => {
  let random = Math.floor(Math.random()*textLists.length);

  untyped = textLists[random];
  untypedfield.textContent = untyped;
  // 変数untypedに入った値が、id-untypedというドキュメントのtextContentというプロパティに値が代入されたことで表示された
};
createText();

const keyPress = e => {
  console.log(e.key);
};

document.addEventListener('keypress',keyPress)

const rankCheck = score => {};

const gameOver = id => {};

const timer = () => {};

