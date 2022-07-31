<?php
$con = mysqli_connect("localhost", "root", "", "ecommerce");
//products
$q = 'select * from products';
$result = mysqli_query($con, $q);
$d = [];
while ($data = mysqli_fetch_assoc($result)) {
    $d[] = $data;
}
//echo json_encode($d);
$dd = ['d' => 'fd', 'ds' => 'we'];
echo json_encode($d);

//echo ($s[0] . ".name");
//echo $e;

//echo 1;
