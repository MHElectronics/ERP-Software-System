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
                                <h2 class="text-center">Member Personal Information</h2>
                                <div class="basic-form">
                                    <form class="mt-5 mb-5 login-input" method="post" action="index.php">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Spouse Name</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Spouse Name" name="MemberSpouseName">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Father Name</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Father Name" name="MemberFatherName">
                                            </div>    
                                            
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Mother Name</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Father Name" name="MemberMotherName">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Children Name</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Children Name 1" name="MemberChildrenName1">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Children Name</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Children Name 2" name="MemberChildrenName2">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Children Name</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Children Name 3" name="MemberChildrenName3">
                                            </div>
                                            
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Date Of Birth</b></h6>
                                                <input style="border: .01px solid #969393;" type="date" class="form-control" placeholder="  Member Date Of Birth" name="MemberDateOfBirth">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <h6><b>Member Home District</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder="  Member Home District" name="MemberHomeDistrict">
                                            </div>
                                        </div>    
                                        <button type="submit" class="btn mb-1 btn-secondary" name="MemberPSkip"> Skip </button>
                                       <!--  <div class="bootstrap-modal"> -->
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn mb-1 btn-success" name="MemberConfirm" data-toggle="modal" data-target="#exampleModalCenter">Confirm</button>
                                            <!-- Modal -->
                                            
                                            <div class="modal fade" id="exampleModalCenter">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Confirmation</h5>
                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Congratulation Sir/Madam, You are now offically member of Mirpur Club Ltd.</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                                                            <button type="button" class="btn btn-primary" name="MemberPoConfirm">Ok</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        <!-- </div> -->
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





