<?php 
session_start();
$name=$_POST['email'];
$pass=$_POST['pass'];


    
$af=0;
 $con=mysqli_connect("localhost","root","","seva");

if($name=="admin@gmail.com" && $pass=="12345"){
 echo "successfully login in admin";
    header("location:admin.php");
}
else{
    

    

$q="select name,email from signup where email='$name' AND pass='$pass'";
    $result=mysqli_query($con,$q);
  
    if(mysqli_num_rows($result)>0) 
        
{
        
echo "successfully login";
$_SESSION["email"] = $name; 
               
        header("location:home.php");
    }
else{
    echo "sorry invalid";

}
}
?>