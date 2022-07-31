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
    $delete_query = "DELETE FROM vendor_info WHERE id=$id_to_delete";
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
    $name=$_GET["name"];
    $email=$_GET["email"];
    $phone=$_GET["phone"];
    $address=$_GET["address"];
    $update_query = "UPDATE vendor_info SET name='$name', email='$email', phone='$phone', address='$address' WHERE id='$id'";
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

    $name=$_GET["name"];
    $email=$_GET["email"];
    $phone=$_GET["phone"];
    $address=$_GET["address"];
    $insert_query = "INSERT INTO vendor_info(name,email,phone,address) VALUES ('$name','$email','$phone','$address')";
    mysqli_query($insert_con ,$insert_query);
  }

if (isset($_GET['save_add'])) {
    insertEntryFunction();
}


$query = "SELECT * FROM vendor_info";
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
          <li class="dropdown">
            <a href="products.php" class="nav-link"><i data-feather="user"></i><span>Products</span></a>
          </li>
          <li class="dropdown active">
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
                    <h4>Vendors</h4>
                  </div>
                  
                  <!-- Table Data -->
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                                if (isset($_GET['add_entry']) && ($_GET['add_entry']=='true')){
                                    echo "<tr>
                                        <td></td>
                                        <td><input type='text' id='addname'></td>
                                        <td><input type='text' id='addemail'></td>
                                        <td><input type='text' id='addphone'></td>
                                        <td><input type='text' id='addaddress'></td>
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
                                        <td><input type='text' id='name".$row['id']."' value='".$row['name']."'></td>
                                        <td><input type='text' id='email".$row['id']."' value='".$row['email']."'></td>
                                        <td><input type='text' id='phone".$row['id']."' value='".$row['phone']."'></td>
                                        <td><input type='text' id='address".$row['id']."' value='".$row['address']."'></td>
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
                                        <td>".$row['name']."</td>
                                        <td>".$row['email']."</td>
                                        <td>".$row['phone']."</td>
                                        <td>".$row['address']."</td>
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
            window.location.href="vendors.php?id_to_edit="+id;
        }

        function onDelete(id){
            window.location.href="vendors.php?id_to_delete="+id;
        }

        function onAdd(){
            window.location.href="vendors.php?add_entry=true";
        }
        
        function onSaveAdd(){
            var name = document.getElementById("addname").value;
            var email = document.getElementById("addemail").value;
            var phone = document.getElementById("addphone").value;
            var address = document.getElementById("addaddress").value;

            window.location.href="vendors.php?save_add=true&name="+name+"&email="+email+"&phone="+phone+"&address="+address;
        }

        function onSaveEdit(id){
            var name = document.getElementById("name"+id).value;
            var email = document.getElementById("email"+id).value;
            var phone = document.getElementById("phone"+id).value;
            var address = document.getElementById("address"+id).value;

            window.location.href="vendors.php?id_to_save="+id+"&name="+name+"&email="+email+"&phone="+phone+"&address="+address;
        }
    </script>
</body>


  </html>