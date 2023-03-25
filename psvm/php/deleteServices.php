 <?php 
 include('../config.php');
 $id=$_GET['id'];

 $query="delete from services_tbl where id=$id";
 $result=mysqli_query($con,$query);
 $row=mysqli_fetch_assoc($result);

 if($result)
 {
 	echo "<script> alert('Data Deleted Successfull'); </script>";
 	header("Location:../dashboard/pages/services.php");
 }
 else
 {
 	echo"Error Deleting Data"."-- ".mysqli_error($con);
 }
 mysqli($con);
 ?>
