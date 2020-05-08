<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
      
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="container border">
   <?php
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cp=$_POST['cpass'];
$mar=$_POST['mar'];
$ph=$_POST['con'];
$city=$_POST['city'];
$state=$_POST['st'];

$count=$_POST['count'];
$aadhar=$_POST['aa'];
$addr=$_POST['addr'];
echo $name;


$f=1;
if($pass!=$cp){
    $f=0;
    
    echo "<h1>sorry password & confirm password are not same</h1>";
}
if($f==1){
    
if($name==null or $email==null or $pass==null or $cp==null or $count==null or  $ph==null || $state==null || $city==null || $mar==null || $addr==null || $aadhar==null){
    
    echo "<h2>sorry some fields are not field</h2>";
    
}


else{
    
 $con=mysqli_connect("localhost","root","","seva");
$q="insert into signup(name,email,mob,state,dist,famcount,pass,marital,address,addarno)VALUES('$name','$email','$ph','$state','$city','$count','$pass','$mar','$addr','$aadhar');";

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
 <a href="main.php"><button class="btn btn-lg btn-dark">back</button></a>
</body>
</html>