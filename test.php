<?php



$getname =$_POST['name'];


$con=mysqli_connect("localhost","root","","testing");
$result =mysqli_query($con,"insert into users (Name) values ('$getname')");


if($result){
    echo "Success";
}
else
{
    echo "error";
}

?>