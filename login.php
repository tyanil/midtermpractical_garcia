<?php
$conn = mysqli_connect("localhost", "root", "", "garcia");
if(!$conn){
    die("Connection failed");
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM instructors WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)>0){
header ("Location: landing.html");
exit();
}else{
    echo "Login failed";
}
    mysqli_close($conn);
?>