﻿<?php
session_start();
?>
<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
  <link rel="stylesheet" href="/Content/css/bootstrap.min.css">
  <link rel="stylesheet" href="/Content/css/site.css">
  <script  type="text/javascript" src="/content/js/jquery-1.10.2.min.js"></script>
  <script  type="text/javascript" src="/content/js/jquery-extensions.js"></script>
  <script type="text/javascript" src="/Content/js/bootstrap.min.js"></script>
 </head>
 <body>
   
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
         <a class="navbar-brand hidden-sm" href="/">Home</a>
      </div>
      <div class="navbar-collapse collapse" role="navigation">
        <ul class="nav navbar-nav" style="display: none;">
          <li class="hidden-sm hidden-md"><a href="https://v2.bootcss.com/" target="_blank" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'v2doc'])">Bootstrap2</a></li>
          <li><a href="https://v3.bootcss.com/" target="_blank" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'v3doc'])">Bootstrap3</a></li>
          <li><a href="https://v4.bootcss.com/" target="_blank" onclick="_hmt.push(['_trackEvent', 'navbar', 'click', 'v4doc'])">Bootstrap4</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right hidden-sm">
          <li><a href="###">About</a></li>
        </ul>
      </div>
    </div>
  </div>

<div class="main-content-wrap">
  <div class="container main-content">
    
<div class="area login-area">
<?php
if (isset($_SESSION['uname']) && !empty($_SESSION['uname'])) {
    echo "Welcome：".$_SESSION['uname']."&nbsp;&nbsp;&nbsp;&nbsp;<a href='/handle/logouthandle.php'>Log out</a>";
}else{
    echo "Welcome, Please <a href='login.php'>Login</a> first.";
}
?>
</div>

  </div>
</div>

<footer class="footer">
  <div class="container">Footer</div>
</footer>
 </body>
</html>
