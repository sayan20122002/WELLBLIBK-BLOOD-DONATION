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
<html>
    <head>
    <title>WELL BLINK| Comfirm </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="contact.css">
    <style>
        body{
           background: url(20.jpg) no-repeat fixed center;
            background-size: contain;
            position: relative;
            top: 60px;
        }
    .alert{
  /*border: 1px solid black;*/
  width: 50%;
  position: relative;
  left: 350px;
  top: 110px;
}
.alert p{
  text-align: center;
  text-decoration: bolder;
  font-size: 40px;
  color: #010101;
}
.alert1{
    width: 300px;
    position: relative;
    left: 550px;
    top: 79px;
    /*border: 1px solid black;*/
}
.alert1 p{
    color:#050404;
}

@media screen (max-width:1000px){
    .alert {
        position: relative;
        right: 150px;
    }
}
    </style>
</head>
        <body>
        <?php
            if($stmt==true)
            {
                echo '<div class="alert">
                <p><b>Your account is now created</b></p>
                </div>';
            }
            ?>
            <div class="alert1">
            <p class="mb-0">go to the login Page <a href="login.php"> using this link.</a></p>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
