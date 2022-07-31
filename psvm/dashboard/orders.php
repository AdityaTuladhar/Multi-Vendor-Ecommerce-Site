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
    $delete_query = "DELETE FROM orders WHERE id=$id_to_delete";
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
    $statusId=$_GET["statusId"];
    $productId=$_GET["productId"];
    $userId=$_GET["userId"];
    $update_query = "UPDATE orders SET statusId='$statusId',productId='$productId', userId='$userId' WHERE id='$id'";
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

    $statusId=$_GET["statusId"];
    $productId=$_GET["productId"];
    $userId=$_GET["userId"];
    $insert_query = "INSERT INTO orders(statusId,productId,userId) VALUES ('$statusId','$productId','$userId')";
    mysqli_query($insert_con ,$insert_query);
  }

if (isset($_GET['save_add'])) {
    insertEntryFunction();
}


$query = "SELECT * FROM orders";
$result = mysqli_query($con,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SHREEYSW</title>
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
          <li class="dropdown">
            <a href="products.php" class="nav-link"><i data-feather="user"></i><span>Products</span></a>
          </li>
          <li class="dropdown">
            <a href="vendors.php" class="nav-link"><i data-feather="user"></i><span>Vendors</span></a>
          </li>
          <li class="dropdown active">
            <a href="orders.php" class="nav-link"><i data-feather="user"></i><span>Orders</span></a>
          </li>
            </ul>
          </aside>
        </div>

        <!-- Main Content -->
        <div class="main-content">
          <section class="section">
            <div class="row ">
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <!-- First Card -->
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Card</h5>
                            <h2 class="mb-3 font-18">258</h2>
                            <p class="mb-0"><span class="col-green">10%</span> Increase</p>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/1.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- First Card Ends -->
              </div>
              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <!-- Second Card  -->
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15"> Card</h5>
                            <h2 class="mb-3 font-18">1,287</h2>
                            <p class="mb-0"><span class="col-orange">09%</span> Decrease</p>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/2.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Second Card Ends -->
              </div>

              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <!-- Third Card -->
                <div class="card">
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Card</h5>
                            <h2 class="mb-3 font-18">128</h2>
                            <p class="mb-0"><span class="col-green">18%</span>
                            Increase</p>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/3.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Third Card Ends -->
              </div>

              <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                  <!-- Fourth Card -->
                  <div class="card-statistic-4">
                    <div class="align-items-center justify-content-between">
                      <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                          <div class="card-content">
                            <h5 class="font-15">Card</h5>
                            <h2 class="mb-3 font-18">697</h2>
                            <p class="mb-0"><span class="col-green">42</span> Increase</p>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                          <div class="banner-img">
                            <img src="assets/img/banner/4.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Fourth Card Ends -->
                  <!-- ....................................... -->
                </div>
              </div>
            </div>

            <!-- .............................................. -->
            <!-- Main Data Table  -->
            <!-- .............................................. -->

            <div class="row">
              <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Orders Data</h4>
                  </div>
                  
                  <!-- Table Data -->
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Status ID</th>
                            <th>Product ID</th>
                            <th>User ID</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                                if (isset($_GET['add_entry']) && ($_GET['add_entry']=='true')){
                                    echo "<tr>
                                        <td></td>
                                        <td>
                                          <select id='addstatusid'>";
                                    $select_query = "SELECT * FROM order_status";
                                    $select_result = mysqli_query($con,$select_query);
                                    while($row=mysqli_fetch_assoc($select_result)){
                                      echo "<option value=".$row['id'].">".$row['status']."</option>";
                                    }
                                    echo "</select>
                                        </td>
                                        <td>
                                          <select id='addproductid'>";
                                    $select_query = "SELECT * FROM products";
                                    $select_result = mysqli_query($con,$select_query);
                                    while($row=mysqli_fetch_assoc($select_result)){
                                      echo "<option value=".$row['id'].">".$row['name']."</option>";
                                    }
                                    echo "</select>
                                        </td>
                                        <td>
                                          <select id='adduserid'>";
                                    $select_query = "SELECT * FROM user_info";
                                    $select_result = mysqli_query($con,$select_query);
                                    while($row=mysqli_fetch_assoc($select_result)){
                                      echo "<option value=".$row['id'].">".$row['name']."</option>";
                                    }
                                    echo "</select>
                                        </td>
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
                                        <select id='statusid".$row['id']."'>";

                                        $select_query = "SELECT * FROM order_status";
                                        $select_result = mysqli_query($con,$select_query);
                                        while($row_inner=mysqli_fetch_assoc($select_result)){
                                          echo "<option value=".$row_inner['id'];
                                          if ($row['statusId']==$row_inner['id']){
                                            echo " selected ";
                                          }
                                          echo ">".$row_inner['status']."</option>";
                                        }
                                        echo "</select>
                                        </td>
                                        <td>
                                        <select id='productid".$row['id']."'>";

                                        $select_query2 = "SELECT * FROM products";
                                        $select_result2 = mysqli_query($con,$select_query2);
                                        while($row_inner2=mysqli_fetch_assoc($select_result2)){
                                          echo "<option value=".$row_inner2['id'];
                                          if ($row['productId']==$row_inner2['id']){
                                            echo " selected ";
                                          }
                                          echo ">".$row_inner2['name']."</option>";
                                        }
                                        echo "</select>
                                        </td>
                                        <td>
                                        <select id='userid".$row['id']."'>";

                                        $select_query3 = "SELECT * FROM user_info";
                                        $select_result3 = mysqli_query($con,$select_query3);
                                        while($row_inner3=mysqli_fetch_assoc($select_result3)){
                                          echo "<option value=".$row_inner3['id'];
                                          if ($row['userId']==$row_inner3['id']){
                                            echo " selected ";
                                          }
                                          echo ">".$row_inner3['name']."</option>";
                                        }
                                        echo "</select>
                                        </td>
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
                                        <td>".$row['statusId']."</td>
                                        <td>".$row['productId']."</td>
                                        <td>".$row['userId']."</td>
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
            window.location.href="orders.php?id_to_edit="+id;
        }

        function onDelete(id){
            window.location.href="orders.php?id_to_delete="+id;
        }

        function onAdd(){
            window.location.href="orders.php?add_entry=true";
        }
        
        function onSaveAdd(){
            var statusId = document.getElementById("addstatusid").value;
            var productId = document.getElementById("addproductid").value;
            var userId = document.getElementById("adduserid").value;

            window.location.href="orders.php?save_add=true&statusId="+statusId+"&productId="+productId+"&userId="+userId;
        }

        function onSaveEdit(id){
            var statusId = document.getElementById("statusid"+id).value;
            var productId = document.getElementById("productid"+id).value;
            var userId = document.getElementById("userid"+id).value;

            window.location.href="orders.php?id_to_save="+id+"&statusId="+statusId+"&productId="+productId+"&userId="+userId;
        }
    </script>
</body>


  </html>