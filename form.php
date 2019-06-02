<?php
$name=$_POST['uname'];
$email=$_POST['email'];
$desc=$_POST['desc'];
$con= mysqli_connect("localhost","root","","contact") or die(mysqli_error($con));
$inquery="insert into contact_list(name,email,descript) values('$name','$email','$desc')";
$result= mysqli_query($con,$inquery) or die(mysqli_error($con));
header('Location:index.html');
?>