<?php

session_start();

$con = mysqli_connect('localhost','root','pcsquare@12');

mysqli_select_db($con,'orderdetails');

$user = $_POST['user'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$s = " select * from userdetails where user = '$user' "; 

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo" Username Already Taken";
}
else{
     $reg = " insert into userdetails(user,fname,lname,address,phone,email) values ('$user','$fname','$lname','$address','$phone','$email')";
     mysqli_query($con, $reg);
     echo " Order Successfull";
}

?>