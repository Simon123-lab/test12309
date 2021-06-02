<?php

$getname =$_POST['name'];
$getemail=$_POST['email'];
$getcontact=$_POST['contact'];
$getaddress=$_POST['address'];


$con=mysqli_connect("localhost","root","","webapi");

$result =mysqli_query($con,"insert into users (Name,Email,Contact,Address) values ('$getname','$getemail','$getcontact','$getaddress')");

if($result){
    echo"Succes";

}
else
{
    echo "error";
}


?>