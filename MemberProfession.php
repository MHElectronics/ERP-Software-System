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
    <!-- <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div> -->
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
                                <h2 class="text-center">Member Profession Information</h2>
                                <div class="basic-form">
                                    <form class="mt-5 mb-5 login-input" method="post" action="MemberPersonal.php">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Profession</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control input-default" placeholder="  Member Profession" name="MemberProfession" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Designation</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Designation" name="MemberDesignation">
                                            </div>    
                                          
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Office Name</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Office Name" name="MemberOfficeName">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Office Address</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Office Address" name="MemberOfficeAddress">
                                            </div>
                                          
                                            
                                            <div class="card-body">
                                                <h4 class="text-center">Member Education Information</h4><br>
                                                <div class="row">
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Degree-1</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Degree" name="MemberEducationDegree-1" >
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Institute-1</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Institute" name="MemberEducationInstitute-1">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Result-1</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Result" name="MemberEducationResult-1">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Year-1</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Year" name="MemberEducationYear-1">
                                                    </div>

                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Degree-2</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Degree" name="MemberEducationDegree-2" >
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Institute-2</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Institute" name="MemberEducationInstitute-2">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Result-2</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Result" name="MemberEducationResult-2">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Year-2</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Year" name="MemberEducationYear-2">
                                                    </div>

                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Degree-3</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Degree" name="MemberEducationDegree-3" >
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Institute-2</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Institute" name="MemberEducationInstitute-3">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Result-3</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Result" name="MemberEducationResult-3">
                                                    </div>
                                                       <div class="form-group col-md-3">
                                                        <h6><b>Member Education Year-3</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Year" name="MemberEducationYear-3">
                                                    </div>

                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Degree-4</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Degree" name="MemberEducationDegree-4" >
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Institute-4</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Institute" name="MemberEducationInstitute-4">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Result-4</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Result" name="MemberEducationResult-4">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Year-4</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Year" name="MemberEducationYear-4">
                                                    </div>

                                                      <div class="form-group col-md-3">
                                                        <h6><b>Member Education Degree-5</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Degree" name="MemberEducationDegree-5" >
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Institute-5</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Institute" name="MemberEducationInstitute-5">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Result-5</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Result" name="MemberEducationResult-5">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <h6><b>Member Education Year-5</b></h6>
                                                        <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Education Year" name="MemberEducationYear-5">
                                                    </div>
                                                </div>
                                            </div>
                                         </div>    
                                  
                                        <button type="submit" class="btn mb-1 btn-secondary" name="MemberPfSkip"> Skip </button>
                                        
                                        <button type="submit" class="btn mb-1 btn-success" name="MemberPfInsert"> Insert </button> 
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

</body>
</html>





