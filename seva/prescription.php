<?php

session_start();
?>


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
    input{
        width: 400px;
    }
    button{
        align-content: center;
        text-align: center;
        margin-left: 400px;
    }
    a{
        float: right;
    }
    </style>


</head>
<body class="container">
  <a href="home.php"><button class=" b btn btn-lg btn-outline-dark">Back</button></a>
  <?php
       $con=mysqli_connect("localhost","root","","seva");
    
    $v=$_SESSION['email'];
    
//    echo "<h4>YOUR EMAIL :<h4>";
//    echo "<h3>$v</h3>";
    
$q="select id,name from doctorsignup where email='$v';";
  
    
$res=mysqli_query($con,$q);
 while($f=mysqli_fetch_array($res)){
  
 
    
?> 
 
   <form method="post" action="predetails.php">
    <p class="display-3">prescription</p>
    <div class="row">
<div class="col-md-6">
    <div class="form-group">
       
        
    <input type="hidden" class="form-control" name="id" value=<?php echo $f[0]?>>
    <input type="hidden" class="form-control" name="dname" value=<?php echo $f[1]?>>   
        
    </div>
    
      <div class="form-group">
       
        Patient Name:
        <input type="text" class="form-control" name="name">
        
    </div>
        <div class="form-group">
         Age:
        <input type="text" class="form-control" name="a">
        
         </div>
         <div class="form-group">
         Medical condition:
            
             <textarea type="text" class="form-control" name="mc"></textarea>
        </div>
         <div class="form-group">
         Medican prescribed:
            
             <textarea type="text" class="form-control" name="mp"></textarea>
        </div>
             
             <br>
             <br>
             <br>
             
    
    
</div>
<div class="col-md-6">
<br>
<div class="form-group">
   Phone No:
   <input type="text" name="ph">
    
    
</div>        
</div>        

</div>
<button type="submit"  class="btn btn-lg btn-dark ">SEND</button>
</form>
<?php }?>
</body>
</html>