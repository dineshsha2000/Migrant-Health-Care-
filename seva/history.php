<?php

session_start();
?>


<?php 
if(isset($_POST['but'])){
$sta=$_POST['sta'];
$dis=$_POST['dis'];

    

    
    

}
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
       table, th, td {
  border-style: hidden;
}
            body{
   
            
            }
        th{
            background-color:black;
            padding: 10px;
            color:white;
        }
        table{
            text-align: center;
            color:black;
        }
        tr{
            
            background-color: bisque;
        }
        td{

            padding: 50px;
        }
        th{

            padding: 30px;
        }
        .cen{
            text-align: center;
        margin-right: 40px;
        }
        .sp{
            text-align: center;
            align-content: center;
            align-items: center;
            
        }
            
            body{
                border: 15px;
            }
            table{
                border: 4px;
                align-content: center;
                text-align: center;
                margin-right: 100px;
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
    
    $em=$_SESSION['email'];
    
    
    echo $em;
        
    $k="select mob from signup where email='$em';";
    $r=mysqli_query($con,$k);
    while($f=mysqli_fetch_array($r)){
    $v=$f[0];
    }
    
    
    echo $v;
    
    
    
    
    
    


$q="select * from presdetails where phone='$v';";
  
    
$res=mysqli_query($con,$q);
    
if(mysqli_num_rows($res)==0){
    ?>
    <h3 class="cen">NO result</h3>
    <?php
}
else{    
    ?>
    <div class="">
  <div class="container cen">
   <h3 >History</h3>
    <div class="sp">
    <table  class="table-striped ">
        <th>
           DATE
        </th>
        <th>
          Patient NAME:
        </th>
        
        <th>
            MEDICAL CONDITION
        </th>
        <th>
            MEDICAL PRESCRIPTION
        </th>
        
        <th>
           CHECK BY DOCTOR:
        </th>
        <th>
          DOCTOR ID:
        </th>
        
    <?php
        while($f=mysqli_fetch_array($res)){
?>      <tr>
        <td>
        <h4>
            <?php echo $f[8]?>
        </h4>
        
        </td>
        
        <td>
         <h4>
            <?php echo $f[2]?>
        </h4>
        </td>
        
        <td>
         <h4>
            <?php echo $f[4]?>
        </h4>
        <td>
         <h4>
            <?php echo $f[5]?>
        </h4>
        
        </td>
        <td>
         <h4>
            <?php echo $f[1]?>
        </h4>
         
        
        </td>
        
        <td>
         <h4>
            <?php echo $f[0]?>
        </h4>
         
        
        </td>
        
        
        </tr>
      
       
<?php
}    
   
}

  ?>  
    
    
    
    
    
    
 
    
</table>
</div>
</div>
</body>
</html>