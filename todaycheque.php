<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Table Data print start Button Class -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css"> 

</head>

<body>

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
                <a href="index.html">
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
                            <li><a href="todaycheque.php">Today's Cheque</a></li>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a class="text-center"><h4>Today's Cheques</h4></a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="Cheque">
                                        <thead>
                                            <tr>
                                                <th>Member Id</th>
                                                <th>Member Name</th>
                                                <th>Bank Name</th>
                                                <th>AD or RCS</th>
                                                <th>Cheque Type</th>
                                                <th>Cheque No</th>
                                                <th>Cheque Amount</th>
                                                <th>Cheque Receive Date</th>
                                                <th>Cheque Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
        <?php
        $con=mysqli_connect("localhost","root","","mcl");
        if($con-> connect_error){
            die("connection faild:".$con-> connect_error);
        }
        $sql="SELECT * FROM `tabchequemanagement`";
        $result=$con->query($sql);

        if($result->num_rows >0){
            while ($row=$result->fetch_assoc()) {
                echo "<tr><td>".$row["MemberID"]."</td><td>".$row["Bank"]."</td><td>".$row["ADOrRCS"]."</td><td>".$row["ChequeDate"]."</td><td>".$row["ChequeNo"]."</td><td>".$row["ChequeAmount"]."</td><td>".$row["ChequeHonoredDate"]."</td><td>".$row["ChequeDishonoredDate"]."</td><td>".$row["DishonorRemarks"]."</td></tr>";
            }
           
        }
        else{
            echo "0 result";
        } 
    
        $con=null;


         ?>
                                            <tr>
                                              
                                                <td>61</td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                            </tr>
                                            <tr>
                                               
                                                <td>63</td>
                                                
                                                <td>$170,750</td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                
                                            </tr>
                                            <tr>
                                                
                                                <td>66</td>
                                                
                                                <td>$86,000</td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>2009/01/12</td>
                                                <td>$86,000</td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Member Id</th>
                                                <th>Member Name</th>
                                                <th>Bank Name</th>
                                                <th>AD or RCS</th>
                                                <th>Cheque Type</th>
                                                <th>Cheque No</th>
                                                <th>Cheque Amount</th>
                                                <th>Cheque Receive Date</th>
                                                <th>Cheque Date</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
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

             <!-- Table Start Data print Module -->
    <script type="text/Javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/Javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/Javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
    <script type="text/Javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/Javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/Javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/Javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
    <script type="text/Javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>


    <script type="text/Javascript" >
        $('#Cheque').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf', 'print', <?php  require('excel.php')?>, 'copy', 'csv'
        ]
    } );

    </script>
    <!-- Table End Data print Module -->

</body>

</html>