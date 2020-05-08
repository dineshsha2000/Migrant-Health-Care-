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
    <link rel="stylesheet" href="main.js">
<link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<style>
                
.n{

    color: black;
    align-items: center;
    float:right;
    align-content:center;
    
    }
    li{
        margin-right:20px;
        padding: 10px;
        color: white
    }
    .al{
        margin-left: 40px;
        
    }
    .me{
        
        float: right;
    }
   
    .b{
        align-content: center;
        margin-top: 30px;
        text-align: center;
        float: inherit;
    }
    body{
        background-color: burlywood;
    }
    img{
        border-radius: 50px;
        margin-left: 0px;
    }
    .im{
        float: left;
    }
    .g{
        margin-right: 25px;
        padding-top: 10px;
    }
    h4{
        
    }
    </style>        

</head>
<body class="container">
      <script>
    function myfun(){
        
        alert("logged out successfully");
            
    }
    
    </script>
    <img class="im" src="logo.png" height="125px" width="500px">
<div class=" nav n">
<form method="post" action="schemesearch.php">
    <li >
     <button type="submit" class="btn  btn-lg btn-dark" >SCHEME</button>
    </li>
</form>
<form method="post" action="hosdisplay.php">
    <li >
   <button type="submit" class="btn btn-lg btn-dark" >HOSPITAL</button>
    </li>
    
</form >
 <form method="post" action="logout.php">
  <button type="submit" onclick="myfun()"class="btn btn-lg btn-info">LOG OUT</button>
   <br>
   </form>
</div>
 
  <div class="nav n g">
  <form method="post" action="history.php">
   <button class="btn btn-lg btn-dark">
       HISTROY
   </button>
   </form>
    </div>
   <div class="jumbotron">
      
   </div>
<div class="jumbotron ">
 <div class="row">
  <div  class="col-md-4 col-lg-4">
   <h3 class="al">MOBILE CLINIC</h3>
   
    <img src="mobileclinic.jpg" width="300px" height="300px">
     
</div>
<div class="col-md-8 col-lg-8" >
     <h4>Mobile Clinic is inovative model which is used for provide health 
        care to the people all over the country which is mainly used for providing treatment to people living in remote places
      
        </h4>  
        <form method="post" action="mobile.html">
        <button class="btn btn-lg btn-outline-dark b">BOOK NOW</button>
        </form>
</div>
</div>
 </div>       
        





<div class="jumbotron ">
 <div class="row">
  <div  class="col-md-4">
   <h3 class="al">VACCINATION</h3>
   
    <img src="download%20(3).jpg" width="300px" height="300px">
     
</div>
<div class="col-md-8" >
     <h4>
Vaccination protects children from serious illness and complications of vaccine-preventable diseases which can include amputation of an arm or leg, paralysis of limbs, hearing loss, convulsions, brain damage, and death. Vaccine-preventable diseases, such as measles, mumps, and whooping cough, are still a threat.
        </h4>
        <form method="post" action="vacscd.html">
        <button class="btn btn-lg btn-outline-dark b">VIEW MORE</button>
        </form> 
</div>
</div>
 </div>       


</body>
</html>