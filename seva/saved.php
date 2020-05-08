<?php 
if(isset($_POST['but'])){
$g=$_POST['gen'];
$c=$_POST['cas'];
$s=$_POST['sta'];
    
echo $s;
    echo "<h1>button clicked</h1>";
    echo $g;
    echo $c;
    

}
else{
    echo "else executed";
    $g="ALL";
    $c="ALL";
    $s="ALL";
}
?>




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
            margin-left:350px;
        }
    </style>

</head>
<body>
  <form method="post" action="schemesearch.php">
  <div class="container">
  <div class="row" >
   <div class="form-group">
    gender:
    <select name="gen"  class="form-control" value="ALL" >
        <option value="ALL" >ALL</option>
        <option value="male">MALE</option>        <option value="female">FEMALE</option>
        
        
    </select>
    caste:
    
    <select name="cas"  class="form-control" value="ALL" >
        <option value="ALL" >ALL</option>
        <option value="oc">OC</option>
        <option value="bc">BC</option>
        <option value="mbc">MBC</option>
        <option value="sc/st">SC/ST</option>
        
        
        
    </select>
    
    state:
    <input type="text" class="form-control"  name="sta"   value="ALL">
  
      </div>
    
    
    </div>
    <button type="submit" class="btn-lg btn-outline-dark" name="but" >search</button>
    
    </div>
    </form>
    
 <?php
       $con=mysqli_connect("localhost","root","","seva");
if(isset($_POST['but'])){
    $m="select * from schemes;";
    $res=mysqli_query($con,$m);
    ?>
    
  <div class="container-fluid cen">
   <h3 >GENERAL SCHEMES</h3>
    <div class="sp">
    <table  class="table-striped">
        <th>
           ID
        </th>
        
        <th>
            SCHEME NAME
        </th>
        <th>
            STATE
        </th>
        
        <th>
           VIEW MORE
        </th>
        
    <?php
        while($f=mysqli_fetch_array($res)){
?>    
         <tr>
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
        <form method="post" action="view.php">
        <input type="hidden" value="<?php echo $f[0]?>" name="id" >
        <button class="btn btn-lg btn-outline-dark" >VIEW MORE</button>
        </form>
        </td>
         
        
        </tr>
      
<?php       
    
}
}

else{
    
    echo "near",$g;
$q="select * from schemes where( gender='$g' OR caste='$c' )AND states='$s';";
$res=mysqli_query($con,$q);
if(mysqli_num_rows($res)==0){
    ?>
    <h3 class="cen">NO result</h3>
    <?php
}
else{    
    ?>
    
  <div class="container-fluid cen">
   <h3 >SCHEMES</h3>
    <div class="sp">
    <table  class="table-striped">
        <th>
           ID
        </th>
        
        <th>
            SCHEME NAME
        </th>
        <th>
            STATE
        </th>
        
        <th>
           VIEW MORE
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
        <form method="post" action="view.php">
        <input type="hidden" value="<?php echo $f[0]?>" name="id" >
        <button class="btn btn-lg btn-outline-dark" >VIEW MORE</button>
        </form>
        </td>
         
        
        </tr>
      
       
<?php
}    
   
}
}
?>      
    
   
   
    </table>

</body>
</html>






























<?php 
if(isset($_POST['but'])){
$g=$_POST['gen'];
$c=$_POST['cas'];
$s=$_POST['sta'];
    
echo $s;
    echo "<h1>button clicked</h1>";
    echo $g;
    echo $c;
    

}
else{
    echo "else executed";
    $g="ALL";
    $c="ALL";
    $s="ALL";
}
?>




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
            margin-left:350px;
        }
    </style>

</head>
<body>
  <form method="post" action="schemesearch.php">
  <div class="container">
  <div class="row" >
   <div class="form-group">
    gender:
    <select name="gen"  class="form-control" value="ALL" >
        <option value="ALL" >ALL</option>
        <option value="male">MALE</option>        <option value="female">FEMALE</option>
        
        
    </select>
    caste:
    
    <select name="cas"  class="form-control" value="ALL" >
        <option value="ALL" >ALL</option>
        <option value="oc">OC</option>
        <option value="bc">BC</option>
        <option value="mbc">MBC</option>
        <option value="sc/st">SC/ST</option>
        
        
        
    </select>
    
    state:
    <input type="text" class="form-control"  name="sta"   value="ALL">
  
      </div>
    
    
    </div>
    <button type="submit" class="btn-lg btn-outline-dark" name="but" >search</button>
    
    </div>
    </form>
    
 <?php
       $con=mysqli_connect("localhost","root","","seva");

    echo "near",$g;
$q="select * from schemes where( gender='$g' OR caste='$c' )AND states='$s';";
$res=mysqli_query($con,$q);
if(mysqli_num_rows($res)==0){
    ?>
    <h3 class="cen">NO result</h3>
    <?php
}
else{    
    ?>
    
  <div class="container-fluid cen">
   <h3 >SCHEMES</h3>
    <div class="sp">
    <table  class="table-striped">
        <th>
           ID
        </th>
        
        <th>
            SCHEME NAME
        </th>
        <th>
            STATE
        </th>
        
        <th>
           VIEW MORE
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
        <form method="post" action="view.php">
        <input type="hidden" value="<?php echo $f[0]?>" name="id" >
        <button class="btn btn-lg btn-outline-dark" >VIEW MORE</button>
        </form>
        </td>
         
        
        </tr>
      
       
<?php
}    
   
}
?>      
    
   
   
    </table>

</body>
</html>