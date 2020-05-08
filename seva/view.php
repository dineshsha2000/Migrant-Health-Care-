<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
        <link rel="stylesheet" href="bootstrap.min.css">
        
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style>
        .cen{
            
        align-content: flex-start;
            margin-top:0px;;
         
            
        }
        
        body{
            
        }
        border{
            color: black;
        }
    </style>
</head>
<body  class="container border">
   
    <?php
    $id=$_POST['id'];
   
       $con=mysqli_connect("localhost","root","","seva");

    $q="select * from schemes where sid='$id';";
    $res=mysqli_query($con,$q);
    
while($f=mysqli_fetch_array($res)){
            
?>
            <div class=" container-fluid jumbotron  cen">
            <p class="display-3"><?php echo $f[1] ?></p>
                    
          <h4><?php echo $f[10] ?></h4>
    </div>   
<div class="row">
    <div class="col-md-6">
       <div class="form-inline" >
        <h4>Scheme Applicable in :
          <?php echo $f[8] ?>
           </h4>
           
       </div>
       <div>
           <h4>
               Coverage limit:
               <?php echo $f[2] ?>
           </h4>
           
           
       </div>
        <div>
           <h4>
                Registration Fee:
               <?php echo $f[3] ?>
           </h4>
           
           
       </div>
        <div>
           <h4>
            Age Between: &nbsp;             
               <?php echo $f[4] ?>
               -
               <?php echo $f[5] ?>
           </h4>
           
           
       </div>
   
   
   </div>
   <div>
   
        <div>
           <h4>
              No of Person:
               <?php echo $f[6] ?>
           </h4>
           
           
       </div>
      <div>
           <h4>
              Applicable Caste:
               <?php echo $f[7] ?>
           </h4>
           
           
       </div>
    <div>
           <h4>
               Gender:
               <?php echo $f[9] ?>
           </h4>
           
           
       </div>
   
        
           
                   
       
       
   </div> 
    
</div>      
       
<?php
                

                
                
}   
?>
<br>
<a href="schemesearch.php"><button class="btn btn-lg btn-dark">BACK</button></a>
</body>
</html>