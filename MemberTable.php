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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
      <!-- Table Data print start Button Class -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">


    <!-- Database Table by Hasan -->

    <script src="js/jquery.js"></script>
    <script src="media/js/jquery.dataTables.min.js"></script>
    <link href="media/css/jquery.dataTables.min.css" rel="stylesheet">
    <script>
        $(document).ready(function () {
            $("#Membertable").dataTable();
        });

    </script>
 
    <script>
        $(document).ready(function () {
            $("#Mpertable").dataTable();
        });

    </script>

    <script>
        $(document).ready(function() {
            $("#Mptable").dataTable();
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



            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a class="text-center">
                                    <h4>Member Table</h4>
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration"
                                        id="Membertable">
                                        <thead>
                                            <tr>
                                                <th>MemberID</th>
                                                <th>MemberName</th>
                                                <th>MemberMail</th>
                                                <th>MobileNo</th>
                                                <th>MobileNoAlt</th>
                                                <th>MemberAddress</th>
                                                <th>Area</th>
                                                <th>Member Catagory</th>
                                                <th>Member type</th>
                                                <th>Member NID</th>
                                                <th>Joining Date</th>
                                                <th>AD</th>
                                                <th>MSP</th>
                                                <th>RCS</th>
                                                <th>Ref ID</th>
                                                <th>Remarks</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                            $con=mysqli_connect("localhost","root","","mcl");
                                            if($con-> connect_error){
                                                die("connection faild:".$con-> connect_error);
                                            }
                                            $sql="SELECT * FROM `memberinfo`";
                                            $result=$con->query($sql);

                                            if($result->num_rows >0){
                                                while ($row=$result->fetch_assoc()) {
                                                    echo "<tr><td>".$row["MemberID"]."</td><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["MobileNo"]."</td><td>".$row["AltMobileNo"]."</td><td>".$row["Address"]."</td><td>".$row["Area"]."</td><td>".$row["Catagory"]."</td><td>".$row["Type"]."</td><td>".$row["NID"]."</td><td>".$row["JoiningDate"]."</td><td>".$row["AD"]."</td><td>".$row["MSP"]."</td><td>".$row["RCS"]."</td><td>".$row["ReferenceID"]."</td><td>".$row["Remarks"]."</td></tr>";
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
                                                <th>MemberID</th>
                                                <th>MemberName</th>
                                                <th>MemberMail</th>
                                                <th>MobileNo</th>
                                                <th>MobileNoAlt</th>
                                                <th>MemberAddress</th>
                                                <th>Area</th>
                                                <th>Member Catagory</th>
                                                <th>Member type</th>
                                                <th>Member NID</th>
                                                <th>Joining Date</th>
                                                <th>AD</th>
                                                <th>MSP</th>
                                                <th>RCS</th>
                                                <th>Ref ID</th>
                                                <th>Remarks</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            <div class="card-body">
                                <h6></h6>
                                <h2 class="text-center">Member Information</h2>
                               <div class="form-validation">
                                    <form class="form-valide" action="MemberProfession.php" method="post" enctype="multipart/form-data" >
                                    
                                        <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label"><b>Member ID </b><span class="text-danger">*</span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input style="border: .01px solid #969393;" type="text" class="form-control"  placeholder="Member ID" name="MemberID" id="MemberID"required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label" for="val-username"><b>Member Name </b><span class="text-danger">*</span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" id="val-username" name="val-username" placeholder="Member Name..">
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label" for="val-email"><b>Email </b><span class="text-danger">*</span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" id="val-email" name="val-email" placeholder="Email Address..">
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label" for="val-password"><b>Password</b> <span class="text-danger">*</span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input style="border: .01px solid #969393;" type="password" class="form-control" id="val-password" name="val-password" placeholder="Choose a safe one..">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label" for="val-confirm-password"><b>Confirm Password </b><span class="text-danger">*</span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input style="border: .01px solid #969393;" type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="..and confirm it!">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label"><b>Mobile Number </b><span class="text-danger">*</span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" name="MemberNumber" id="MemberNumber"placeholder="017-999-0000" required>
                                            </div>
                                        </div>
                                        
                                         <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label"><b>Mobile Number Alternative
                                            </b></h6>
                                            <div class="col-lg-6">
                                                <input style="border: .01px solid #969393;" type="text" class="form-control"  placeholder="Member Number Alternative" name="MobileNoAlt" id="MobileNoAlt">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label"><b>Member Address </b><span class="text-danger">*</span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input style="border: .01px solid #969393;" type="text" class="form-control"  placeholder="Member Address" name="MemberAddress" id="MemberAddress"required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label"><b>Area</b> <span class="text-danger">*</span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="Area" name="Area" id ="Area" required>
                                            </div>
                                        </div>
                                         
                                      
                                        <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label" ><b>Member Catagory </b><span class="text-danger"></span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <select style="border: .01px solid #969393;" class="form-control"  name="MemberCatagory" id="MemberCatagory">
                                                    <option value="">Please select</option>
                                                    <option value="Sponser_Member">Sponser Member</option>
                                                    <option value="Platinum_Member">Platinum Member</option>
                                                    <option value="Gold_Member">Gold Member</option>
                                                    <option value="Silver_Member">Silver Member</option>
                                                    <option value="Bronze_Member">Bronze Member</option>
                                                    <option value="Corporate_Member">Corporate Member</option>
                                                    <option value="Senior_Member">Senior Member</option>
                                                    <option value="Junior_Member">Junior Member</option>
                                                    <option value="Intern_Associate">Intern Associate</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label" ><b>Member Type </b><span class="text-danger"></span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <select style="border: .01px solid #969393;" class="form-control"  name="MemberType" id="MemberType">
                                                    <option value="">Please select</option>
                                                    <option value="Genarel">Genarel Member</option>
                                                    <option value="Associate">Associate Member</option>
                                                    <option value="Student">Student</option>
                                                    <option value="NUll">Null</option>
                                                    <option value="NUll">Null</option>
                                                    <option value="NUll">Null</option>
                                                    <option value="NUll">Null</option>
                                                    <option value="NUll">Null</option>
                                                    <option value="Intern">Intern </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label" for="val-digits"><b>NID </b><span class="text-danger">*</span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" id="val-digits" name="val-digits" placeholder="NID">
                                            </div>
                                        </div>
                                       
                                        <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label"><b>Joining Date </b><span class="text-danger">*</span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input style="border: .01px solid #969393;" type="date" class="form-control"  placeholder="Joining Date" name="JoiningDate" id="JoiningDate" required>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label"><b> Asset Deposit </b><span class="text-danger">*</span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" id="ADtobePaid" name="ADtobePaid" placeholder="Asset Deposit (AD)" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label"> <b>Membership Status Point</b>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" id="MSP" name="MSP" placeholder="Membership Status Point (MSP)" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label"><b>Monthly Running Cost Share </b><span class="text-danger">*</span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" name="MonthlyRCS" id="MonthlyRCS" placeholder="Monthly Running Cost Share (RCS)" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label"><b>Reference Member ID </b><span class="text-danger">*</span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" name="ReferenceMemberID"id="ReferenceMemberID" placeholder="Reference Member ID" required>
                                            </div>
                                        </div>

                                    
                                       <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label"><b>Remarks </b><span class="text-danger">*</span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <textarea style="border: .01px solid #969393;" class="form-control"  name="Remarks" id="Remarks" rows="5" placeholder="Enter Member AD,RCS Etc Details.." required></textarea>
                                            </div>
                                        </div>
                                        

                                     <!--    <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label"> Attatchment (Photo)<span class="text-danger"></span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input type="file" name="photo" class="form-control-file" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label"> Attatchment (Hard copy Form)<span class="text-danger"></span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input type="file" name="form" class="form-control-file" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label"> Attatchment (NID)<span class="text-danger"></span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input type="file" name="nid" class="form-control-file" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label"> Attatchment (NOC)<span class="text-danger"></span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input type="file" name="noc" class="form-control-file" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label"> Attatchment (Certificate-1)<span class="text-danger"></span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input type="file" name="Certificate-1" class="form-control-file" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label"> Attatchment (Certificate-2)<span class="text-danger"></span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input type="file" name="Certificate-2"class="form-control-file" >
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <h6 class="col-lg-4 col-form-label"> Attatchment (Certificate-3)<span class="text-danger"></span>
                                            </h6>
                                            <div class="col-lg-6">
                                                <input type="file" name="Certificate-3" class="form-control-file" >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label"><a href="#">Terms &amp; Conditions</a>  <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <h6 class="css-control css-control-primary css-checkbox" for="val-terms">
                                                    <input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1"> <span class="css-control-indicator"></span>  I agree to the terms</h6>
                                            </div>
                                        </div> -->

                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary" name="Member_Submit">Submit</button>
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
                            <div class="card-body">
                                <a class="text-center">
                                    <h4>Personal Information Table</h4>
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="Mpertable">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Spouse Name</th>
                                                <th>Father Name</th>
                                                <th>Mother Name</th>
                                                <th>Children</th>
                                                <th>Children</th>
                                                <th>Children</th>
                                                <th>Date Of Birth</th>
                                                <th>Home District</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                            $con=mysqli_connect("localhost","root","","mcl");
                                            if($con-> connect_error){
                                                die("connection faild:".$con-> connect_error);
                                            }
                                            $sql="SELECT m.MemberID, m.Name, mp.SpouseName, mp.FatherName, mp.MotherName, mp.`Child-1`, mp.`Child-2`, mp.`Child-3`, mp.DateOfBirth, mp.HomeDistrict
                                            FROM memberpersonalinfo AS mp
                                            INNER JOIN memberinfo AS m ON mp.MemberID=m.ID";
                                            $result=$con->query($sql);
                    
                                            if($result->num_rows >0){
                                                while ($row=$result->fetch_assoc()) {
                                                    echo "<tr><td>".$row["MemberID"]."</td><td>".$row["Name"]."</td><td>".$row["SpouseName"]."</td><td>".$row["FatherName"]."</td><td>".$row["MotherName"]."</td><td>".$row["Child-1"]."</td><td>".$row["Child-2"]."</td><td>".$row["Child-3"]."</td><td>".$row["DateOfBirth"]."</td><td>".$row["HomeDistrict"]."</td></tr>";
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
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Spouse Name</th>
                                                <th>Father Name</th>
                                                <th>Mother Name</th>
                                                <th>Children</th>
                                                <th>Children</th>
                                                <th>Children</th>
                                                <th>Date Of Birth</th>
                                                <th>Home District</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                               <h2 class="text-center">Member Personal Information</h2>
                                <div class="basic-form">
                                    <form class="mt-5 mb-5 login-input" method="post" action="index.php">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Spouse Name</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Spouse Name" name="MemberSpouseName" id ="MemberSpouseName">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Father Name</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Father Name" name="MemberFatherName" id ="MemberFatherName">
                                            </div>    
                                            
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Mother Name</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Father Name" name="MemberMotherName" id="MemberMotherName">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Children Name</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Children Name 1" name="MemberChildrenName1" id="MemberChildrenName1">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Children Name</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Children Name 2" name="MemberChildrenName2" id="MemberChildrenName2">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Children Name</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Children Name 3" name="MemberChildrenName3" id="MemberChildrenName3">
                                            </div>
                                            
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Date Of Birth</b></h6>
                                                <input style="border: .01px solid #969393;" type="date" class="form-control" placeholder="  Member Date Of Birth" name="MemberDateOfBirth" id="MemberDateOfBirth">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Home District</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Home District" name="MemberHomeDistrict" id="MemberHomeDistrict">
                                            </div>
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
                <div class="row">
                    <div class="col-lg-12">
                        <h4></h4>
                        <div class="card">
                            <div class="card-body">
                                <a class="text-center">
                                    <h4> </h4>
                                    <h4>Professional Information Table</h4>
                                </a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="Mptable">
                                        <thead>
                                            <tr>
                                            <th>ID</th>
                                                <th>Name</th>
                                                <th>Profession</th>
                                                <th>Designation</th>
                                                <th>Office Name</th>
                                                <th>Office Address</th>
                                                <th>Degree-1</th>
                                                <th>Institute-1</th>
                                                <th>Result-1</th>
                                                <th>Year-1</th>
                                                <th>Degree-2</th>
                                                <th>Institute-2</th>
                                                <th>Result-2</th>
                                                <th>Year-2</th>
                                                <th>Degree-3</th>
                                                <th>Institute-3</th>
                                                <th>Result-3</th>
                                                <th>Year-3</th>
                                                <th>Degree-4</th>
                                                <th>Institute-4</th>
                                                <th>Result-4</th>
                                                <th>Year-4</th>
                                                <th>Degree-5</th>
                                                <th>Institute-5</th>
                                                <th>Result-5</th>
                                                <th>Year-5</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $con=mysqli_connect("localhost","root","","mcl");
                                            if($con-> connect_error){
                                                die("connection faild:".$con-> connect_error);
                                            }
                                            $sql= "SELECT  m.MemberID, m.Name, mp.Profession, mp.Designation, mp.OfficeName, mp.OfficeAddress, mp.`Degree-1`, mp.`Institute-1`, mp.`Result-1`, mp.`Degree-2`, mp.`Institute-2`, mp.`Result-2`, mp.`Degree-3`, mp.`Institute-3`, mp.`Result-3`, mp.`Degree-4`, mp.`Institute-4`, mp.`Result-4`, mp.`Degree-5`, mp.`Institute-5`, mp.`Result-5`
                                            FROM memberprofessionandeducation AS mp
                                              INNER JOIN memberinfo AS m ON mp.MemberID=m.ID";
                                            $result=$con->query($sql);
                    
                                            if($result->num_rows >0){
                                                while ($row=$result->fetch_assoc()) {
                                                    echo "<tr><td>".$row["MemberID"]."</td><td>".$row["Name"]."</td><td>".$row["Profession"]."</td><td>".$row["Designation"]."</td><td>".$row["OfficeName"]."</td><td>".$row["OfficeAddress"]."</td><td>".$row["Degree-1"]."</td><td>".$row["Institute-1"]."</td><td>".$row["Result-1"]."</td><td>".$row["Degree-2"]."</td><td>".$row["Institute-2"]."</td><td>".$row["Result-2"]."</td><td>".$row["Degree-3"]."</td><td>".$row["Institute-3"]."</td><td>".$row["Result-3"]."</td><td>".$row["Degree-4"]."</td><td>".$row["Institute-4"]."</td><td>".$row["Result-4"]."</td><td>".$row["Degree-5"]."</td><td>".$row["Institute-5"]."</td><td>".$row["Result-5"]."</td></tr>";
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
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Profession</th>
                                                <th>Designation</th>
                                                <th>Office Name</th>
                                                <th>Office Address</th>
                                                <th>Degree-1</th>
                                                <th>Institute-1</th>
                                                <th>Result-1</th>
                                                <th>Year-1</th>
                                                <th>Degree-2</th>
                                                <th>Institute-2</th>
                                                <th>Result-2</th>
                                                <th>Year-2</th>
                                                <th>Degree-3</th>
                                                <th>Institute-3</th>
                                                <th>Result-3</th>
                                                <th>Year-3</th>
                                                <th>Degree-4</th>
                                                <th>Institute-4</th>
                                                <th>Result-4</th>
                                                <th>Year-4</th>
                                                <th>Degree-5</th>
                                                <th>Institute-5</th>
                                                <th>Result-5</th>
                                                <th>Year-5</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <h2></h2>
                                 <h2 class="text-center">Member Profession Information</h2>
                                <div class="basic-form">
                                    <form class="mt-5 mb-5 login-input" method="post" action="MemberPersonal.php">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Profession</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control input-default" placeholder="  Member Profession" name="MemberProfession" id="MemberProfession"  >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Designation</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Designation" name="MemberDesignation" id="MemberDesignation">
                                            </div>    
                                          
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Office Name</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Office Name" name="MemberOfficeName" id ="MemberOfficeName">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Office Address</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Office Address" name="MemberOfficeAddress" id ="MemberOfficeAddress">
                                            </div>
                                          
                                            
                                            <div class="card-body">
                                                <h4 class="text-center">Member Education Information</h4><br>
                                                <div class="row">
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Degree-1</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Degree" name="MemberEducationDegree-1" id="MemberEducationDegree-1" >
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Institute-1</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Institute" name="MemberEducationInstitute-1" id="MemberEducationInstitute-1">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Result-1</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Result" name="MemberEducationResult-1" id="MemberEducationResult-1">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Year-1</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Year" name="MemberEducationYear-1" id="MemberEducationYear-1">
                                                    </div>

                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Degree-2</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Degree" name="MemberEducationDegree-2" id="MemberEducationDegree-2" >
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Institute-2</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Institute" name="MemberEducationInstitute-2" id="MemberEducationInstitute-2">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Result-2</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Result" name="MemberEducationResult-2" id="MemberEducationResult-2">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Year-2</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Year" name="MemberEducationYear-2" id="MemberEducationYear-2">
                                                    </div>

                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Degree-3</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Degree" name="MemberEducationDegree-3" id="MemberEducationDegree-3" >
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Institute-2</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Institute" name="MemberEducationInstitute-3" id="MemberEducationInstitute-3">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Result-3</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Result" name="MemberEducationResult-3" id ="MemberEducationResult-3">
                                                    </div>
                                                       <div class="form-group col-md-3">
                                                        <h6><b>Member Education Year-3</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Year" name="MemberEducationYear-3" id="MemberEducationYear-3">
                                                    </div>

                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Degree-4</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Degree" name="MemberEducationDegree-4" id="MemberEducationDegree-4" >
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Institute-4</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Institute" name="MemberEducationInstitute-4" id="MemberEducationInstitute-4">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Result-4</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Result" name="MemberEducationResult-4" id="MemberEducationResult-4">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Year-4</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Year" name="MemberEducationYear-4" id="MemberEducationYear-4">
                                                    </div>

                                                      <div class="form-group col-md-3">
                                                        <h6><b>Member Education Degree-5</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Degree" name="MemberEducationDegree-5" id="MemberEducationDegree-5" >
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Institute-5</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Institute" name="MemberEducationInstitute-5" id="MemberEducationInstitute-5">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Result-5</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Result" name="MemberEducationResult-5" id ="MemberEducationResult-5">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Year-5</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Year"  name="MemberEducationYear-5" id="MemberEducationYear-5">
                                                    </div>
                                                </div>
                                            </div>
                                         </div>


                                        </div>
                                        <button type="submit" class="btn mb-1 btn-warning" name="MemberPfUpdate">
                                            Update</button>
                                        <button type="submit" class="btn mb-1 btn-danger" name="MemberPfDelete">
                                            Delete</button>
                                    </form>
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
        $('#Membertable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf', 'print', <?php  require('excel.php')?>, 'copy', 'csv'
        ]
    } );

    </script>
    <!-- Table End Data print Module -->
   
       <script type="text/Javascript" >
        $('#Mptable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf', 'print', <?php  require('excel.php')?>, 'copy', 'csv'
        ]
    } );

    </script>
    <!-- Table End Data print Module -->

        <script type="text/Javascript" >
        $('#Mpertable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf', 'print', <?php  require('excel.php')?>, 'copy', 'csv'
        ]
    } );

    </script>
    <!-- Table End Data print Module -->
    <script>
    
        var table = document.getElementById("Membertable"),rIndex;
        for (var i = 1; i < table.rows.length; i++) {
            table.rows[i].onclick = function () {
                rIndex = this.rowIndex;
                console.log(rIndex);
               // echo (rIndex);

                document.getElementById("MemberID").value = this.cells[0].innerHTML;
                document.getElementById("val-username").value = this.cells[1].innerHTML;
                document.getElementById("val-email").value = this.cells[1].innerHTML;
                document.getElementById("MemberNumber").value = this.cells[3].innerHTML;
                document.getElementById("MobileNoAlt").value = this.cells[4].innerHTML;
                document.getElementById("MemberAddress").value = this.cells[5].innerHTML;
                document.getElementById("Area").value = this.cells[6].innerHTML;
                document.getElementById("MemberCatagory").value = this.cells[7].innerHTML;
                document.getElementById("MemberType").value = this.cells[8].innerHTML;
                document.getElementById("val-digits").value = this.cells[9].innerHTML;
                document.getElementById("JoiningDate").value = this.cells[10].innerHTML;
                document.getElementById("ADtobePaid").value = this.cells[11].innerHTML;
                document.getElementById("MSP").value = this.cells[12].innerHTML;
                document.getElementById("MonthlyRCS").value = this.cells[13].innerHTML;
                document.getElementById("ReferenceMemberID").value = this.cells[14].innerHTML;
                document.getElementById("Remarks").value = this.cells[15].innerHTML;
                
              }
            }
        
    </script>
    <script>
        var table1 = document.getElementById("Mptable"), rIndex;
        for (var i = 1; i < table1.rows.length; i++) {
            table1.rows[i].onclick = function () {
                rIndex = this.rowIndex;
                console.log(rIndex);

                document.getElementById("MemberID").value = this.cells[0].innerHTML;
                document.getElementById("MemberProfession").value = this.cells[2].innerHTML;
                document.getElementById("MemberDesignation").value = this.cells[3].innerHTML;
                document.getElementById("MemberOfficeName").value = this.cells[4].innerHTML;
                document.getElementById("MemberOfficeAddress").value = this.cells[5].innerHTML;
                document.getElementById("MemberEducationDegree-1").value = this.cells[6].innerHTML;
                document.getElementById("MemberEducationInstitute-1").value = this.cells[7].innerHTML;
                document.getElementById("MemberEducationResult-1").value = this.cells[8].innerHTML;
                document.getElementById("MemberEducationDegree-2").value = this.cells[9].innerHTML;
                document.getElementById("MemberEducationInstitute-2").value = this.cells[10].innerHTML;
                document.getElementById("MemberEducationResult-2").value = this.cells[11].innerHTML;
                document.getElementById("MemberEducationDegree-3").value = this.cells[12].innerHTML;
                document.getElementById("MemberEducationInstitute-3").value = this.cells[13].innerHTML;
                document.getElementById("MemberEducationResult-3").value = this.cells[14].innerHTML;
                document.getElementById("MemberEducationDegree-4").value = this.cells[15].innerHTML;
                document.getElementById("MemberEducationInstitute-4").value = this.cells[16].innerHTML;
                document.getElementById("MemberEducationResult-4").value = this.cells[17].innerHTML;
                document.getElementById("MemberEducationDegree-5").value = this.cells[18].innerHTML;
                document.getElementById("MemberEducationInstitute-5").value = this.cells[19].innerHTML;
                document.getElementById("MemberEducationResult-5").value = this.cells[20].innerHTML;
                
            }
        }
    
    </script>
    <script>
      
        var table2 = document.getElementById("Mpertable"), rIndex;
        for (var i = 1; i < table2.rows.length; i++) {
            table2.rows[i].onclick = function () {
                rIndex = this.rowIndex;
                console.log(rIndex);

                document.getElementById("MemberID").value = this.cells[0].innerHTML;
                document.getElementById("MemberSpouseName").value = this.cells[2].innerHTML;
                document.getElementById("MemberFatherName").value = this.cells[3].innerHTML;
                document.getElementById("MemberMotherName").value = this.cells[4].innerHTML;
                document.getElementById("MemberChildrenName1").value = this.cells[5].innerHTML;
                document.getElementById("MemberChildrenName2").value = this.cells[6].innerHTML;
                document.getElementById("MemberChildrenName3").value = this.cells[7].innerHTML;
                document.getElementById("MemberDateOfBirth").value = this.cells[8].innerHTML;
                document.getElementById("MemberHomeDistrict").value = this.cells[9].innerHTML;
                
            }
        }
    
    </script>

</body>

</html>