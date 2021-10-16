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

    <!-- Table Data print start Button Class -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css"> 

    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> 

    <!-- Database Table by Hasan -->
    <script src="js/jquery.js"></script> 
          <script src="media/js/jquery.dataTables.min.js"></script> 
          <link href="media/css/jquery.dataTables.min.css" rel="stylesheet">
    <script>
     $(document).ready(function(){
       $("#Cheque").dataTable();
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
                        <h4></h4>
                        <div class="card">
                            <div class="card-body">
                                <h2 class="text-center" style = "color: solid #6577B3;">Cheque Information</h2>
                                <div class="basic-form">
                                    <form class="mt-5 mb-5 login-input" method="post" action="Cheque-management.php" enctype="multipart/form-data">
                                        <div class="form-row">
                                            <!--  <div class="form-group col-md-8">
                                                <h6>Cheque ID :</h6>
                                             </div>
 -->

                                            <div class="form-group col-md-4">
                                                <h6><b>Member ID</b></h6>
                                                <input style="border: .02px solid #969393;" type="text" class="form-control" placeholder="   Member Id" name="MemberID" id="MemberID" required>
                                            </div>
                                         
                                              
                                
                                            <div class="form-group col-md-4">
                                               <h6><b>Choose AD or RCS</b></h6>
                                                <div class="basic-form">
                                                    <select style="border: .03px solid #969393;"class="form-control"  name="ADORRCS" id="ADORRCS" required>
                                                        <option value="">Please select</option>
                                                        <option value="AD">AD</option>
                                                        <option value="RCS">RCS</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-4">
                                               <h6><b>Cheque Type</b></h6>
                                                <div class="basic-form">
                                                    <select style="border: 1px solid #969393;" class="form-control"  name="Chequetype" id="Chequetype" required>
                                                        <option value="">Please select</option>
                                                        <option vaPayable="AccountsPayable">Accounts Payable</option>
                                                        <option value="CashCheque">Cash Cheque</option>
                                                        <option value="BankTransfer">Bank Transfer</option>
                                                    </select>
                                                </div>
                                            </div>
                                             
                                            <div class="form-group col-md-4">
                                                <h6><b>Bank Name</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Bank Name" name="BankName" id="BankName" required>
                                            </div> 

                                            <div class="form-group col-md-4">
                                                <h6><b>Cheque No</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Cheque No:" name="ChequeNo" id="ChequeNo" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <h6><b>Cheque Amount</b></h6>
                                                <input style="border: .01px solid #969393;" type="Number" class="form-control" placeholder=" Cheque Amount" name="ChequeAmount" id="ChequeAmount"required>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <h6><b>Cheque Receive Date</b></h6>
                                                <input style="border: .01px solid #969393;" type="date" class="form-control" placeholder=" Cheque Receive Date" name="ChequeReceiveDate" id="ChequeReceiveDate" required>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <h6><b>Cheque Date</b></h6>
                                                <input style="border: .01px solid #969393;" type="date" class="form-control" placeholder=" Cheque Date" name="ChequeDate" id="ChequeDate" required>
                                            </div>
                                           
                                            <div class="form-group col-md-4">
                                                <h6><b>Cheque Honored Date</b></h6>
                                                <input style="border: .01px solid #969393;" type="date" class="form-control" placeholder=" Cheque Honored Date" name="ChequeHonoredDate" id="ChequeHonoredDate">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <h6><b>Cheque Dishonored Date</b></h6>
                                                <input style="border: .01px solid #969393;" type="date" class="form-control" placeholder=" Cheque dishonored Date" name="ChequedishonoredDate" id="ChequedishonoredDate">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <h6><b>Old Dishonored Cheque No</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Dishonored Cheque No" name="oldcheque" id="oldcheque">
                                            </div>

                                             <div class="form-group col-md-4">
                                                <h6><b>Cheque In By</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control" placeholder=" Cheque In By" name="ChequeInBy" id="ChequeInBy" required>
                                            </div> 
                                             <!-- <div class="form-group col-md-3">
                                                <h6><b>Cheque Out By</b></h6>
                                                <input style="border: .01px solid #969393;" type="text" class="form-control input-default" placeholder=" Cheque Out By" name="ChequeOutBy" id="ChequeOutBy" required>
                                            </div>  -->
                                            
                                            <div class="col-lg-12">
                                                
                                                <h6><b>Dishonoured cheque Remarks</b></h6>
                                                <div class="form-group">
                                                    <textarea style="border: 1px solid #969393;" class="form-control h-150px" placeholder=" Cheque dishonor reason" rows="2" name="Remarks" id="comment"></textarea>
                                                
                                                </div>
                                            </div>
                                            

                                            <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <div class="drag-area">
                                                <!-- <label class="col-lg-6 col-form-label"> Attatchment (Cheque Scan Copy)<span class="text-danger"></span>
                                                </label> -->
                                                        <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                                        <header>Upload File</header>
                                                        <span>OR</span>
                                                        <!-- <button type="file" class="form-control-file" name="cheque">Browse File</button> -->
                                                        <button>Browse File</button>
                                                        <input type="file" hidden>
                                                        <!-- <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button> -->

                                                    <!-- <div class="col-lg-6">
                                                    <input type="file" class="form-control-file" name="cheque" >
                                                    </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                             
                                        </div>    
                                  
                                        <button type="submit" class="btn mb-1 btn-success" name="ChequeEntry"> Insert </button>  
                                        <button type="submit" class="btn mb-1 btn-warning" name="ChequeUpdate"> Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        <!--  php code start for insert database -->


        <!--**********************************
            Content body start
        ***********************************-->
       

            
            <!-- row -->
        <div class="content-body">    
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <a class="text-center"><h4>Cheque Management Table</h4></a>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration" id="Cheque">
                                        <thead>
                                            <tr>
                                                <th>Member ID</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                                <th>Member Type</th>
                                                <th>Bank Name</th>
                                                <th>Cheque No</th>
                                                <th>Cheque Amount</th>
                                                <th>Cheque ReceivingDate</th>
                                                <th>Cheque Date</th>
                                                <th>Honored Date</th>
                                                <th>Dishonored Date</th>
                                                <th>Old Cheque No</th>
                                                <th>Cheque In By</th>
                                                <th>Remarks</th>
                                                <th>Attatchment</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $con=mysqli_connect("localhost","root","","mcl");
                                            if($con-> connect_error){
                                                die("connection faild:".$con-> connect_error);
                                            }
                                            $sql="SELECT m.MemberID, m.Name, c.ADOrRCS, c.Type, c.Bank, c.ChequeNo, c.Amount, c.ReceiveDate, c.ChequeDate, c.HonoredDate, c.DishonoredDate, c.OldChequeNo, c.ChequeInBy FROM chequetable AS c INNER JOIN memberinfo AS m ON m.ID=c.MemberID";
                                            $result=$con->query($sql);

                                            if($result->num_rows >0){
                                                while ($row=$result->fetch_assoc()) {
                                                    echo "<tr><td>".$row["MemberID"]."</td><td>".$row["Name"]."</td><td>".$row["ADOrRCS"]."</td><td>".$row["Type"]."</td><td>".$row["Bank"]."</td><td>".$row["ChequeNo"]."</td><td>".$row["Amount"]."</td><td>".$row["ReceiveDate"]."</td><td>".$row["ChequeDate"]."</td><td>".$row["HonoredDate"]."</td><td>".$row["DishonoredDate"]."</td><td>".$row["OldChequeNo"]."</td><td>".$row["ChequeInBy"]."</td><td>".$row["Attachment"]."</td><td>".$row["Remarks"]."</td></tr>";
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
                                                <th>Member ID</th>
                                                <th>Member Name</th>
                                                <th>AD or RCS</th>
                                                <th>Member Type</th>
                                                <th>Bank Name</th>
                                                <th>Cheque No</th>
                                                <th>Cheque Amount</th>
                                                <th>Cheque ReceivingDate</th>
                                                <th>Cheque Date</th>
                                                <th>Honored Date</th>
                                                <th>Dishonored Date</th>
                                                <th>Old Cheque No</th>
                                                <th>Cheque In By</th>
                                                <th>Remarks</th>
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
        $('#Cheque').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'pdf', 'print', <?php  require('excel.php')?>, 'copy', 'csv'
        ]
    } );

    </script>
    <!-- Table End Data print Module -->

    <!-- Drag and drop upload file script -->
     <script src="js/script.js"></script>
    <!-- Drag and drop upload file script -->
    <script>
        var table = document.getElementById("Cheque"),rIndex;
        for(var i = 1; i<table.rows.length;i++)
        {
            table.rows[i].onclick = function()
            {
                rIndex = this.rowIndex;
                console.log(rIndex);

                document.getElementById("MemberID").value = this.cells[0].innerHTML;
                document.getElementById("ADORRCS").value = this.cells[2].innerHTML;
                document.getElementById("Chequetype").value = this.cells[3].innerHTML;
                document.getElementById("BankName").value = this.cells[4].innerHTML;
                document.getElementById("ChequeNo").value = this.cells[5].innerHTML;
                document.getElementById("ChequeAmount").value = this.cells[6].innerHTML;
                document.getElementById("ChequeReceiveDate").value = this.cells[7].innerHTML;
                document.getElementById("ChequeDate").value = this.cells[8].innerHTML;
                document.getElementById("ChequeHonoredDate").value = this.cells[9].innerHTML;
                document.getElementById("ChequedishonoredDate").value = this.cells[10].innerHTML;
                document.getElementById("oldcheque").value = this.cells[11].innerHTML;
                document.getElementById("ChequeInBy").value = this.cells[12].innerHTML;
                document.getElementById("comment").value = this.cells[13].innerHTML;
            }
        }
    </script>

</body>
</html>





