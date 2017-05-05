  <link rel="stylesheet" type="text/css" href="lib/library/bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="liby/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="lib//bootstrap/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="lib/jquery/app.js"></script>
  <link rel="stylesheet" type="text/css" href="student/css/index.css">
    <script> 
    $(document).ready(function(){    
        var un = 'Tên đăng nhập'; 
        $("input[name=un]").click(function(){ 
            if($(this).val() == un) $(this).val(''); 
        }); 
        $("input[name=un]").blur(function(){ 
            if($(this).val() == '') $(this).val(un); 
        }); 
        $("input[name=un]").focus(function(){ 
            if($(this).val() == un) $(this).val(''); 
        }); 
         
        var pa = 'Mật khẩu'; 
        $("input[name=pa]").click(function(){ 
            if($(this).val() == pa) $(this).val(''); 
        }); 
        $("input[name=pa]").blur(function(){ 
            if($(this).val() == '') $(this).val(pa); 
        }); 
        $("input[name=pa]").focus(function(){ 
            if($(this).val() == pa) $(this).val(''); 
        }); 
    }); 
    </script> 
<div class="header">
  
</div>
<br><br>
<div class="content">
  <div>
    <p class="header-form"><span class="glyphicon glyphicon-lock"></span> Vui lòng nhập thông tin đăng nhập vủa bạn</p>
  </div>
  <form action="view/menu.php" method="POST">
    <input type="text" name="un" value="Tên đăng nhập" id="un"><br><br>
    <input type="text" name="pa" value="Mật khẩu" id="pa"><br><br>
    <p><a href="#">Quên mật khẩu</a></p>
    <input type="submit" name="submit" value="Login" id="submit">
  </form>
  </div>
