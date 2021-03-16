<?php
session_start();
?>
<?php
$username=$_POST["name"];
$password=$_POST["pwd"];
$password1=$_POST["pwd2"];
if ($password!=$password1){
 echo "两次输入的密码不一致！！！";
 echo'<a href="zhuce.html">返回</a>';
 die;
}

$conn = new mysqli("127.0.0.1", "test", "123456",'test');
if($conn->connect_error){
die("错误:".$conn->connect_error);
}
$sql = "INSERT INTO user (username, password)
VALUES ('$username', '$password')";
if (mysqli_query($conn, $sql)) {
    echo "注册成功，请返回登录";
    echo '<a href="index.php">BACK</a>';
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   
}
 
mysqli_close($conn);
?>
