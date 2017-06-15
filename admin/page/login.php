
<!DOCTYPE html>
<html lang="zh-CN">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登陆</title>
<link rel="stylesheet" href="../css/style.css">
<body  style="background:url('../images/bg.jpg')no-repeat">

<div class="login-container" >
    <h1>欢迎登陆</h1>
    <form action="../logic/login.php" method="post" id="loginForm">
        <div>
            <input type="text" name="username" class="username" placeholder="用户名" autocomplete="off" id="username"/>
        </div>
        <div>
            <input type="password" name="password" class="password" placeholder="密码" oncontextmenu="return false" onpaste="return false" />
        </div>
          <button id="submit" type="submit" name="submit"> 登 陆 </button> 
    </form>

    <a href="register.php">
        <button type="button" class="register-tis">还有没有账号？</button>
    </a>

</div>

</body>
<script src="../js/jquery.min.js"></script>
<script src="../js/common.js"></script>
<!--表单验证-->
<script src="../js/jquery.validate.js"></script>
<script>
    // 获取当前页面的url
    var thisURL = document.URL; 
    // 获取url中的请求参数
    var urlParam = thisURL.split('?')[1];
    // 如果url里面传了参数，就给用户名value赋值进去
    if(urlParam){
        var username= urlParam.split("=")[1];
        $("#username").val(username);
    }
</script>
</html>