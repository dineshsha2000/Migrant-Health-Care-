<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
        <link rel="stylesheet" href="bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
        img{
            float: left;
            border-radius: 50px;
        }
    

        .cen{
            
        align-content: flex-start;
            margin-top:0px;;
         
            
        }
        
        body{
            
        }
        border{
            color: black;
            
        }
    h4{
        padding: 5px;
        margin-left: 20px;
        margin-right: 20px;
    }

    .map{
        align-content: center;
    }
    
    </style>
</head>
<body class="container">
    <?php
    $id=$_POST['id'];
    
    $con=mysqli_connect("localhost","root","","seva");
    $q="select * from hospital where id='$id';";
    $res=mysqli_query($con,$q);
    while($f=mysqli_fetch_array($res)){
    ?>
     
        <div class="row">
        <div class="col-md-4">
         <img class="img-fluid" src="<?php echo $f[7] ?>" alt="no " height="400px" width="400px">
         </div>
            
             <div class="display-4 col-md-8"><?php echo $f[1] ?></div>
           
        
        
       
         </div>
           
<br><br><br><br>     
        
      <div class="row border table">
    <div class="col-md-6">
       
       <div class="form-inline" >
        <h4>TYPE:
          <?php echo $f[2] ?>
           </h4>
           
       </div>
       <div>
           <h4>
               DISTRICT:
               <?php echo $f[3] ?>
           </h4>
           
           
       </div>
        <div>
           <h4>
                STATE:
               <?php echo $f[4] ?>
           </h4>
           
           
       </div>
        <div>
           <h4>
          PHONE:
          
               <?php echo $f[5] ?>
           </h4>
           
           
       </div>
   
   
   </div>
   <div class="col-md-6">
   
        <div>
           <h4>
          AMBULANCE:
               <?php echo $f[6] ?>
           </h4>
           
           
       </div>
      <div>
           <h4>
              ADDRESS:
               <?php echo $f[8] ?>
           </h4>
           
           
       </div>
       
       
   </div> 
  
</div>      
 <br>
 <br>
 <br>
  <div class="border map">
           <h4>
              <p class="display-3">MAP</p>
       
               <?php echo $f[9] ?>
           </h4>
           
           
 </div>
       
               
<?php              
    }
    ?>
    
    
</body>
</html>