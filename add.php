<?php
include_once('connection.php');

if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $username=$_POST['username'];
    $pass=md5($_POST['password']);
    $phone=$_POST['phonenumber'];

    $sql   ="INSERT INTO `tbl_user`(`name`, `username`, `password`,`phone`) VALUES ('$name','$username','$pass','$phone')";
    $result=mysqli_query($conn,$sql);
    if($result){ 
    header('location:index2.php');
    echo"<script>alert('New User Register Success');</script>";   
    }else{
        die(mysqli_error($conn)) ;
    }
   
}
