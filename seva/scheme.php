<?php
$id=$_POST['sid'];

$name=$_POST['sname'];
$limit=$_POST['climit'];
$fee=$_POST['regfee'];
$lage=$_POST['la'];
$hage=$_POST['ha'];
$np=$_POST['nfp'];
$caste=$_POST['cas'];
$gender=$_POST['g'];
$sta=$_POST['sta'];
$des=$_POST['des'];
echo $des;
echo $np;
$con=mysqli_connect("localhost","root","","seva");
if($con){
    echo "connected succesfuuly";
}
$v="select * from schemes";
$k=mysqli_query($con,$v);
while($re=mysqli_fetch_array($k)){
    echo $re[0];
    echo $re[1];
}

$q="insert into schemes(sid,sname,climit,regfee,lage,hage,noofperson,caste,gender,states,description) VALUES('$id','$name','$limit','$fee','$lage','$hage','$np','$caste','$gender','$sta','$des');";
$res=mysqli_query($con,$q);
if($res){
    echo "succesfull";
}
else{
    echo "error";
}
    

?>