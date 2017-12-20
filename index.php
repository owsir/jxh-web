<?php
session_start();
?>
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
<?php include("footer.php"); ?>
 </body>
</html>
