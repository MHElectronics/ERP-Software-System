<?php include('server.php') ?>
<!DOCTYPE html>

<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>RCS Operation</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

    <!-- Table Data print start Button Class -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css"> 

     <!-- Database Table by Hasan -->
    <script src="js/jquery.js"></script> 
          <script src="media/js/jquery.dataTables.min.js"></script> 
          <link href="media/css/jquery.dataTables.min.css" rel="stylesheet">
    <script>
     $(document).ready(function(){
       $("#Mytable").dataTable();
     });
   
   </script>

    <!-- Database Table by Hasan -->
    
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
                     <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center">Running Cost Share Operation</h2>
                                <div class="basic-form">
                                    <form class="mt-5 mb-5 login-input" method="post" action="RcsOpt.php">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <h6><b>Member ID</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member ID" name="MemberID" id="MemberID" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6><b>Receiving Date</b></h6>
                                                <input style="border: .01px solid #969393;" type="date" class="form-control" placeholder="  Receiving Date" name="ReceivingDate" id="ReceivingDate" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6><b>Receiving Amount</b></h6>
                                                <input style="border: .01px solid #969393;" type="number" class="form-control" placeholder="  Receiving Amount" name="ReceivingAmount" id="ReceivingAmount" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6><b>Receiving Tool</b></h6>
                                                <div class="col-lg-6">
                                                    <select style="border: .01px solid #969393;" class="form-control"  name="  ReceivingTool" id="ReceivingTool">
                                                        <option value="">Please select</option>
                                                        <option value="Cash">Cash</option>
                                                        <option value="Cheque">Cheque</option>
                                                    </select>
                                                </div>
                                            </div>  
                                            <div class="form-group col-md-6">
                                                <h6><b>Employee ID</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Employee ID" name="EmployeeID" id="EmployeeID" required>
                                            </div>        
                                    
                                                                                    
                                        </div>    
                                        <button type="submit" class="btn mb-1 btn-success" name="RCSInsert"> Insert </button>  
                                        <button type="submit" class="btn mb-1 btn-warning" name="RCSUpdate"> Update</button>
                                        <button type="submit" class="btn mb-1 btn-danger" name="RCSDelete"> Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

        <!--  php code start for insert database -->


        <!--**********************************
            Content body start
        ***********************************-->
        
       

            
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a class="text-center"><h4>RCS Operation Table</h4></a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="Mytable">
                                        <thead>
                                            <tr>
                                                <th>MemberID</th>
                                                <th>Member Name</th>
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
                                        $sql="SELECT m.MemberID, m.Name, ad.ReceivedDate, ad.ReceivingAmount, ad.ReceivingTool, ad.InsertEmpID  FROM `rcsopt` AS ad INNER JOIN memberinfo AS m ON m.ID=ad.MemberID";
                                        $result=$con->query($sql);

                                        if($result->num_rows >0){
                                            while ($row=$result->fetch_assoc()) {
                                                 echo "<tr><td>".$row["MemberID"]."</td><td>".$row["Name"]."</td><td>".$row["ReceivingDate"]."</td><td>".$row["ReceivingAmount"]."</td><td>".$row["ReceivingTool"]."</td><td>".$row["InsertEmpID"]."</td></tr>";
                                            }
                                                                            
                                        }
                                        else{
                                           // echo "0 result";
                                        } 
                                    
                                        $con=null;


                                        ?>    
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>MemberID</th>
                                                <th>Member Name</th>
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
        <?php
        require('footer_inc.php')
        ?>
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

    <script src="./plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
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
        $('#Mytable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf', 'print', <?php  require('excel.php')?>, 'copy', 'csv'
        ]
    } );

    </script>
    <!-- Table End Data print Module -->




     <script>
        var table = document.getElementById("Mytable"),rIndex;
        for(var i = 1; i<table.rows.length;i++)
        {
            table.rows[i].onclick = function()
            {
                rIndex = this.rowIndex;
                console.log(rIndex);

                document.getElementById("MemberID").value = this.cells[0].innerHTML;
                document.getElementById("ReceivingDate").value = this.cells[2].innerHTML;
                document.getElementById("ReceivingAmount").value = this.cells[3].innerHTML;
                document.getElementById("ReceivingTool").value = this.cells[4].innerHTML;
                document.getElementById("EmployeeID").value = this.cells[5].innerHTML;
            }
        }
    </script>

</body>
</html>





