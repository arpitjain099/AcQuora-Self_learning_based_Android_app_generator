 
  var random=42;
//console.log(JSONObjects);
function mult(level){
  if(level==1)return 1;
  if(level==2)return 1.3;
  if(level==3)return 1.4;
  if(level==4)return 2;
  if(level==5)return 2.5;
  if(level==6)return 2.7;
  if(level==7)return 2.9;
  if(level==8)return 3.5;
  if(level==9)return 4;
  if(level==10)return 5;
}

if(parseInt(window.localStorage.getItem("level")) ==1){
random=Math.floor((Math.random()*100)+1); 
if(JSON.parse(window.localStorage.getItem("JSONObject") ) [random].flag==1)
random=random ;
else location.reload();
}
else if(parseInt(window.localStorage.getItem("level")) ==2){
random=Math.floor((Math.random()*100)+100); 
if(JSON.parse(window.localStorage.getItem("JSONObject") ) [random].flag==1)
random=random ;
else location.reload();
}
else if(parseInt(window.localStorage.getItem("level")) ==3){
random=Math.floor((Math.random()*100)+200); 
if(JSON.parse(window.localStorage.getItem("JSONObject") ) [random].flag==1)
random=random ;
else location.reload();
}else if(parseInt(window.localStorage.getItem("level")) ==4){
random=Math.floor((Math.random()*100)+300); 
if(JSON.parse(window.localStorage.getItem("JSONObject") ) [random].flag==1)
random=random ;
else location.reload();
}
else if(parseInt(window.localStorage.getItem("level")) ==5){
random=Math.floor((Math.random()*100)+400); 
if(JSON.parse(window.localStorage.getItem("JSONObject") ) [random].flag==1)
random=random ;
else location.reload();
}
else if(parseInt(window.localStorage.getItem("level")) ==6){
random=Math.floor((Math.random()*100)+500); 
if(JSON.parse(window.localStorage.getItem("JSONObject") ) [random].flag==1)
random=random ;
else location.reload();
}
else if(parseInt(window.localStorage.getItem("level")) ==7){
random=Math.floor((Math.random()*100)+600); 
if(JSON.parse(window.localStorage.getItem("JSONObject") ) [random].flag==1)
random=random ;
else location.reload();
}
else if(parseInt(window.localStorage.getItem("level")) ==8){
random=Math.floor((Math.random()*100)+700); 
if(JSON.parse(window.localStorage.getItem("JSONObject") ) [random].flag==1)
random=random ;
else location.reload();
}
else if(parseInt(window.localStorage.getItem("level")) ==9){
random=Math.floor((Math.random()*100)+800); 
if(JSON.parse(window.localStorage.getItem("JSONObject") ) [random].flag==1)
random=random ;
else location.reload();
}
else if(parseInt(window.localStorage.getItem("level")) ==10){
random=Math.floor((Math.random()*100)+900); 
if(JSON.parse(window.localStorage.getItem("JSONObject") ) [random].flag==1)
random=random ;
else location.reload();
}


//level up code
if(parseInt(window.localStorage.getItem("level")) ==1 &&  parseInt(window.localStorage.getItem("score")) < 7000 )
  {window.localStorage.setItem("level",1);}
else if(parseInt(window.localStorage.getItem("level")) ==1 &&  parseInt(window.localStorage.getItem("score")) >=7000 )
  {window.localStorage.setItem("level",2);}
else if(parseInt(window.localStorage.getItem("level")) ==2 &&  parseInt(window.localStorage.getItem("score")) >=16000 )
  window.localStorage.setItem("level",3);
else if(parseInt(window.localStorage.getItem("level")) ==3 &&  parseInt(window.localStorage.getItem("score")) >=25000 )
  window.localStorage.setItem("level",4);
else if(parseInt(window.localStorage.getItem("level")) ==4 &&  parseInt(window.localStorage.getItem("score")) >=39000 )
  window.localStorage.setItem("level",5);
else if(parseInt(window.localStorage.getItem("level")) ==5 &&  parseInt(window.localStorage.getItem("score")) >=57000 )
  window.localStorage.setItem("level",6);
else if(parseInt(window.localStorage.getItem("level")) ==6 &&  parseInt(window.localStorage.getItem("score")) >=76000 )
  window.localStorage.setItem("level",7);
else if(parseInt(window.localStorage.getItem("level")) ==7 &&  parseInt(window.localStorage.getItem("score")) >=95000 )
  window.localStorage.setItem("level",8);
else if(parseInt(window.localStorage.getItem("level")) ==8 &&  parseInt(window.localStorage.getItem("score")) >=128000 )
  window.localStorage.setItem("level",9);
else if(parseInt(window.localStorage.getItem("level")) ==9 &&  parseInt(window.localStorage.getItem("score")) >=150000 )
  window.localStorage.setItem("level",10);
else if(parseInt(window.localStorage.getItem("level")) ==10 &&  parseInt(window.localStorage.getItem("score")) >=175000 )
  window.localStorage.setItem("level",11);
  //var JSONObject;
  window.localStorage.setItem("JSONObject",JSON.stringify(JSONObjects));

  function sampletry(){
    JSONObject=JSON.parse(window.localStorage.getItem("JSONObject"));
    JSONObject[0].option1="prashnt";
    window.localStorage.setItem("JSONObject",JSON.stringify(JSONObject));
  }
//window.localStorage.setItem("score",0);
//window.localStorage.setItem("attempt",0);
  function check1(){var attempt=parseInt(window.localStorage.getItem("attempt"));
var level=window.localStorage.getItem("level");
    if(JSON.parse( window.localStorage.getItem("JSONObject"))[random].answer==1){
      if(parseInt(window.localStorage.getItem("attempt"))==0){
       // score=parseInt(window.localStorage.getItem("score"));alert(score);
        //score=score+ (100*mult(level));
        window.localStorage.setItem("score",parseInt(window.localStorage.getItem("score"))+ (100*mult(level)));
        window.localStorage.setItem("attempt",0);
  }else if(parseInt(window.localStorage.getItem("attempt"))==1){
        //score=parseInt(window.localStorage.getItem("score"));alert(score);
        //parseInt(window.localStorage.getItem("score"))+ (60*mult(level));
        window.localStorage.setItem("score",parseInt(window.localStorage.getItem("score"))+ (60*mult(level)));
        window.localStorage.setItem("attempt",0);
  }else if(parseInt(window.localStorage.getItem("attempt"))==2){
        //score=parseInt(window.localStorage.getItem("score"));alert(score);
       // score=score+ (30*mult(level));
        window.localStorage.setItem("score",parseInt(window.localStorage.getItem("score"))+ (30*mult(level)));
        window.localStorage.setItem("attempt",0);
  }
  else if(parseInt(window.localStorage.getItem("attempt"))==3){
        //score=parseInt(window.localStorage.getItem("score"));alert(score);
        //score=score+ (10*mult(level));
      window.localStorage.setItem("score",parseInt(window.localStorage.getItem("score"))+ (10*mult(level)));
        window.localStorage.setItem("attempt",0);
  }location.reload();}
    else {attempt=parseInt(window.localStorage.getItem("attempt")); 
    attempt=attempt+1; if(attempt>3)attempt=3; 
    window.localStorage.setItem("attempt",attempt);}
  }


//window.localStorage.setItem("attempt",0);


  function check2(){var attempt=parseInt(window.localStorage.getItem("attempt"));
var level=window.localStorage.getItem("level");
    if(JSON.parse( window.localStorage.getItem("JSONObject"))[random].answer==2){
      if(parseInt(window.localStorage.getItem("attempt"))==0){
        score=parseInt(window.localStorage.getItem("score"));
        score=score+ (100*mult(level));
        window.localStorage.setItem("score",score);window.localStorage.setItem("attempt",0);
  }else if(parseInt(window.localStorage.getItem("attempt"))==1){
        score=parseInt(window.localStorage.getItem("score"));
        score=score+ (60*mult(level));
        window.localStorage.setItem("score",score);window.localStorage.setItem("attempt",0);
  }else if(parseInt(window.localStorage.getItem("attempt"))==2){
        score=parseInt(window.localStorage.getItem("score"));
        score=score+ (30*mult(level));
        window.localStorage.setItem("score",score);window.localStorage.setItem("attempt",0);
  }
  else if(parseInt(window.localStorage.getItem("attempt"))==3){
        score=parseInt(window.localStorage.getItem("score"));
        score=score+ (10*mult(level));
        window.localStorage.setItem("score",score);window.localStorage.setItem("attempt",0);
  }
  console.log(window.localStorage.getItem("score"));
location.reload();
}
    else {attempt=parseInt(window.localStorage.getItem("attempt")); 
    attempt=attempt+1; if(attempt>3)attempt=3; 
    window.localStorage.setItem("attempt",attempt);}
  }
console.log("score is "+window.localStorage.getItem("score"));
console.log("attempt is"+parseInt(window.localStorage.getItem("attempt")));
console.log("level is "+window.localStorage.getItem("level"));



  function check3(){var attempt=parseInt(window.localStorage.getItem("attempt"));
var level=window.localStorage.getItem("level");
    if(JSON.parse( window.localStorage.getItem("JSONObject"))[random].answer==3){
      if(parseInt(window.localStorage.getItem("attempt"))==0){
        score=parseInt(window.localStorage.getItem("score"));
        score=score+ (100*mult(level));
        window.localStorage.setItem("score",score);window.localStorage.setItem("attempt",0);
  }else if(parseInt(window.localStorage.getItem("attempt"))==1){
        score=parseInt(window.localStorage.getItem("score"));
        score=score+ (60*mult(level));
        window.localStorage.setItem("score",score);window.localStorage.setItem("attempt",0);
  }else if(parseInt(window.localStorage.getItem("attempt"))==2){
        score=parseInt(window.localStorage.getItem("score"));
        score=score+ (30*mult(level));
        window.localStorage.setItem("score",score);window.localStorage.setItem("attempt",0);
  }
  else if(parseInt(window.localStorage.getItem("attempt"))==3){
        score=parseInt(window.localStorage.getItem("score"));
        score=score+ (10*mult(level));
        window.localStorage.setItem("score",score);window.localStorage.setItem("attempt",0);
  }location.reload();}
    else {attempt=parseInt(window.localStorage.getItem("attempt")); 
    attempt=attempt+1; if(attempt>3)attempt=3; 
    window.localStorage.setItem("attempt",attempt);}
  }


//console.log(window.localStorage.getItem("score"));

function check4(){var attempt=parseInt(window.localStorage.getItem("attempt"));
var level=window.localStorage.getItem("level");
    if(JSON.parse( window.localStorage.getItem("JSONObject"))[random].answer==4){
      if(parseInt(window.localStorage.getItem("attempt"))==0){
        score=parseInt(window.localStorage.getItem("score"));
        score=score+ (100*mult(level));
        window.localStorage.setItem("score",score);window.localStorage.setItem("attempt",0);
  }else if(parseInt(window.localStorage.getItem("attempt"))==1){
        score=parseInt(window.localStorage.getItem("score"));
        score=score+ (60*mult(level));
        window.localStorage.setItem("score",score);window.localStorage.setItem("attempt",0);
  }else if(parseInt(window.localStorage.getItem("attempt"))==2){
        score=parseInt(window.localStorage.getItem("score"));
        score=score+ (30*mult(level));
        window.localStorage.setItem("score",score);window.localStorage.setItem("attempt",0);
  }
  else if(parseInt(window.localStorage.getItem("attempt"))==3){
        score=parseInt(window.localStorage.getItem("score"));
        score=score+ (10*mult(level));
        window.localStorage.setItem("score",score);window.localStorage.setItem("attempt",0);
  }
location.reload();
}
    else {attempt=parseInt(window.localStorage.getItem("attempt")); 
    attempt=attempt+1;
    if(attempt>3)attempt=3; 
    window.localStorage.setItem("attempt",attempt);}
  }




var music_mode=1;
function call_function1(){var audio = new Audio();
var str='http://translate.google.com/translate_tts?ie=utf-8&tl=en&q='+JSON.parse(window.localStorage.getItem("JSONObject"))[random].option1;
audio.src =str;
audio.play();
}
function call_function2(){
var audio = new Audio();
var str='http://translate.google.com/translate_tts?ie=utf-8&tl=en&q='+JSON.parse(window.localStorage.getItem("JSONObject"))[random].option2;
audio.src =str;
audio.play();}
function call_function3(){
var audio = new Audio();
var str='http://translate.google.com/translate_tts?ie=utf-8&tl=en&q='+JSON.parse(window.localStorage.getItem("JSONObject"))[random].option3;
audio.src =str;
audio.play();
}
function call_function4(){
var audio = new Audio();
var str='http://translate.google.com/translate_tts?ie=utf-8&tl=en&q='+JSON.parse(window.localStorage.getItem("JSONObject"))[random].option4;
audio.src =str;
audio.play();}

//console.log(window.localStorage.getItem("score"));