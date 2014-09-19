
<html><head>
<link rel="stylesheet" type="text/css" href="background.css"></head>

<?php 
  $a1=$_POST["json"];
  $a2=$_POST["scoring_scheme"];
 $fp = fopen('data.js', 'w');
 //fwrite($fp," localStorage.setItem("score",0);

 //fwrite($fp, $a1);
 ////fwrite($fp, $a2);
 $fp2=fopen("datas.js", 'w');
 fwrite($fp, $a2);
 $str="var JSONObjects= ";
  fwrite($fp2,$str);
   fwrite($fp, $a1);
 fwrite($fp, 'var JSONObject;
  localStorage.setItem(JSONObject,JSON.stringify(JSONObjects));

  function sampletry(){
    JSONObject=JSON.parse(localStorage.getItem("JSONObject"));
    JSONObject[0].option1="prashnt";
    localStorage.setItem("JSONObject",JSON.stringify(JSONObject));
  }
localStorage.setItem("attempt",0);
  function check1(){var attempt=localStorage.getItem("attempt");
var logical_level=localStorage.getItem("logical_level");
    if(localStorage.getItem("JSONObject")[0].answer==1){
      if(attempt==0){
        Logical_score=localStorage.getItem("Logical_score");
        Logical_score=Logical_score+ (100*mult(logical_level));
        localStorage.setItem("Logical_score",JSON.stringify(Logical_score));localStorage.setItem("attempt",0);
  }else if(attempt==1){
        Logical_score=localStorage.getItem("Logical_score");
        Logical_score=Logical_score+ (60*mult(logical_level));
        localStorage.setItem("Logical_score",JSON.stringify(Logical_score));localStorage.setItem("attempt",0);
  }else if(attempt==2){
        Logical_score=localStorage.getItem("Logical_score");
        Logical_score=Logical_score+ (30*mult(logical_level));
        localStorage.setItem("Logical_score",JSON.stringify(Logical_score));localStorage.setItem("attempt",0);
  }
  else if(attempt==3){
        Logical_score=localStorage.getItem("Logical_score");
        Logical_score=Logical_score+ (10*mult(logical_level));
        localStorage.setItem("Logical_score",JSON.stringify(Logical_score));localStorage.setItem("attempt",0);
  }}
    else {attempt=localStorage.getItem("attempt"); 
    attempt=attempt+1; 
    localStorage.setItem("attempt",attempt);}
  }





  function check2(){var attempt=localStorage.getItem("attempt");
var logical_level=localStorage.getItem("logical_level");
    if(localStorage.getItem("JSONObject")[0].answer==2){
      if(attempt==0){alert(localStorage.getItem("logical_level"));alert(localStorage.getItem("Logical_score"));
        Logical_score=localStorage.getItem("Logical_score");
        Logical_score=Logical_score+ (100*mult(logical_level));console.log((logical_level));
        localStorage.setItem("Logical_score",JSON.stringify(Logical_score));localStorage.setItem("attempt",0);
  }else if(attempt==1){
        Logical_score=localStorage.getItem("Logical_score");
        Logical_score=Logical_score+ (60*mult(logical_level));
        localStorage.setItem("Logical_score",JSON.stringify(Logical_score));localStorage.setItem("attempt",0);
  }else if(attempt==2){
        Logical_score=localStorage.getItem("Logical_score");
        Logical_score=Logical_score+ (30*mult(logical_level));
        localStorage.setItem("Logical_score",JSON.stringify(Logical_score));localStorage.setItem("attempt",0);
  }
  else if(attempt==3){
        Logical_score=localStorage.getItem("Logical_score");
        Logical_score=Logical_score+ (10*mult(logical_level));
        localStorage.setItem("Logical_score",JSON.stringify(Logical_score));localStorage.setItem("attempt",0);
  }}
    else {attempt=localStorage.getItem("attempt"); 
    attempt=attempt+1; 
    localStorage.setItem("attempt",attempt);}
  }

console.log(localStorage.getItem("logical_level"));
  function check3(){var attempt=localStorage.getItem("attempt");
var logical_level=localStorage.getItem("logical_level");
    if(localStorage.getItem("JSONObject")[0].answer==3){
      if(attempt==0){
        Logical_score=localStorage.getItem("Logical_score");
        Logical_score=Logical_score+ (100*mult(logical_level));
        localStorage.setItem("Logical_score",JSON.stringify(Logical_score));localStorage.setItem("attempt",0);
  }else if(attempt==1){
        Logical_score=localStorage.getItem("Logical_score");
        Logical_score=Logical_score+ (60*mult(logical_level));
        localStorage.setItem("Logical_score",JSON.stringify(Logical_score));localStorage.setItem("attempt",0);
  }else if(attempt==2){
        Logical_score=localStorage.getItem("Logical_score");
        Logical_score=Logical_score+ (30*mult(logical_level));
        localStorage.setItem("Logical_score",JSON.stringify(Logical_score));localStorage.setItem("attempt",0);
  }
  else if(attempt==3){
        Logical_score=localStorage.getItem("Logical_score");
        Logical_score=Logical_score+ (10*mult(logical_level));
        localStorage.setItem("Logical_score",JSON.stringify(Logical_score));localStorage.setItem("attempt",0);
  }}
    else {attempt=localStorage.getItem("attempt"); 
    attempt=attempt+1; 
    localStorage.setItem("attempt",attempt);}
  }




function check4(){var attempt=localStorage.getItem("attempt");
var logical_level=localStorage.getItem("logical_level");
    if(localStorage.getItem("JSONObject")[0].answer==4){
      if(attempt==0){
        Logical_score=localStorage.getItem("Logical_score");
        Logical_score=Logical_score+ (100*mult(logical_level));
        localStorage.setItem("Logical_score",JSON.stringify(Logical_score));localStorage.setItem("attempt",0);
  }else if(attempt==1){
        Logical_score=localStorage.getItem("Logical_score");
        Logical_score=Logical_score+ (60*mult(logical_level));
        localStorage.setItem("Logical_score",JSON.stringify(Logical_score));localStorage.setItem("attempt",0);
  }else if(attempt==2){
        Logical_score=localStorage.getItem("Logical_score");
        Logical_score=Logical_score+ (30*mult(logical_level));
        localStorage.setItem("Logical_score",JSON.stringify(Logical_score));localStorage.setItem("attempt",0);
  }
  else if(attempt==3){
        Logical_score=localStorage.getItem("Logical_score");
        Logical_score=Logical_score+ (10*mult(logical_level));
        localStorage.setItem("Logical_score",JSON.stringify(Logical_score));localStorage.setItem("attempt",0);
  }}
    else {attempt=localStorage.getItem("attempt"); 
    attempt=attempt+1; 
    localStorage.setItem("attempt",attempt);}
  }




var music_mode=1;
function call_function1(){
	var temp=localStorage.getItem("JSONObject");
    temp=JSON.parse(temp);
var audio = new Audio();
var output_tobecalled=temp[0].option1;
var str="http://translate.google.com/translate_tts?ie=utf-8&tl=en&q="+temp[0].option1;
audio.src =str;
audio.play();
}
function call_function2(){
	var temp=localStorage.getItem("JSONObject");
    temp=JSON.parse(temp);
var audio = new Audio();
var output_tobecalled=temp[0].option2;
var str="http://translate.google.com/translate_tts?ie=utf-8&tl=en&q="+temp[0].option2;
audio.src =str;
audio.play();}
function call_function3(){
	var temp=localStorage.getItem("JSONObject");
    temp=JSON.parse(temp);
var audio = new Audio();
var output_tobecalled=temp[0].option3;
var str="http://translate.google.com/translate_tts?ie=utf-8&tl=en&q="+temp[0].option3;
audio.src =str;
audio.play();
}
function call_function4(){
var audio = new Audio();
var output_tobecalled=JSONObject[0].option4;
var str="http://translate.google.com/translate_tts?ie=utf-8&tl=en&q="+temp[0].option4;
audio.src =str;
audio.play();}');
?>
<center>Form Submission process completed!</center>
