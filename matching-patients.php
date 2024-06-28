<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tabib Apps web | Admin Dashboard Template</title>
    <!-- Base Styling  -->
    <link rel="stylesheet" href="static/css/fonts.css">
    <link rel="stylesheet" href="static/css/style.css">
</head>

<body>
    <div id="main-wrapper" class="show">


        <!-- start logo components -->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.php"> <img class="logo-tabib" src="static/picture/download.png" alt=""></a>
                <a href="index.php"><img class="brand-title" src="static/picture/logo.png" alt=""></a>
            </div>
        </div>
        <!-- End logo components -->


        <!-- start section sidebar -->
        <aside class="left-panel nicescroll-box">
            <nav class="navigation">
                <ul class="list-unstyled main-menu">
                    <li class="has-submenu">
                        <a href="index.php">
                            <i class="fas fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="has-submenu active">
                        <a href="#" class="has-arrow mm-collapsed">
                            <i class="fas fa-users"></i>
                            <span class="nav-label">Patients</span>
                        </a>
                        <ul class="list-unstyled mm-collapse">  
                            <li><a href="donation-patients.php">Donation Patient</a></li>
                            <li><a href="waiting-patients.php">Waiting Patients</a></li>
                            <li><a href="new-patient.php">New Patient</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#" class="has-arrow mm-collapsed">
                            <i class="fas fa-user-md"></i>
                            <span class="nav-label">Doctors</span>
                        </a>
                        <ul class="list-unstyled mm-collapse">
                            <li><a href="add-doctor.html">Add Doctor</a></li>
                            <li><a href="doctor-list.html">All Doctors</a></li>
                            <li> <a href="doctor-profile.html">Doctors Profile</a> </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="sidebar-widgets">
                <div class="top-sidebar box-shadow mx-25 m-b-30 p-b-20 text-center">
                        <img src="static/picture/appointement.svg" class="side-img" alt="img">
                </div>
                <div class="copyright text-center">
                    <p class="mb-0"> Organ Transplant</p>
                </div>
            </div>
        </aside>
        <!-- End section sidebar -->


        <!-- start section header -->
        <div class="header">
            <header class="top-head container-fluid">
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>  
                </div>
                <div class="card-header">
                    <h4 class="card-title">Organ transplant patient management system </h4>
                <div class="header-right">
                    <div class="fullscreen notification_dropdown">
                        <div class="full">
                            <a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="fas fa-expand"></i>
                            </a>
                        </div>
                    </div>
                    <div class="my-account-wrapper">
                        <div class="account-wrapper">
                            <div class="account-control">
                                <a class="login header-profile" href="#" title="Sign in">
                                    <div class="header-info">
                                        <span>Dr Roberts</span>
                                        <small>Admin</small>
                                    </div>
                                    <img src="static/picture/client.jpg" alt="people">
                                </a>
                                <div class="account-dropdown-form dropdown-container">
                                    <div class="form-content">
                                        <a href="doctor-settings.html">
                                            <i class="far fa-user"></i>
                                            <span class="ml-2">Profile</span>
                                        </a>
                                        <a href="#">
                                            <i class="far fa-envelope"></i>
                                            <span class="ml-2">Inbox</span>
                                        </a>
                                        <a href="page-login.html">
                                            <i class="fas fa-sign-in-alt"></i>
                                            <span class="ml-2">Logout </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!-- End section header -->


        <!-- start section content -->
        <div class="content-body">
            <div class="warper container-fluid">
                <div class="all-patients main_container">
                    <div class="row page-titles mx-0">
                        <div class="col-sm-6 p-md-0">
                            <div class="welcome-text">
                                <h4 class="text-primary">Patients</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active"><a href="javascript:;">Donation Patients</a></li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header fix-card">
                                    <div class="row">
                                        <div class="col-8">
                                            <h4 class="card-title"> Matching List </h4>
                                        </div>
                                        <div class="col-4 float-end">
                                            <a href="javascript:;" class="btn btn-primary float-end">Add Patient</a>     
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <style>
                                    #example4 td:nth-child(3) {
                                        color: blue;
                                    }
                                    </style>
                                    <div class="table-responsive">
                                        <table id="example4" class="display">
                                            <thead>
                                                <tr>
                                                    <th>Rank</th>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Age</th>
                                                    <th>Sex</th>
                                                    <th>Weight(Lb)</th>
                                                    <th>Infection(%)</th>
                                                    <th>Rejection(%)</th>
                                                    <th>Estimated survival time(Year)</th>
                                                    <th>City</th>
                                                    <th>Blood Group</th>
                                                    <th>Patient History</th>
                                                    <th>Mobile No.</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $servername = "localhost"; // MySQL服务器地址
                                                $username = "root"; // MySQL用户名
                                                $password = ""; // MySQL密码
                                                $dbname = "test"; // 数据库名称
                                                // 创建连接
                                                $conn = new mysqli($servername, $username, $password, $dbname);
                                                if ($conn->connect_error) {
                                                    die("Connection failed: " . $conn->connect_error);
                                                } 
                                                // 查询患者信息
                                                $sql = "SELECT * FROM matching_list";
                                                $result = $conn->query($sql);
                                                // 输出数据到HTML表格
                                                if ($result->num_rows > 0) {
                                                    while($row = $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>". $row["rank"]. "</td>";
                                                        echo "<td>". $row["ID"]. "</td>";
                                                        echo "<td>". $row["name"]. "</td>";
                                                        echo "<td>". $row["age"]. "</td>";
                                                        echo "<td>". $row["sex"]. "</td>";
                                                        echo "<td>". $row["weight"]. "</td>";
                                                        echo "<td>". $row["infection"]. "</td>";
                                                        echo "<td>". $row["rejection"]. "</td>";
                                                        echo "<td>". $row["estimated_survival_time"]. "</td>";
                                                        echo "<td>". $row["city"]. "</td>";
                                                        echo "<td>". $row["blood_group"]. "</td>";
                                                        echo "<td>". $row["patient_history"]. "</td>";
                                                        echo "<td>". $row["mobile"]. "</td>";
                                                        echo "<td><a class='mr-4 vue'><span class='fa fa-eye fa-lg' aria-hidden='true'style='color: blue;'></span></a></td>";
                                                        echo "</tr>";
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='9'>0 results</td></tr>";
                                                }
                                                $conn->close();
                                                ?>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                       
        <!-- End section content -->


        <!-- start section footer -->
        <div class="footer ">
            <div class="copyright ">
                <p class="mb-0">Copyright &copy; 2021.Company name All rights reserved.<a target="_blank" href="https://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
            </div>
        </div>
        <!-- End section footer -->


    </div>
   <!-- Show data patient -->
   <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <!-- <div > -->
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel"><alt="">Patient Details</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="insertHere"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- End Show data patient -->


<!-- Modal -->
<div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="modal-title-edit-row" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title-edit-row">Angelica Ramos</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="basic-form">
                            <form>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="form-group row widget-3">
                                            <div class="col-lg-12">
                                                <div class="form-input">
                                                    <label class="labeltest" for="file-ip-1">
                                                        <span> Drop image here or click to upload. </span>
                                                    </label>
                                                    <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
                                                    <div class="preview">
                                                        <img id="file-ip-1-preview" src="https://www.17sucai.com/preview/776298/2021-08-30/tabib/all-patients.html" alt="img">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" placeholder="Last name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" placeholder="Mobile No.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Birthday">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <select class="form-control form-select">
                                                    <option> Marital status </option>
                                                    <option>Married</option>
                                                    <option>Unmarried</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <select class="form-control form-select">
                                                    <option>Sex</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <select class="form-control form-select">
                                                    <option>Blood Group</option>
                                                    <option>A+</option>
                                                    <option>A-</option>
                                                    <option>B+</option>
                                                    <option>B-</option>
                                                    <option>O+</option>
                                                    <option>O-</option>
                                                    <option>AB+</option>
                                                    <option>AB-</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4"></div>
                                    <div class="col-xl-4">
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" placeholder="Patient Weight">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <input type="text" class="form-control" placeholder="Patient Height">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="form-group">
                                            <div class="col-lg-12">
                                            </div>
                                            <textarea class="form-control" placeholder="Address" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Patient History" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!--End Modal -->



    <!-- JQuery v3.5.1 -->
    <script src="static/js/jquery.min.js"></script>

    <!-- popper js -->
    <script src="static/js/popper.min.js"></script>

    <!-- Bootstrap -->
    <script src="static/js/bootstrap.min.js"></script>

    <!-- Moment -->
    <script src="static/js/moment.min.js"></script>

    <!-- Date Range Picker -->
    <script src="static/js/daterangepicker.min.js"></script>

    <!-- Datatable -->
    <script src="static/js/jquery.dataTables.min.js"></script>
    <script src="static/js/init-tdatatable.js"></script>

    <!-- Main Custom JQuery -->
    <script src="static/js/toggleFullScreen.js"></script>
    <script src="static/js/main.js"></script>

</body>

</html>