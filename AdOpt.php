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
    <!-- Table Data print start Button Class -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css"> 

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
            Header start ti-comment-alt
        ***********************************-->
        <?php
        require('header_inc.php');
        ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar star
        ***********************************-->
        <?php
        require('sidebar_inc.php');
        ?>

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
                                <h2 class="text-center">Asset Deposit Operation</h2>
                                <div class="basic-form">
                                    <form class="mt-5 mb-5 login-input" method="post" action="AdOpt.php">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <h6><b>Member ID</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Member ID" name="MemberID" id="MemberID" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6><b>Receiving Date</b></h6>
                                                <input style="border: .01px solid #969393;" type="date" class="form-control" placeholder=" Receiving Date" name="ReceivingDate" id="ReceivingDate" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6><b>Receiving Amount</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Receiving Amount" name="ReceivingAmount" id="ReceivingAmount" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6><b>Receiving Tool</b></h6>
                                                <div class="col-lg-6">
                                                    <select style="border: .01px solid #969393;" class="form-control"  name="ReceivingTool" id="ReceivingTool">
                                                        <option value="">Please select</option>
                                                        <option value="Cash">Cash</option>
                                                        <option value="Cheque">Cheque</option>
                                                    </select>
                                                </div>
                                            </div>  
                                            <div class="form-group col-md-6">
                                                <h6><b>Employee ID</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Employee ID" name="EmployeeID" id="EmployeeID" required>
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
                                                <th>Member Name</th>
                                                <th>ReceivingDate</th>
                                                <th>ReceivingAmount</th>
                                                <th>ReceivingTool</th>
                                                <th>Insert EmployeeID</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $con=mysqli_connect("localhost","root","","mcl");
                                            if($con-> connect_error){
                                                die("connection faild:".$con-> connect_error);
                                            }
                                            $sql="SELECT m.MemberID, m.Name, ad.ReceivedDate, ad.ReceivingAmount, ad.ReceivingTool, ad.InsertEmpID  FROM `adopt` AS ad INNER JOIN memberinfo AS m ON m.ID=ad.MemberID";
                                            $result=$con->query($sql);

                                            if($result->num_rows >0){
                                                while ($row=$result->fetch_assoc()) {
                                                    echo "<tr><td>".$row["MemberID"]."</td><td>".$row["Name"]."</td><td>".$row["ReceivingDate"]."</td><td>".$row["ReceivingAmount"]."</td><td>".$row["ReceivingTool"]."</td><td>".$row["InsertEmpID"]."</td></tr>";
                                                }
                                            
                                            }
                                            else{
                                                //echo "0 result";
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
                                                <th>Insert EmployeeID</th>
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

    <script>
        var table = document.getElementById("adopttable"),rIndex;
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
        $('#adopttable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf', 'print', <?php  require('excel.php')?>, 'copy', 'csv'
        ]
    } );

    </script>

</body>

</html>