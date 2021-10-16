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
                <!--**********************************
            row-1
        ***********************************-->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a class="text-center">
                                    <h4> Cheque Details</h4>
                                </a>
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
                                                <th>Honored Date</th>
                                                <th>Dishonored Date</th>
                                                <th>Cheque In By</th>
                                                <th>Cheque Out By</th>
                                                <th>Remarks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <?php
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


         ?> -->


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
                                                <th>Honored Date</th>
                                                <th>Dishonored Date</th>
                                                <th>Cheque In By</th>
                                                <th>Cheque Out By</th>
                                                <th>Remarks</th>
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

            <div class="container-fluid">
                <!--**********************************
                         row-2
                 ***********************************-->

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <a class="text-center">
                                    <h4>All Cheque </h4>
                                </a>
                                <form class="mt-5 mb-5 login-input" method="post" action="cheque-queue.php">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <input style="border: .01px solid #d4d9de;" type="text" class="form-control"
                                                placeholder=" Search" name="Search" id="Search">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <select style="border: .01px solid #d4d9de;" class="form-control"
                                                name="ReceivingTool" id="ReceivingTool">
                                                <option value="">Please select</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Cheque">Cheque</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <button type="submit" class="btn mb-1 btn-outline-primary" name="search">
                                                Search </button>
                                        </div>
                                    </div>

                                </form>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="Cheque">
                                        <thead>
                                            <tr>
                                                <th>Cheque Id</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <?php
        $con=mysqli_connect("localhost","root","","mcl");
        if($con-> connect_error){
            die("connection faild:".$con-> connect_error);
        }
        $sql="SELECT * FROM `tabchequemanagement`";
        $result=$con->query($sql);

        if($result->num_rows >0){
            while ($row=$result->fetch_assoc()) {
                //echo "<tr><td>".$row["MemberID"]."</td><td>".$row["Bank"]."</td><td>".$row["ADOrRCS"]."</td><td>".$row["ChequeDate"]."</td><td>".$row["ChequeNo"]."</td><td>".$row["ChequeAmount"]."</td><td>".$row["ChequeHonoredDate"]."</td><td>".$row["ChequeDishonoredDate"]."</td><td>".$row["DishonorRemarks"]."</td></tr>";
            }
           
        }
        else{
            echo "0 result";
        } 
    
        $con=null;


         ?> -->


                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Cheque Id</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Total Amount <span
                                            class="text-danger">:</span>
                                    </label>
                                    <!-- <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Account's Name">
                                            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <a class="text-center">
                                    <h4> Cheque In Process</h4>
                                </a>
                                <!-- <form class="mt-5 mb-5 login-input" method="post" action="cheque-queue.php">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <input style="border: .01px solid #d4d9de;" type="text" class="form-control" placeholder=" Search" name="Search" id="Search" >
                                        </div>
                                        <div class="form-group col-md-4">
                                            <select style="border: .01px solid #d4d9de;" class="form-control"  name="ReceivingTool" id="ReceivingTool">
                                                <option value="">Please select</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Cheque">Cheque</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn mb-1 btn-success" name="search"> Search </button>    
                                    </div>
                                    
                                 </form> -->
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="Cheque">
                                        <thead>
                                            <tr>
                                                <th>Cheque Id</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <?php
        $con=mysqli_connect("localhost","root","","mcl");
        if($con-> connect_error){
            die("connection faild:".$con-> connect_error);
        }
        $sql="SELECT * FROM `tabchequemanagement`";
        $result=$con->query($sql);

        if($result->num_rows >0){
            while ($row=$result->fetch_assoc()) {
                //echo "<tr><td>".$row["MemberID"]."</td><td>".$row["Bank"]."</td><td>".$row["ADOrRCS"]."</td><td>".$row["ChequeDate"]."</td><td>".$row["ChequeNo"]."</td><td>".$row["ChequeAmount"]."</td><td>".$row["ChequeHonoredDate"]."</td><td>".$row["ChequeDishonoredDate"]."</td><td>".$row["DishonorRemarks"]."</td></tr>";
            }
           
        }
        else{
            echo "0 result";
        } 
    
        $con=null;


         ?> -->


                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Cheque Id</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Account's Name <span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-username" name="val-username"
                                            placeholder="Account's Name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email"> Carried Name<span
                                            class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="CarriedName"
                                            placeholder="Carried Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <a class="text-center">
                                    <h4> Process Done Cheque</h4>
                                </a>
                                <form class="mt-5 mb-5 login-input" method="post" action="cheque-queue.php">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <input style="border: .01px solid #d4d9de;" type="text" class="form-control"
                                                placeholder=" Search" name="Search" id="Search">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <select style="border: .01px solid #d4d9de;" class="form-control"
                                                name="ReceivingTool" id="ReceivingTool">
                                                <option value="">Please select</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Cheque">Cheque</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <button type="submit" class="btn mb-1 btn-outline-primary" name="search">
                                                Search </button>
                                        </div>
                                    </div>

                                </form>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="Cheque">
                                        <thead>
                                            <tr>
                                                <th>Cheque Id</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <!-- php code -->

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Cheque Id</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Total Amount <span
                                            class="text-danger">:</span>
                                    </label>
                                    <!-- <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Account's Name">
                                            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <a class="text-center">
                                    <h4> Dishonored Cheque</h4>
                                </a>
                                <form class="mt-5 mb-5 login-input" method="post" action="cheque-queue.php">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <input style="border: .01px solid #d4d9de;" type="text" class="form-control"
                                                placeholder=" Search" name="Search" id="Search">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <select style="border: .01px solid #d4d9de;" class="form-control"
                                                name="ReceivingTool" id="ReceivingTool">
                                                <option value="">Please select</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Cheque">Cheque</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <button type="submit" class="btn mb-1 btn-outline-primary" name="search">
                                                Search </button>
                                        </div>
                                    </div>

                                </form>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="Cheque">
                                        <thead>
                                            <tr>
                                                <th>Cheque Id</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <!-- php code -->

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Cheque Id</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Total Amount <span
                                            class="text-danger">:</span>
                                    </label>
                                    <!-- <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Account's Name">
                                            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <a class="text-center">
                                    <h4>All Cheque Against Dishonored Cheque</h4>
                                </a>
                                <form class="mt-5 mb-5 login-input" method="post" action="cheque-queue.php">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <input style="border: .01px solid #d4d9de;" type="text" class="form-control"
                                                placeholder=" Search" name="Search" id="Search">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <select style="border: .01px solid #d4d9de;" class="form-control"
                                                name="ReceivingTool" id="ReceivingTool">
                                                <option value="">Please select</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Cheque">Cheque</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <button type="submit" class="btn mb-1 btn-outline-primary" name="search">
                                                Search </button>
                                        </div>
                                    </div>

                                </form>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="Cheque">
                                        <thead>
                                            <tr>
                                                <th>Dishonored Id</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                                <th>New Cheque Id</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <?php
        $con=mysqli_connect("localhost","root","","mcl");
        if($con-> connect_error){
            die("connection faild:".$con-> connect_error);
        }
        $sql="SELECT * FROM `tabchequemanagement`";
        $result=$con->query($sql);

        if($result->num_rows >0){
            while ($row=$result->fetch_assoc()) {
                //echo "<tr><td>".$row["MemberID"]."</td><td>".$row["Bank"]."</td><td>".$row["ADOrRCS"]."</td><td>".$row["ChequeDate"]."</td><td>".$row["ChequeNo"]."</td><td>".$row["ChequeAmount"]."</td><td>".$row["ChequeHonoredDate"]."</td><td>".$row["ChequeDishonoredDate"]."</td><td>".$row["DishonorRemarks"]."</td></tr>";
            }
           
        }
        else{
            echo "0 result";
        } 
    
        $con=null;


         ?> -->


                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Dishonored Id</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                                <th>New Cheque Id</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Total Amount <span
                                            class="text-danger">:</span>
                                    </label>
                                    <!-- <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Account's Name">
                                            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <a class="text-center">
                                    <h4>Dishonored Cheque On Going Process</h4>
                                </a>
                                <form class="mt-5 mb-5 login-input" method="post" action="cheque-queue.php">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <input style="border: .01px solid #d4d9de;" type="text" class="form-control"
                                                placeholder=" Search" name="Search" id="Search">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <select style="border: .01px solid #d4d9de;" class="form-control"
                                                name="ReceivingTool" id="ReceivingTool">
                                                <option value="">Please select</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Cheque">Cheque</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <button type="submit" class="btn mb-1 btn-outline-primary" name="search">
                                                Search </button>
                                        </div>
                                    </div>

                                </form>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="Cheque">
                                        <thead>
                                            <tr>
                                                <th>Dishonored Cheque Id</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <?php
        $con=mysqli_connect("localhost","root","","mcl");
        if($con-> connect_error){
            die("connection faild:".$con-> connect_error);
        }
        $sql="SELECT * FROM `tabchequemanagement`";
        $result=$con->query($sql);

        if($result->num_rows >0){
            while ($row=$result->fetch_assoc()) {
                //echo "<tr><td>".$row["MemberID"]."</td><td>".$row["Bank"]."</td><td>".$row["ADOrRCS"]."</td><td>".$row["ChequeDate"]."</td><td>".$row["ChequeNo"]."</td><td>".$row["ChequeAmount"]."</td><td>".$row["ChequeHonoredDate"]."</td><td>".$row["ChequeDishonoredDate"]."</td><td>".$row["DishonorRemarks"]."</td></tr>";
            }
           
        }
        else{
            echo "0 result";
        } 
    
        $con=null;


         ?> -->


                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Dishonored Cheque Id</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">Total Amount <span
                                            class="text-danger">:</span>
                                    </label>
                                    <!-- <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Account's Name">
                                            </div> -->
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

</body>

</html>