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
   
    .n{

    color: white;
    align-items: center;
    float: right;
    align-content:center;
   align-items: center;
    margin-top: 10px;
    }
    li{
        margin-right: 20px;
        padding: 20px;
        color: white
    }
    .login{
        float: right;
        
    }
    .car{
        text-align: center;
        height: 700px;
        width:auto;
    
        
    }
    .modal-header{
        background-color: brown;
    }
    .modal-body{
        
    }
    .me{
        font-size: 20px;
    
    }
    body{
        background-color: black;
        font-family: 'Patua One', cursive;
    }
    .colo{
    }
    input{
    color: black;
    }

    .al{
     text-align: center; 
    margin-top: 10px;
    margin-bottom: 10px;
    }
    button{
        color: white;
        
    }

    </style>
</head>

<body>

<img src="logohealth.png"width="100" height="70ho">
   <div class=" nav n">
     <button type="button" class="btn btn-outline-light btn-lg" data-toggle="modal" data-target="#exampleModal">
  LOGIN
</button>
    &nbsp;&nbsp;
    <button type="button" class="btn btn-outline-light btn-lg" data-toggle="modal" data-target="#exampleModalLongs">
 SIGN-UP      </button>


    
   
    &nbsp; 
 </div>





<div class="container-fluid car ">
<div id="carouselExampleSlidesOnly" class="carousel slide " data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="stethoscope-2617701_1920.jpg" class="d-block w-100" alt="palm">
    </div>
    <div class="carousel-item">
      <img src="scientist-2141259_1920.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="surgery-676375_1920.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
</div>






<!-- Modal -->
<div class="modal fade me " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DOCTOR LOGIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="doctorlogin.php" method="post">
      <div class="modal-body">
        
         EMAIL
        <input type="text" class="form-control"  name="email">
        <br>
         PASSWORD
         <input type="password" class="form-control" name="pass">
         
        
         <br><br>
         <input type="submit" class="btn btn-lg btn-primary" >   
         
          </div>               
        </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
</div>



<div class="modal fade colo" id="exampleModalLongs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">SIGN UP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form method="post" action="doctorsignup.php">
           <h2 class="al">SIGN UP </h2> 
   <div class="container">
   <div class="row">
   <div class="col-md-6">
  <div class="form-group"> 
  NAME:
 <input type="text " class="form-control" name="name">
  <br>
   EMAIL:
    <input type="text" class="form-control"  name="email">
  </div>
  
  
    
   <div class="form-group"> 
   CONTACT NO:
    <input type="text" class="form-control"  name="con">
  </div> 
  <div class="form-group"> 
   PASSWORD:
    <input type="text" class="form-control"  name="pass">
  </div> 
<div class="form-group"> 
   CONFIRM PASSWORD:
    <input type="text" class="form-control"  name="cpass">
  </div>    
  
   
    </div>
    <div class="col-md-6">
     <div class="form-group">
        AADHAR NO:
         <div>
             <input type="text" class="form-control" name="aa">
         </div>
         
     </div>

   
   
     <div class="form-group"> 
  DOCTOR ID:
    <input type="text" class="form-control"  name="id">
  </div> 

<div class="form-group"> 
 DOCTOR PROOF:
    <input type="file" class="form-control"  name="pho">
  </div> 
        
                
        
    </div>
   <div class="container-fluid al" >
     <div>
      <div col-md-12>
       <input type="submit" class="btn-lg btn-success" name="sub">
       </div>
       </div>
   </div>
</div>
</div>

        </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       </div>
           
    </div>
  </div>
</div>
<div id="about">
    welcome to my world
    
</div>

</body>
</html>