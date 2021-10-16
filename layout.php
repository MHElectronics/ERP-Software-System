<?php include('server.php') ?>
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

    <!-- Database Table by Hasan -->
    <script src="js/jquery.js"></script> 
          <script src="media/js/jquery.dataTables.min.js"></script> 
          <link href="media/css/jquery.dataTables.min.css" rel="stylesheet">
    <script>
     $(document).ready(function(){
       $("#adopttable").dataTable();
     });
   
   </script>

    <!-- Database Table by Hasan -->



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
                <div class="col-lg-12">
                    <div class="card">
                            <div class="card-body">
                                <h4 class="text-center">Asset Deposit Operation</h4>
                                <div class="basic-form">
                                    <form class="mt-5 mb-5 login-input" method="post" action="AdOpt.php">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <h6>Member ID</h6>
                                                <input type="text" class="form-control" placeholder="Member ID" name="MemberID" id="MemberID" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6>Receiving Date</h6>
                                                <input type="date" class="form-control" placeholder="Receiving Date" name="ReceivingDate" id="ReceivingDate" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6>Receiving Amount</h6>
                                                <input type="text" class="form-control" placeholder="Receiving Amount" name="ReceivingAmount" id="ReceivingAmount" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6>Receiving Tool</h6>
                                                <div class="col-lg-6">
                                                    <select class="form-control"  name="ReceivingTool" id="ReceivingTool">
                                                        <option value="">Please select</option>
                                                        <option value="Cash">Cash</option>
                                                        <option value="Cheque">Cheque</option>
                                                    </select>
                                                </div>
                                            </div>  
                                            <div class="form-group col-md-6">
                                                <h6>Employee ID</h6>
                                                <input type="text" class="form-control" placeholder="Employee ID" name="EmployeeID" id="EmployeeID" required>
                                            </div>        
                                    
                                                                                    
                                        </div>    
                                        <button type="submit" class="btn mb-1 btn-success" name="ADInsert"> Insert </button>  
                                        <button type="submit" class="btn mb-1 btn-warning" name="ADUpdate"> Update</button>
                                        <button type="submit" class="btn mb-1 btn-danger" name="ADDelete"> Delete</button>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a class="text-center"><h4>AD Operation Table</h4></a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="adopttable">
                                        <thead>
                                            <tr>
                                                <th>MemberID</th>
                                                <th>ReceivingDate</th>
                                                <th>ReceivingAmount</th>
                                                <th>ReceivingTool</th>
                                                <th>EmployeeID</th>
                                            </tr>
                                        </thead>
                                        <tbody>
        <?php
        $con=mysqli_connect("localhost","root","","mcl");
        if($con-> connect_error){
            die("connection faild:".$con-> connect_error);
        }
        $sql="SELECT * FROM `tabadopt`";
        $result=$con->query($sql);

        if($result->num_rows >0){
            while ($row=$result->fetch_assoc()) {
                echo "<tr><td>".$row["MemberID"]."</td><td>".$row["ReceivingDate"]."</td><td>".$row["ReceivingAmount"]."</td><td>".$row["ReceivingTool"]."</td><td>".$row["EmpID"]."</td></tr>";
            }
           
        }
        else{
            echo "0 result";
        } 
    
        $con=null;


         ?>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Junior Technical Author</td>
                                                <td>San Francisco</td>
                                                <td>66</td>
                                                <td>2009/01/12</td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>MemberID</th>
                                                <th>ReceivingDate</th>
                                                <th>ReceivingAmount</th>
                                                <th>ReceivingTool</th>
                                                <th>EmployeeID</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
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
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

    <script>
        var table = document.getElementById("adopttable"),rIndex;
        for(var i = 1; i<table.rows.length;i++)
        {
            table.rows[i].onclick = function()
            {
                rIndex = this.rowIndex;
                console.log(rIndex);

                document.getElementById("MemberID").value = this.cells[0].innerHTML;
                document.getElementById("ReceivingDate").value = this.cells[1].innerHTML;
                document.getElementById("ReceivingAmount").value = this.cells[2].innerHTML;
                document.getElementById("ReceivingTool").value = this.cells[3].innerHTML;
                document.getElementById("EmployeeID").value = this.cells[4].innerHTML;
            }
        }
    </script>

</body>

</html>