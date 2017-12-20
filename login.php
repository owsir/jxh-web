<!doctype html>
<html lang="en">
 <head>
  <?php include("header.php"); ?>
 </head>
 <body>
   
 <?php include("nav.php"); ?>

<div class="main-content-wrap">
  <div class="container main-content">
    
<div class="area login-area">
    <form class="form-horizontal" action="/handle/loginhandle.php" method="post">
      <div class="form-group">
        <label for="name" class="col-sm-2 control-label">UserName</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="user_name" id="user_name" placeholder="UserName">
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
<?php include("footer.php"); ?>
 </body>
</html>
