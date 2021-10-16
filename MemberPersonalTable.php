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
        $(document).ready(function () {
            $("#Mptable").dataTable();
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
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <a class="text-center">
                                <h4>Personal Information Table</h4>
                            </a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration" id="Mptable">
                                    <thead>
                                        <tr>
                                            <th>EmployeeID</th>
                                            <th>EmployeeName</th>
                                            <th>EmployeeMobile</th>
                                            <th>Joining Date</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                        $con=mysqli_connect("localhost","root","","mcl");
                        if($con-> connect_error){
                            die("connection faild:".$con-> connect_error);
                        }
                        $sql="SELECT * FROM tabemployee";
                        $result=$con->query($sql);

                        if($result->num_rows >0){
                            while ($row=$result->fetch_assoc()) {
                                echo "<tr><td>".$row["EmpID"]."</td><td>".$row["EmpName"]."</td><td>".$row["EmpMobile"]."</td><td>".$row["JoiningDate"]."</td><td>".$row["EmpMail"]."</td><td>".$row["EmpPass"]."</td>";
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
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <h4 class="text-center">Member Personal Information Update & Delete</h4>
                            <div class="basic-form">
                                <form class="mt-5 mb-5 login-input" method="post" action="MemberPersonalTable.php">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <h6>Member Spouse Name</h6>
                                            <input style="border: .01px solid #d4d9de;" type="text" class="form-control"
                                                placeholder="  Member Spouse Name" name="MemberSpouseName" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h6>Member Father Name</h6>
                                            <input style="border: .01px solid #d4d9de;" type="text" class="form-control"
                                                placeholder="  Member Father Name" name="MemberFatherName" required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <h6>Member Mother Name</h6>
                                            <input style="border: .01px solid #d4d9de;" type="text" class="form-control"
                                                placeholder="  Member Father Name" name="MemberMotherName" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h6>Member Children Name</h6>
                                            <input style="border: .01px solid #d4d9de;" type="text" class="form-control"
                                                placeholder="  Member Children Name 1" name="MemberChildrenName1"
                                                required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h6>Member Children Name</h6>
                                            <input style="border: .01px solid #d4d9de;" type="text" class="form-control"
                                                placeholder="  Member Children Name 2" name="MemberChildrenName2"
                                                required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h6>Member Children Name</h6>
                                            <input style="border: .01px solid #d4d9de;" type="text" class="form-control"
                                                placeholder="  Member Children Name 3" name="MemberChildrenName3"
                                                required>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <h6>Member Date Of Birth</h6>
                                            <input style="border: .01px solid #d4d9de;" type="date" class="form-control"
                                                placeholder="  Member Date Of Birth" name="MemberDateOfBirth">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <h6>Member Home District</h6>
                                            <input style="border: .01px solid #d4d9de;" type="text" class="form-control"
                                                placeholder="  Member Home District" name="MemberHomeDistrict">
                                        </div>



                                    </div>
                                    <button type="submit" class="btn mb-1 btn-warning" name="MemberPUpdate">
                                        Update</button>
                                    <button type="submit" class="btn mb-1 btn-danger" name="MemberPDelete">
                                        Delete</button>
                                </form>
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
        var table = document.getElementById("Mptable"), rIndex;
        for (var i = 1; i < table.rows.length; i++) {
            table.rows[i].onclick = function () {
                rIndex = this.rowIndex;
                console.log(rIndex);

                document.getElementById("MemberSpouseName").value = this.cells[0].innerHTML;
                document.getElementById("MemberFatherName").value = this.cells[1].innerHTML;
                document.getElementById("MemberMotherName").value = this.cells[2].innerHTML;
                document.getElementById("MemberChildrenName1").value = this.cells[3].innerHTML;
                document.getElementById("MemberChildrenName2").value = this.cells[4].innerHTML;
                document.getElementById("MemberChildrenName3").value = this.cells[5].innerHTML;
                document.getElementById("MemberDateOfBirth").value = this.cells[6].innerHTML;
                document.getElementById("MemberHomeDistrict").value = this.cells[7].innerHTML;

            }
        }
    </script>

</body>

</html>