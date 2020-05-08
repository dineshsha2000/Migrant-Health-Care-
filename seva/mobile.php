<?php

session_start();
?>



<?php 
$pname=$_POST['pn'];
$age=$_POST['age'];
$mc=$_POST['mc'];
$add=$_POST['add'];
$ph=$_POST['ph'];
$pho=$_POST['pho'];
$rid=$_SESSION['email'];
echo $rid;
echo $ph;
echo $pho;

$con=mysqli_connect("localhost","root","","seva");
$q="insert into mobile VALUES('$rid','$pname','$age','$mc','$add','$ph','$pho');";
$res=mysqli_query($con,$q);
if($res){
    echo "inserted succesfully";
}
else{
    echo "soory";
}
?>