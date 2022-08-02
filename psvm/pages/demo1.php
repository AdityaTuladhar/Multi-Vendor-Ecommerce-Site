
<?php

$con = mysqli_connect("localhost", "root", "", "ecommerce");
//products
$q = "select * from products where name like '%".$_POST['data']."%'";
$result = mysqli_query($con, $q);
$d=[];
while($data=mysqli_fetch_assoc($result)){
    $d[]= $data;
}
echo json_encode($d);