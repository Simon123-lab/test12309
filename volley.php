<?php


$getname=$_POST['name'];
$getemail=$_POST['email'];
$getcontact=$_POST['contact'];

$con=mysqli_connect("localhost:3307","root","","volleypractice");

$result=mysqli_query($con,"insert into users (Name,Email,Contact)values('$getname','$getemail','$getcontact')");


if($result){

    echo "sucess";
}
else{

    echo "error" ;
}


?>