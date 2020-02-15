
<bdy>
<?php
session_start():
$error_message = "";
 
if(isset($_POST["login"])) {
    if($_POST["user_name"] == "webtan" && $_POST["password"] == "webtan_pass") {
        $_SESSION["user_name"] = $_POST["user_name"];
        $login_success_url = "login_success.php";
        header("Location: {$login_success_url}");
        exit;
    }
$error_message = "※ID、もしくはパスワードが間違っています。<br>　もう一度入力して下さい。";
}
?>
</body>
<body>
<?php
if($error_message) {
    echo $error_message;
}
?>
<form action="index.php" method="POST">
    <p>ログインID：<input name="user_name" type="text"></p>
    <p>パスワード：<input name="password" type="password"></p>
    <input name="login" type="submit" value="ログイン">
</form>
/<body>
