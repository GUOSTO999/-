<?php
session_start();
$username=$_POST["test1"];
$password=$_POST["test2"];
$token=$_POST["token"];
if (empty($token)){
echo "error,请重新登录";die;
}
if ($_SESSION["token"]!=$token){
echo "错误,请重新登录";die;
}
$conn = new mysqli("127.0.0.1", "test", "123456",'test');
if($conn->connect_error){
die("错误:".$conn->connect_error);
}
$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);
//var_dump($result->num_rows);die;
if ($result->num_rows == 0) {
    $_SESSION['token'] = "";
    echo '账户或者密码错误!';    
} else {
    echo '登陆成功!';   
}
?>