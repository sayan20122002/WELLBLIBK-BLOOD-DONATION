<?php
$name=$_POST['name'];
$email=$_POST['email'];
$blood=$_POST['blood'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$message=$_POST['message'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];


$conn= new mysqli('localhost','root','','wbsignup');
if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);
}
else{
    $stmt= $conn->prepare("insert into wbsu(name,email,blood,phone,address,gender,age,message,password,cpassword)
    values(?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssisss",$name,$email,$blood,$phone,$address,$gender,$age,$message,$password,$cpassword);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>