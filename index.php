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
                <a href=""><img class="logo-tabib" src="static/picture/download.png" alt=""></a>
                <a href=""><img class="brand-title" src="static/picture/logo.png" alt=""></a>
            </div>
        </div>
        <!-- End logo components -->


        <!-- start section sidebar -->
        <aside class="left-panel nicescroll-box">
            <nav class="navigation">
                <ul class="list-unstyled main-menu">
                    <li class="has-submenu active">
                        <a href="index.php">
                            <i class="fas fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="has-submenu">
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
                <div class="row page-titles mx-0">
                    <div class="col-lg-12 p-md-0">
                        <h4 class="text-primary">Good morning <span class="names">Dr Roberts</span></h4>
                    </div>
                </div>
                <div class="new-patients main_container">
                    <div class="row">
                        <div class="col-sm-6 col-xl-3 col-lg-6">
                            <div class="widget card card-primary">
                                <div class="card-body">
                                    <div class="media text-center">
                                        <span>
                                            <i class="fas fa-calendar-check fa-2x"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="text-white">Donations</span>
                                            <h3 class="mb-0 text-white">234</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3 col-lg-6">
                            <div class="widget card card-primary">
                                <div class="card-body">
                                    <div class="media text-center">
                                        <span>
                                            <i class="fas fa-user-nurse fa-2x"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="text-white">Patients</span>
                                            <h3 class="mb-0 text-white">400</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3 col-lg-6">
                            <div class="widget card card-primary">
                                <div class="card-body">
                                    <div class="media text-center">
                                        <span>
                                            <i class="fas fa-user-plus fa-2x"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="text-white">Waiting</span>
                                            <h3 class="mb-0 text-white">572</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3 col-lg-6">
                            <div class="widget card card-primary">
                                <div class="card-body">
                                    <div class="media text-center">
                                        <span>
                                            <i class="fas fa-database fa-2x"></i>
                                        </span>
                                        <div class="media-body">
                                            <span class="text-white">Total Patients</span>
                                            <h3 class="mb-0 text-white">6500</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h4 class="card-title">Donation List | 16 Aug 2024</h4>
                                </div>
                                
                                <!-- start section contentChatGPT -->
                                <head>
                                <style>
                                body {
                                    font-family: Arial, sans-serif;
                                    margin: 20px;
                                }
                                #chatbox {
                                    width: 100%;
                                    max-width: 1000px;
                                    margin: 0 auto;
                                    border: 1px solid #ccc;
                                    padding: 20px;
                                    border-radius: 10px;
                                    background-color: #f9f9f9;
                                }
                                #inputBox {
                                    width: 100%;
                                    height: 50px;
                                    padding: 10px;
                                    border: 1px solid #ccc;
                                    border-radius: 5px;
                                    font-size: 16px;
                                }
                                #submitButton {
                                    margin-top: 10px;
                                    padding: 10px 20px;
                                    border: none;
                                    background-color: #007bff;
                                    color: white;
                                    border-radius: 5px;
                                    cursor: pointer;
                                    font-size: 16px;
                                }
                                #responseBox {
                                    margin-top: 20px;
                                    padding: 10px;
                                    border: 1px solid #ccc;
                                    border-radius: 5px;
                                    background-color: #fff;
                                    min-height: 100px;
                                    font-size: 16px;
                                }
                                </style>
                                </head>
                                <body>
                                    <div id="chatbox">
                                    <h2>Chat with GPT</h2>
                                    <textarea id="inputBox" rows="5" placeholder="Enter your message..."></textarea>
                                    <button id="submitButton">Send</button>
                                    <div id="responseBox"></div>
                                    </div>
                                    <script src="openai-test.js"></script>
                                </body>
                                <!-- end section contentChatGPT -->
        


                                <div class="card-body">
                                    <div class="table-responsive">
                                    <table id="example1" class="display">
                                    <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Age</th>
                                                    <th>Organ</th>
                                                    <th>Weight(Lb)</th>
                                                    <th>City</th>
                                                    <th>Blood Group</th>
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
                                                $sql = "SELECT * FROM donation_patients";
                                                $result = $conn->query($sql);
                                                // 输出数据到HTML表格
                                                if ($result->num_rows > 0) {
                                                    while($row = $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>". $row["ID"]. "</td>";
                                                        echo "<td>". $row["name"]. "</td>";
                                                        echo "<td>". $row["age"]. "</td>";
                                                        echo "<td>". $row["organ"]. "</td>";
                                                        echo "<td>". $row["weight"]. "</td>";
                                                        echo "<td>". $row["city"]. "</td>";
                                                        echo "<td>". $row["blood_group"]. "</td>";
                                                        echo "<td><a href='matching-patients.php' class='badge badge-primary'>Matching List</a></td>";
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
                </div>
            </div>
        </div>
        <!-- End section content -->


        <!-- start section footer -->
        <div class="footer">
            <div class="copyright">
                <p class="mb-0">Copyright &copy; 2021.Company name All rights reserved.<a target="_blank" href="https://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
            </div>
        </div>
        <!-- End section footer -->


    </div>






    <!-- JQuery v3.5.1 -->
    <script src="static/js/jquery.min.js"></script>

    <!-- popper js -->
    <script src="static/js/popper.min.js"></script>

    <!-- Bootstrap -->
    <script src="static/js/bootstrap.js"></script>

    <!-- Moment -->
    <script src="static/js/moment.min.js"></script>

    <!-- Date Range Picker -->
    <script src="static/js/daterangepicker.min.js"></script>

    <!-- Datatable -->
    <script src="static/js/jquery.dataTables.min.js"></script>
    <script src="static/js/init-tdatatable.js"></script>

    <!-- Chart js -->
    <script src="static/js/Chart.min.js"></script>
    <script src="static/js/charts-custom.js"></script>

    <!-- Main Custom JQuery -->
    <script src="static/js/toggleFullScreen.js"></script>
    <script src="static/js/main.js"></script>

</body>

</html>