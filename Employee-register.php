<?php include('server.php') ?>
<!DOCTYPE html>

<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Employee Info</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <!-- Table Data print start Button Class -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">   
     <!-- Table Data print end Button Class -->
    <link href="css/style.css" rel="stylesheet">


    <!-- Database Table by Hasan -->
    <script src="js/jquery.js"></script>
    <script src="media/js/jquery.dataTables.min.js"></script>
    <link href="media/css/jquery.dataTables.min.css" rel="stylesheet">
    <script>
        $(document).ready(function () {
            $("#Etable").dataTable();
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

            <div class="col-lg-12">
                <h6></h6>
                <div class="card">
                    <div class="card-body">
                        <a class="text-center">
                            <h4 class="card-title">Employee Information</h4>
                        </a>
                        <div class="basic-form">
                            <form class="mt-5 mb-5 login-input" method="post" action="index.php" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <h6><b>Employee ID</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control"
                                            placeholder="  Employee ID" name="EmployeeID" id="EmployeeID" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6><b>Employee Name</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control"
                                            placeholder="  Employee Name" name="EmployeeName" id="EmployeeName"
                                            required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6><b>Employee Mobile</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control"
                                            placeholder="  Employee Mobile" name="EmployeeMobile" id="EmployeeMobile"
                                            required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <h6><b>Employee Address</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control"
                                            placeholder="  Employee Address" name="EmployeeAddress" id="EmployeeAddress"
                                            required>
                                    </div>
                                    
                                    <div class="form-group col-md-6">
                                            <h6><b>Joining Date</b></h6>
                                            <input style="border: .01px solid #969393;" type="date" class="form-control"
                                                placeholder="  Joining Date" name="JoiningDate" id="JoiningDate" required>
                                    </div>                                    
                                    <div class="form-group col-md-6">
                                        <h6><b>Resign Date</b></h6>
                                        <input style="border: .01px solid #969393;" type="date" class="form-control"
                                                placeholder="   Resign Date" name="ResignDate" id="ResignDate">
                                    </div>  
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <h6><b>Email</b></h6>
                                        <input style="border: .01px solid #969393;" type="email" class="form-control"
                                            placeholder="  Email" name="Email" id="Email" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <h6><b>Password</b></h6>
                                        <input style="border: .01px solid #969393;" type="password" class="form-control"
                                            placeholder="  Password" name="Password" id="Password" required>
                                    </div>
                                     <div class="form-group col-md-6">
                                        <h6><b>Employee NID</b></h6>
                                        <input style="border: .01px solid #969393;" type="number" class="form-control"
                                            placeholder="  Employee NID" name="EmployeeNID" id="EmployeeNID" required>
                                    </div>
                                </div>
                                <div class="form-row">    
                                     <div class="form-group col-md-3">
                                       <h6><b>Employee Education Degree</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Employee Education Degree" name="EmployeeEducationDegree" id="EmployeeEducationDegree" >
                                     </div>
                                    <div class="form-group col-md-3">
                                        <h6><b>Employee Education Institute</b></h6>
                                           <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Employee Education Institute" name="EmployeeEducationInstitute" id="EmployeeEducationInstitute">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <h6><b>Employee Education Result</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Employee Education Result" name="EmployeeEducationResult" id="EmployeeEducationResult">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <h6><b>Employee Education Year</b></h6>
                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Employee Education Year" name="EmployeeEducationYear" id="EmployeeEducationYear">
                                    </div>
                                    <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label"> Attatchment (Certificate-1)<span class="text-danger"></span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input type="file" name="Certificate_1" class="form-control-file" >
                                            </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn mb-1 btn-success" name="EmployeeEntry"> Insert</button>
                                <button type="submit" class="btn mb-1 btn-warning" name="EmployeeUpdate"> Update</button>
                                <button type="submit" class="btn mb-1 btn-danger" name="EmployeeDelete"> Delete</button>
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
                                <a class="text-center">
                                    <h4>Employee Table</h4>
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="Etable">
                                        <thead>
                                            <tr>
                                                <th>EmployeeID</th>
                                                <th>EmployeeName</th>
                                                <th>EmployeeMobile</th>
                                                <th>Employee Address</th>
                                                <th>Joining Date</th>
                                                <th>Resign Date</th>
                                                <th>Email</th>
                                                <th>NID</th>
                                                <th>Degree</th>
                                                <th>Institute</th>
                                                <th>Result</th>
                                                <th>Passing Year</th>
                                                <th>Attatchment</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
        $con=mysqli_connect("localhost","root","","mcl");
        if($con-> connect_error){
            die("connection faild:".$con-> connect_error);
        }
        $sql="SELECT * FROM employeeinfo";
        $result=$con->query($sql);

        if($result->num_rows >0){
            while ($row=$result->fetch_assoc()) {
                echo "<tr><td>".$row["EmployeeId"]."</td><td>".$row["Name"]."</td><td>".$row["Mobile"]."</td><td>".$row["Address"]."</td><td>".$row["JoiningDate"]."</td><td>".$row["ResignDate"]."</td><td>".$row["Email"]."</td><td>".$row["NID"]."</td><td>".$row["Last_degree"]."</td><td>".$row["Last_institute"]."</td><td>".$row["Last_result"]."</td><td>".$row["Last_year"]."</td><td>".$row["Attachment"]."</td></tr>";
            }
           
        }
        else{
            echo "0 result";
        } 
    
        $con=null;


         ?>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>EmployeeID</th>
                                                <th>EmployeeName</th>
                                                <th>EmployeeMobile</th>
                                                <th>Employee Address</th>
                                                <th>Joining Date</th>
                                                <th>Resign Date</th>
                                                <th>Email</th>
                                                <th>NID</th>
                                                <th>Degree</th>
                                                <th>Institute</th>
                                                <th>Result</th>
                                                <th>Passing Year</th>
                                                <th>Attatchment</th>
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
        $('#Etable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf', 'print', <?php  require('excel.php')?>, 'copy', 'csv'
        ]
    } );

    </script>
    <!-- Table End Data print Module -->







<!-- Table Data Start Fetching -->
    <script>
        var table = document.getElementById("Etable"), rIndex;
        for (var i = 1; i < table.rows.length; i++) {
            table.rows[i].onclick = function () {
                rIndex = this.rowIndex;
                console.log(rIndex);

                document.getElementById("EmployeeID").value = this.cells[0].innerHTML;
                document.getElementById("EmployeeName").value = this.cells[1].innerHTML;
                document.getElementById("EmployeeMobile").value = this.cells[2].innerHTML;
                document.getElementById("EmployeeAddress").value = this.cells[3].innerHTML;
                document.getElementById("JoiningDate").value = this.cells[4].innerHTML; 
                document.getElementById("ResignDate").value = this.cells[5].innerHTML;
                document.getElementById("Email").value = this.cells[6].innerHTML;
                document.getElementById("EmployeeNID").value = this.cells[7].innerHTML;
                document.getElementById("EmployeeEducationDegree").value = this.cells[8].innerHTML;
                document.getElementById("EmployeeEducationInstitute").value = this.cells[9].innerHTML;
                document.getElementById("EmployeeEducationResult").value = this.cells[10].innerHTML;
                document.getElementById("EmployeeEducationYear").value = this.cells[11].innerHTML;
                
            }
        }
    </script>

<!-- Table Data End Fetching -->
</body>

</html>