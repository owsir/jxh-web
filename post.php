<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <?php include("header.php"); ?>
 </head>
 <body>
 <?php include("nav.php"); ?>
  <div class="main-content-wrap">
    <div class="container main-content">

<div class="area post-area">
    <form class="form-horizontal" action="/handle/posthandle.php" method="post">
      <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="post_title" id="post_title"  placeholder="Title">
        </div>
      </div>
      <div class="form-group">
        <label for="pw" class="col-sm-2 control-label">Content</label>
        <div class="col-sm-10">
          <textarea rows="6" name="post_content" id="post_content"  class="form-control"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
</div>
    </div>
  </div>

  
<?php include("footer.php"); ?>
 </body>
</html>
