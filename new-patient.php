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
                            <li><a href="">New Patient</a></li>
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
                <div class="new-patients main_container">
                    <div class="row page-titles mx-0">
                        <div class="col-sm-6 p-md-0">
                            <div class="welcome-text">
                                <h4 class="text-primary">New Patient</h4>
                            </div>
                        </div>
                        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active"><a href="javascript:;">New Patient</a></li>
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Personal Information</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="form-group row widget-3">
                                                        <div class="col-lg-10">
                                                            <div class="form-input">
                                                                <label class="labeltest" for="file-ip-1">
                                                                    <span> Drop image here or click to upload. </span>
                                                                </label>
                                                                <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
                                                                <div class="preview">
                                                                    <img id="file-ip-1-preview" src="https://www.17sucai.com/preview/776298/2021-08-30/tabib/new-patient.html" alt="img">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="First Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Last name">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Mobile No.">
                                                    </div>
                                                </div>
                                                <div class="col-xl-4">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" placeholder="Birthday">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <select class="form-control form-select">
                                                            <option> Marital status </option>
                                                            <option>Married</option>
                                                            <option>Unmarried</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <select class="form-control form-select">
                                                            <option>Sex</option>
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
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
                                                        <textarea class="form-control" placeholder="Address" rows="4"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8">
                                                    <div class="form-group">
                                                        <textarea class="form-control" placeholder="Patient History" rows="4"></textarea>
                                                    </div>
                                                    <div class="form-group text-right">
                                                        <button type="submit" class="btn btn-primary float-end">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Medical Information</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label class="form-label">known diseases</label>
                                                        <select class="form-control form-select">
                                                            <option>Type 1 Diabetes</option>
                                                            <option>Multiple Sclerosis</option>
                                                            <option>Rheumatoid Arthritis</option>
                                                            <option>Allergies & Asthma</option>
                                                        </select>
                                                        <div class="col-lg-12">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Period</label>
                                                        <input class="form-control" type="text" placeholder="Period">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label class="form-label"> Family History </label>
                                                        <select class="form-control form-select">
                                                            <option>Mother</option>
                                                            <option>Father</option>
                                                            <option>Brother</option>
                                                            <option>Sister</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Diseases</label>
                                                        <select class="form-control form-select">
                                                            <option>Type 1 Diabetes</option>
                                                            <option>Multiple Sclerosis</option>
                                                            <option>Rheumatoid Arthritis</option>
                                                            <option>Allergies & Asthma</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group text-right">
                                                <button type="submit" class="btn btn-primary float-end ">Save</button>
                                            </div>
                                        </form>
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