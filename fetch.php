<?php




$con=mysqli_connect("localhost:3307","root","","volleypractice");
$result=mysqli_query($con,"select * from user");

$data=[];

while($row=mysqli_fetch_array($result))
{

extract($row);

$item=[


    "ID"=>$ID,
    "Name"=>$Name,
    "Email"=>$Email,
    "Contact"=>$Contact,
   


];
array_push($data,$item);


}

echo json_encode($data);

?>