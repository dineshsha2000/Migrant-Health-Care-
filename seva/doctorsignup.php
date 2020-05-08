<?php
$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cp=$_POST['cpass'];
$pho=$_POST['pho'];
$ph=$_POST['con'];
$aadhar=$_POST['aa'];

echo $name;


$f=1;
if($pass!=$cp){
    $f=0;
    
    echo "<h1>sorry password & confirm password are not same</h1>";
}
if($f==1){
    
if($id==null or $name==null or $email==null or $pass==null or $cp==null or  $ph==null || $aadhar==null){
    
    echo "<h2>sorry some fields are not field</h2>";
    
}


else{
    
 $con=mysqli_connect("localhost","root","","seva");
$q="insert into doctorsignup VALUES('$name','$email','$aadhar','$pass','$pho','$id','$ph');";

$v=mysqli_query($con,$q);
if($v){
    echo "successuly";
    echo "hell";
}
else{
    echo "false";
}
   
}
}
?>