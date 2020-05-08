<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
               <link rel="stylesheet" href="bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <style>
        a{
            float: right;
        }
    </style>
</head>
<body>
  <a href="hospital.html"><button class="btn btn-lg btn-dark">Back</button></a>
   <?php
$id=$_POST['hid'];
$name=$_POST['hname'];
$phone=$_POST['ph'];
$state=$_POST['st'];
$dis=$_POST['dis'];
$address=$_POST['addr'];
$pho=$_POST['pho'];
$type=$_POST['type'];
$amb=$_POST['amb'];
$map=$_POST['map'];

$con=mysqli_connect("localhost","root","","seva");
$q="insert into hospital VALUES('$id','$name','$type','$dis','$state','$phone','$amb','$pho','$address','$map');";
$res=mysqli_query($con,$q);
if($res){
    echo "successfully";
    
}
else{
    echo "error";
}


?> 
</body>
</html>
