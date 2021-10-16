<?php include('server.php') ?>
<!DOCTYPE html>

<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.php">
                   <!--  <b class="logo-abbr"><img src="images/logo.png" alt=""> </b> -->

                   <b class="logo-abbr"><h4 style="color:white;" >MCL</h4> </b>
                    <!-- <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span> -->
                    <span class="logo-compact"><h4 style="color:white;"> Mirpur Club Ltd. </h4></span>
                    <span class="brand-title">
                        <!-- <img src="images/logo-text.png" alt=""> -->
                        <h3 style="color:white;" >Mirpur Club Ltd</h3>
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down   d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Bangla</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

       <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Member info</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="Member.php">Member Entry</a></li>
                            <li><a href="MemberTable.php">Member Table</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="Employee-register.php" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Employee Entry</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-grid menu-icon"></i><span class="nav-text">Running Cost Share</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="RcsOpt.php">RCS Operation</a></li>
                        </ul>
                    </li>
                   
                    <li>
                        <a href="Cheque-management.php" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Cheque Management</span>
                        </a>
                    </li>
                     <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i> <span class="nav-text">Cheque View</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="Allcheque.php">All Cheque</a></li>
                            <li><a href="todaycheque.php">Today's Chque</a></li>
                            <li><a href="tomorrowcheque.php">Tomorrows Cheque</a></li>
                            <li><a href="searchbydate.php">Search by Date</a></li>
                            <li><a href="searchbyadorrcs.php">Search by AD/RCS</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i> <span class="nav-text">Asset Deposit</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="AdOpt.php">Ad operation</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="Totaladrcs.php" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Total Ad and RCS</span>
                        </a>
                    </li>
                   <li>
                        <a href="RCS-Master.php" aria-expanded="false">
                            <i class="icon-badge menu-icon"></i><span class="nav-text">Monthly Procedure</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->    


            <div class="content-body">
             <div class="container-fluid"> 
                <div class="login-form-bg h-100">
                    <div class="container h-100">
                        <div class="row justify-content-center h-100">
                            <div class="col-xl-6">
                                <div class="form-input-content">
                                    <div class="card login-form mb-0">
                                        <div class="card-body pt-5">
                                            
                                                 <a class="text-center" href="index.php"> <h4>RCS Info</h4></a>
                    
                                            <form class="mt-5 mb-5 login-input" method="post" action="RCS-Master.php">
                                                <div class="form-group">
                                                     <a><h4 class="card-title">RCSMonth</h4></a>
                                                    <input type="month" class="form-control"  placeholder="RCSMonth" name="RCSMonth" required>
                                                </div>
                                               <!--  <div class="form-group">
                                                    <input type="year" class="form-control"  placeholder="RCSYear" name="RCSYear" required>
                                                </div> -->
                                                
                                                <button class="btn login-form__btn submit w-100" type="submit" name="RCS_Action">RCS_Action</button>
                                            </form>
                                              <!--  <p class="mt-5 login-form__footer">Have account <a href="page-login.html" class="text-primary"> Member login </a>  now</p> -->
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
         <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright & all reserved by <a href="#">Mirpur Club Ltd</a> &copy; Designed & Developed by <a href="#"> Mahmudul & Morshed </a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->   

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>
</html>





