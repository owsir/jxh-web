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
    <form class="form-horizontal" method="post">
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
        <label for="repw" class="col-sm-2 control-label">Confirm Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control"  name="user_repw" id="user_repw" placeholder="Password">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="button" class="btn btn-default" id="btn">Sign In</button>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
           <div>Already has an account, <a href="login.php">Login Now</a></div>
        </div>
      </div>

     
    </form>
</div>

  </div>
</div>
<?php include("footer.php"); ?>
 </body>

<script type="text/javascript">
$(document).ready(function(e) {
    $("#btn").click(function(){
        var uname = $("#user_name").val();
        var pwd = $("#user_pw").val();
        var repwd = $("#user_repw").val();
        $.ajax({
            url:"handle/registerhandle.php",
            data:{uname:uname,pwd:pwd,repwd:repwd},
            type:"POST",
            dataType:"TEXT",
            success: function(data){
                if(data=="OK")
                {
                    alert("Success!");
                    window.location.href="login.php"
                }
                else
                {
                    alert("Fail! "+data);
                }
                
                }
            
              })
        
        })    
});

</script>

</html>
