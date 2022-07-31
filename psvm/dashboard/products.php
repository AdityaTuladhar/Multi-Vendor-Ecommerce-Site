<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";
$con = new mysqli($servername,$username,$password,$dbname); 


function deleteEntryFunction($id_to_delete) {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ecommerce";
  $delete_con = new mysqli($servername,$username,$password,$dbname); 
  $delete_query = "DELETE FROM products WHERE id=$id_to_delete";
  mysqli_query($delete_con ,$delete_query);
}

if (isset($_GET['id_to_delete'])) {
  deleteEntryFunction($_GET['id_to_delete']);
}

function updateEntryFunction() {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ecommerce";
  $update_con = new mysqli($servername,$username,$password,$dbname); 

  $id=$_GET["id_to_save"];
  $category_id=$_GET["category_id"];
  $vendor_id=$_GET["vendor_id"];
  $name=$_GET["name"];
  $price=$_GET["price"];
  $details=$_GET["details"];
  $image_url=$_GET["image_url"];
  $update_query = "UPDATE products SET category_id='$category_id',vendor_id='$vendor_id', name='$name', price='$price', details='$details',image_url='$image_url' WHERE id='$id'";
  mysqli_query($update_con ,$update_query);
}

if (isset($_GET['id_to_save'])) {
  updateEntryFunction();
}

function insertEntryFunction() {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ecommerce";
  $insert_con = new mysqli($servername,$username,$password,$dbname); 

  $category_id=$_GET["category_id"];
  $vendor_id=$_GET["vendor_id"];
  $name=$_GET["name"];
  $price=$_GET["price"];
  $details=$_GET["details"];
  $image_url=$_GET["image_url"];
  $insert_query = "INSERT INTO products(category_id,vendor_id,name,price,details,image_url) VALUES ('$category_id','$vendor_id','$name','$price','$details','$image_url')";
  mysqli_query($insert_con ,$insert_query);
}

if (isset($_GET['save_add'])) {
  insertEntryFunction();
}


$query = "SELECT * FROM products";
$result = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>E-Commerce</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  
  <style type="text/css">
    .main-sidebar {
      background-color: #35363a;
      /*color: white;*/
    }
    .main-sidebar .sidebar-menu li a span {
     color: white;
   }
   .light-sidebar .main-sidebar .sidebar-menu li.active a {
    background-color: #3f4044;
  }
  .theme-white .navbar {
    background-color: #2a2b2ffc;
    
  }
</style>
</head>

<body>
  <!-- <div class="loader"></div> -->
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
             collapse-btn"> <i data-feather="align-justify"></i></a></li>
             
           </a></li>
          
        </ul>
      </div>

      <ul class="navbar-nav navbar-right">
        <li class="dropdown"><a href="#" data-toggle="dropdown"
          class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/user.png"
          class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
          <div class="dropdown-menu dropdown-menu-right pullDown">
            <div class="dropdown-title">Hello Admin</div>
            <div class="dropdown-divider"></div>
            <a href="auth-login.html" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
              Logout
            </a>
          </div>
        </li>
      </ul>
    </nav>
    <div class="main-sidebar sidebar-style-2">
      <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
          <a href="index.html"> <img alt="image" src="assets/img/a.png" class="header-logo" /> <span
            class="logo-name" style="color:white;">E-Commerce</span>
          </a>
        </div>
        <ul class="sidebar-menu">
          <li class="menu-header">Main</li>
          <li class="dropdown">
            <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
          </li>
          <li class="dropdown">
            <a href="admin_trans_list.php" class="nav-link"><i data-feather="user"></i><span>Users</span></a>
          </li>
          <li class="dropdown">
            <a href="product_category.php" class="nav-link"><i data-feather="user"></i><span>Product Category</span></a>
          </li>
          <li class="dropdown active">
            <a href="products.php" class="nav-link"><i data-feather="user"></i><span>Products</span></a>
          </li>
          <li class="dropdown">
            <a href="vendors.php" class="nav-link"><i data-feather="user"></i><span>Vendors</span></a>
          </li>
          <li class="dropdown">
            <a href="orders.php" class="nav-link"><i data-feather="user"></i><span>Orders</span></a>
          </li>
        </ul>
      </aside>
    </div>

    <!-- Main Content -->
    <div class="main-content">
      <section class="section">

        <!-- .............................................. -->
        <!-- Main Data Table  -->
        <!-- .............................................. -->

        <div class="row">
          <div class="col-md-12 col-lg-12 col-xl-12">
            <div class="card">
              <div class="card-header">
                <h4>Products Data</h4>
              </div>

              <!-- Table Data -->
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Category ID</th>
                        <th>Vendor ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Details</th>
                        <th>Image</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (isset($_GET['add_entry']) && ($_GET['add_entry']=='true')){
                        echo "<tr>
                        <td></td>
                        <td>
                        <select id='addcategoryid'>";
                        $select_query = "SELECT * FROM product_categories";
                        $select_result = mysqli_query($con,$select_query);
                        while($row=mysqli_fetch_assoc($select_result)){
                          echo "<option value=".$row['id'].">".$row['category']."</option>";
                        }
                        echo "</select>
                        </td>
                        <td>
                        <select id='addvendorid'>";
                        $select_query = "SELECT * FROM vendor_info";
                        $select_result = mysqli_query($con,$select_query);
                        while($row=mysqli_fetch_assoc($select_result)){
                          echo "<option value=".$row['id'].">".$row['name']."</option>";
                        }
                        echo "</select>
                        </td>
                        <td><input type='text' id='addname'></td>
                        <td><input type='text' id='addprice'></td>
                        <td><input type='text' id='adddetails'></td>
                        <td><input type='text' id='addimageurl'></td>
                        <td>
                        <!-- Call to action buttons -->
                        <ul class='list-inline m-0'>
                        <li class='list-inline-item'>
                        <button class='btn btn-success btn-sm rounded-0' type='button' onclick='onSaveAdd()' data-toggle='tooltip' data-placement='top' title='Save'><i class='fa fa-edit'></i></button>
                        </li>
                        </ul>
                        </td>
                        </tr>";
                      }
                      while($row=mysqli_fetch_assoc($result)){
                        if (isset($_GET['id_to_edit']) && ($_GET['id_to_edit'] == $row['id'])) {
                          echo "<tr>
                          <td>".$row['id']."</td>
                          <td>
                          <select id='categoryid".$row['id']."'>";

                          $select_query = "SELECT * FROM product_categories";
                          $select_result = mysqli_query($con,$select_query);
                          while($row_inner=mysqli_fetch_assoc($select_result)){
                            echo "<option value=".$row_inner['id'];
                            if ($row['category_id']==$row_inner['id']){
                              echo " selected ";
                            }
                            echo ">".$row_inner['category']."</option>";
                          }
                          echo "</select>
                          </td>
                          <td>
                          <select id='vendorid".$row['id']."'>";

                          $select_query2 = "SELECT * FROM vendor_info";
                          $select_result2 = mysqli_query($con,$select_query2);
                          while($row_inner2=mysqli_fetch_assoc($select_result2)){
                            echo "<option value=".$row_inner2['id'];
                            if ($row['vendor_id']==$row_inner2['id']){
                              echo " selected ";
                            }
                            echo ">".$row_inner2['name']."</option>";
                          }
                          echo "</select>
                          </td>
                          <td><input type='text' id='name".$row['id']."' value='".$row['name']."'></td>
                          <td><input type='text' id='price".$row['id']."' value='".$row['price']."'></td>
                          <td><input type='text' id='details".$row['id']."' value='".$row['details']."'></td>
                          <td><input type='text' id='imageurl".$row['id']."' value='".$row['image_url']."'></td>
                          <td>
                          <!-- Call to action buttons -->
                          <ul class='list-inline m-0'>
                          <li class='list-inline-item'>
                          <button class='btn btn-success btn-sm rounded-0' type='button' onclick='onSaveEdit(".$row['id'].")' data-toggle='tooltip' data-placement='top' title='Save'><i class='fa fa-edit'></i></button>
                          </li>
                          </ul>
                          </td>
                          </tr>";
                        }
                        else{
                          echo "<tr>
                          <td>".$row['id']."</td>
                          <td>".$row['category_id']."</td>
                          <td>".$row['vendor_id']."</td>
                          <td>".$row['name']."</td>
                          <td>".$row['price']."</td>
                          <td>".$row['details']."</td>
                          <td>".$row['image_url']."</td>
                          <td>
                          <!-- Call to action buttons -->
                          <ul class='list-inline m-0'>
                          <li class='list-inline-item'>
                          <button class='btn btn-primary btn-sm rounded-0' type='button' onclick='onAdd()' data-toggle='tooltip' data-placement='top' title='Add'><i class='fa fa-table'></i></button>
                          </li>
                          <li class='list-inline-item'>
                          <button class='btn btn-success btn-sm rounded-0' type='button' onclick='onEdit(".$row['id'].")' data-toggle='tooltip' data-placement='top' title='Edit'><i class='fa fa-edit'></i></button>
                          </li>
                          <li class='list-inline-item'>
                          <button class='btn btn-danger btn-sm rounded-0' type='button' onclick='onDelete(".$row['id'].")' data-toggle='tooltip' data-placement='top' title='Delete'><i class='fa fa-trash'></i></button>
                          </li>
                          </ul>
                          </td>
                          </tr>";
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- Table Data ends -->

            </div>
          </div>
        </div>

        <!-- Table ends -->

      </section>

    </div>
    <footer class="main-footer">
      <div class="footer-left">
        <span>&copy; 2022 Ajashala Bajracharya || All Right Reserve. </span>
      </div>
      <div class="footer-right">
      </div>
    </footer>
  </div>
</div>
<!-- General JS Scripts -->
<script src="assets/js/app.min.js"></script>
<!-- JS Libraies -->
<script src="assets/bundles/datatables/datatables.min.js"></script>
<script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
<!-- Page Specific JS File -->
<script src="assets/js/page/index.js"></script>
<script src="assets/js/page/datatables.js"></script>
<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="assets/js/custom.js"></script>
<script type="text/javascript">
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });
  function onEdit(id){
    window.location.href="products.php?id_to_edit="+id;
  }

  function onDelete(id){
    window.location.href="products.php?id_to_delete="+id;
  }

  function onAdd(){
    window.location.href="products.php?add_entry=true";
  }

  function onSaveAdd(){
    var category_id = document.getElementById("addcategoryid").value;
    var vendor_id = document.getElementById("addvendorid").value;
    var name = document.getElementById("addname").value;
    var price = document.getElementById("addprice").value;
    var details = document.getElementById("adddetails").value;
    var image_url = document.getElementById("addimageurl").value;

    window.location.href="products.php?save_add=true&category_id="+category_id+"&vendor_id="+vendor_id+"&name="+name+"&price="+price+"&details="+details+"&image_url="+image_url;
  }

  function onSaveEdit(id){
    var category_id = document.getElementById("categoryid"+id).value;
    var vendor_id = document.getElementById("vendorid"+id).value;
    var name = document.getElementById("name"+id).value;
    var price = document.getElementById("price"+id).value;
    var details = document.getElementById("details"+id).value;
    var image_url = document.getElementById("imageurl"+id).value;

    window.location.href="products.php?id_to_save="+id+"&category_id="+category_id+"&vendor_id="+vendor_id+"&name="+name+"&price="+price+"&details="+details+"&image_url="+image_url;
  }
</script>
</body>


</html>