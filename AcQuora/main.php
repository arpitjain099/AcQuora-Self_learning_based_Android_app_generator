<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
<script>var random=parseInt(window.localStorage.getItem("random")); </script>  
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,charset=utf-8">

  <title>Powered by Arpit Jain</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="humans.txt">

  <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

  <!-- Facebook Metadata /-->
  <meta property="fb:page_id" content="" />
  <meta property="og:image" content="" />
  <meta property="og:description" content=""/>
  <meta property="og:title" content=""/>

  <!-- Google+ Metadata /-->
  <meta itemprop="name" content="">
  <meta itemprop="description" content="">
  <meta itemprop="image" content="">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

  <!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
       However, there is a blank style.css in the css directory should you prefer -->
  <link rel="stylesheet" href="css/gumby.css">
  <!-- <link rel="stylesheet" href="css/style.css"> -->

  <script src="js/libs/modernizr-2.6.2.min.js"></script>
</head>

<style>
  html, body {
    background: #fefefe;
  }

  .column, .columns, .tiles > li {
    background: #ddd;
        border: 1px solid #d0d0d0;
    -webkit-transition-duration: .3s;
    -moz-transition-duration: .3s;
    -o-transition-duration: .3s;
    -ms-transition-duration: .3s;
    transition-duration: .3s;
  }

  .column:hover, .columns:hover {
    background: #efefef;
    cursor: pointer;
    -webkit-transition-duration: .3s;
    -moz-transition-duration: .3s;
    -o-transition-duration: .3s;
    -ms-transition-duration: .3s;
    transition-duration: .3s;
  }

  .row {
    margin-bottom: 25px;
    text-align: center;
  }

  h1, h2 {
    font: bold italic 220px georgia, times new roman, serif;
    color: #555;
    letter-spacing: -.09em;
    -webkit-transition-duration: 1s;
  }

  h2  {
    font-size: 21px;
    font-weight: normal;
    line-height: 1.6;
  }

  p {
    font-size: 16px;
    line-height: 60px;
    margin-bottom: 0;
    color: #555;

    -webkit-transition-duration: .2s;
    -moz-transition-duration: .2s;
    -o-transition-duration: .2s;
    -ms-transition-duration: .2s;
    transition-duration: .2s;
  }

  .column:hover p, .columns:hover p {
    font-size: 25px;
    font-weight: bold;

    -webkit-transition-duration: .2s;
    -moz-transition-duration: .2s;
    -o-transition-duration: .2s;
    -ms-transition-duration: .2s;
    transition-duration: .2s;
  }

  .head, .head:hover {
    box-shadow: none;
    margin-top: 30px;
  }

  .head span {
    font-weight: bold;
    color: #353535;
  }

  .head span span {
    font-size: 32px;
    font-weight: bold !important;
  }

  a {
    color: #d04526;
  }

  a:hover {
    text-decoration:underline;
  }

  .special, .special:hover {
    background: transparent;
        border: none;
  }

  .special:hover p {
    color: #ffe400;
  }

  @media only screen and (max-width: 767px) {

    h1 {
      font: bold italic 100px georgia, times new roman, serif;
      -webkit-transition-duration: .5s;
    }
  }
</style>
    <FORM METHOD="POST" ACTION="mainsubmission.php"><center>
<TABLE BORDER="0.1">
  <TR><!--The question dataset has to be in JSON-->
    <TD>Push in the JSON here</TD>
    <TD>
      <textarea name="json" cols="25" rows="5">
Put in your question dataset here...
</textarea>
    </TD>
  </TR>
  <TR>
    <TD>Or,alternatively give the .csv file for data</TD>
    <TD>
     
<input type="file" name="file" id="file"><br>
    </TD>
  </TR>
<TR>
    <TD>No. of levels required</TD>
    <TD>
      <select name="levels">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
    </TD>
  </TR>
  <TR>
    <TD>Level scoring scheme(see our <a href="#">scoring scheme</a> pattern)</TD>
    <TD><INPUT TYPE="TEXT" NAME="scoring_scheme" SIZE="25"></TD>
  </TR>
  <TR>
    <TD>Submitter's name</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="name" SIZE="25">
    </TD>
  </TR>
  <TR>
    <TD>Submitter's email</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="email" SIZE="25">
    </TD>
  </TR>
</TABLE>
<P><INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></P>
</FORM>



  <!-- Grab Google CDN's jQuery, fall back to local if offline -->
  <!-- 2.0 for modern browsers, 1.10 for .oldie -->
  <script>
  var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
  if(!oldieCheck) {
    document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
  } else {
    document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
  }
  </script>
  <script>
  if(!window.jQuery) {
    if(!oldieCheck) {
      document.write('<script src="js/libs/jquery-2.0.2.min.js"><\/script>');
    } else {
      document.write('<script src="js/libs/jquery-1.10.1.min.js"><\/script>');
    }
  }
  </script>


  <script src="js/libs/gumby.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>
