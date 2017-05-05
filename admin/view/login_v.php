<style type="text/css">
input {
  width: 320px;
  height: 40px;
  background-color: #ffffaa
}

.header{
  width: 100%;
  height: 50px;
  border-bottom: 1px solid #dedeea;
}

.content{
  margin-top: 50px;
  margin: auto;
  border: 1px solid #dedeea;
  width: 500px;
  height: 500px;
}

form{
  text-align: center;
  margin-top: 100px;
}
.header-form{
  padding-left: 20px;
  background-color: #f9f7f7;
  line-height: 30px;
}

#submit {
  background-color: #5a9ee8;
  border-radius: 8px;
  height: 35px;
}
</style>

<div class="header">
  
</div>
<br><br>
<div class="content">
  <div>
    <p class="header-form"><span class="glyphicon glyphicon-lock"></span> Vui lòng nhập thông tin đăng nhập vủa bạn</p>
  </div>
  <form action="" method="POST">
    <input type="text" name="username" placeholder="Tên đăng nhập"  id="username"><br><br>
    <input type="text" name="password" placeholder="Mật khẩu" id="password"><br><br>
    <p><a href="#">Quên mật khẩu</a></p>
    <input type="submit" name="submit" value="Login" id="submit">
  </form>
  </div>