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
    <form class="form-horizontal" action="/handle/loginhandle.php" method="post">
      <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Email">
        </div>
      </div>
      <div class="form-group">
        <label for="pw" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control"  name="user_pw" id="user_pw" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Log in</button>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <a href="register.php">Register Now</a>
        </div>
      </div>
    </form>
</div>

  </div>
</div>
<footer class="footer">
  <div class="container">Footer</div>
</footer>
 </body>
</html>
