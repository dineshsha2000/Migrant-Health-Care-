<!DOCTYPE html>
<?
Header('Refresh:1;url=http://localhost/seva/viewmobile.php');
?>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
       table, th, td {
  border-style: hidden;
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
            margin-left: 20px;
            padding: 30px;
        }
        th{
            margin-left: 70px;
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
            a{
        float: right;
    }

    </style>
    
</head>
<body >
<script>
    function callme(){
        window.location.reload;
    }
    
</script>
 <?php
       $con=mysqli_connect("localhost","root","","seva");

$q="select * from mobile";
$res=mysqli_query($con,$q);

    ?>
    <a href="admin.php"><button class="btn btn-lg btn-dark">BACK</button></a>
  <div class="container-fluid cen">
   <h3 >REGISTERED PATIENTS</h3>
    <div class="sp">
    <table  class="table-striped">
        <th>
          REFERENCE ID
        </th>
        
        <th>
         PATIENT NAME
        </th>
        <th>
            AGE
        </th>
        <th>
             MEDICAL CONDITION
        </th>
        <th>
             ADDRESS
        </th>
        <th>
             PHONE
        </th>
        <th>
            IMG
        </th>
        
        <th>
            STATUS
        </th>
  
    <?php
        while($f=mysqli_fetch_array($res)){
?>      <tr>
        <td>
        <?php echo $f[0]?>
        </td>
        
        <td>
        <?php echo $f[1]?>
        </td>
        
        <td>
        <?php echo $f[2]?>
        </td>
        
        <td>
        <?php echo $f[3]?>
        </td>
        <td>
        <?php echo $f[4]?>
        </td>
        <td>
        <?php echo $f[5]?>
        </td>
        
        <td>
        <?php echo $f[8]?>
        </td>
        <td>
      <form method="post" action="status.php">
        <button class="btn btn-outline-dark" value="1" 
         name="but">
            ACCEPT
        </button>
        <br><br>
        <button class="btn btn-outline-dark" value="2" 
        name="but">
            REJECT
        </button>
        <input type="hidden" name="hid" 
        value="<?php echo $f[0];?>">
        </form>  
        </td>
        
        </tr>
      
       
<?php
}    
        
?>      
    
   
   
    </table>
    </div>
    </div>
    
</body>
</html>