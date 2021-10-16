<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);
// initializing variables
$username = "";
$email    = "";
//$MemberID = "";
$errors = array();
// $row11[] = array();
// $row22[] =array(); 
// $amount[] = array();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'mcl');
// if($db)
// {
//     echo "connected";
// }
// else{
//     echo "not connected";
// }


if (isset($_POST['Member_Submit'])) {
  
  $MemberID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberID']));
  $MemberName = htmlspecialchars(mysqli_real_escape_string($db, $_POST['val-username']));
  $MemberEmail = htmlspecialchars(mysqli_real_escape_string($db, $_POST['val-email']));
  $MemberPassword = htmlspecialchars(mysqli_real_escape_string($db, $_POST['val-password']));
  $MemberPassword = password_hash($MemberPassword,PASSWORD_BCRYPT);
  $Confirmpassword = htmlspecialchars(mysqli_real_escape_string($db, $_POST['val-confirm-password']));
  $MobileNo = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberNumber']));
  $MobileNoAlt = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MobileNoAlt']));
  $MemberAddress = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberAddress']));
  $Area = htmlspecialchars(mysqli_real_escape_string($db, $_POST['Area']));
  $MemberCatagory = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberCatagory']));
  $MemberType = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberType']));
  $NID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['val-digits']));
  $JoiningDate = htmlspecialchars(mysqli_real_escape_string($db, $_POST['JoiningDate']));
  $month = date("y-m-d",strtotime($JoiningDate));
  $ADtobePaid = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ADtobePaid']));
  $MSP = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MSP']));
  $MonthlyRCS = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MonthlyRCS']));
  $ReferenceMemberID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ReferenceMemberID']));
  $Remarks = htmlspecialchars(mysqli_real_escape_string($db, $_POST['Remarks']));
  $image = "";
  $form = "";
  $nid = "";
  $noc = "";
  $Certificate_1 = "";
  $Certificate_2 = "";
  $Certificate_3 = "";
  $uploads_dir = 'C:\xampp\htdocs\ERP\Photo';
  if($_FILES['photo']['name']!=" "){
      if($_FILES['photo']['error']==0) {
          $image = rand(111111111,999999999).'_'.$_FILES['photo']['name'];
          //echo $image;
          //print_r($image) ; 
          move_uploaded_file ($_FILES['photo']['tmp_name'],"$uploads_dir/$image");
        } else {
          echo "error";
          print_r($_FILES['photo']['error']);
        }
      }

  if($_FILES['form']['name']!=''){
  $form = rand(111111111,999999999).'_'.$_FILES['form']['name'];
  move_uploaded_file($_FILES['form']['tmp_name'],'C:\xampp\htdocs\ERP\Form/'.$form);
}

  if($_FILES['nid']['name']!=''){
  $nid = rand(111111111,999999999).'_'.$_FILES['nid']['name'];
  move_uploaded_file($_FILES['nid']['tmp_name'],'C:\xampp\htdocs\ERP\NID/'.$nid);
}
  if($_FILES['noc']['name']!=''){
  $noc = rand(111111111,999999999).'_'.$_FILES['noc']['name'];
  move_uploaded_file($_FILES['noc']['tmp_name'],'C:\xampp\htdocs\ERP\NOC/'.$noc);
}
 
  if($_FILES['Certificate-1']['name']!=''){
  $Certificate_1 = rand(111111111,999999999).'_'.$_FILES['Certificate-1']['name'];
  move_uploaded_file($_FILES['Certificate-1']['tmp_name'],'C:\xampp\htdocs\ERP\Certificate_1/'.$Certificate_1);
}

  if($_FILES['Certificate-2']['name']!=''){
  $Certificate_2 = rand(111111111,999999999).'_'.$_FILES['Certificate-2']['name'];
  move_uploaded_file($_FILES['Certificate-2']['tmp_name'],'C:\xampp\htdocs\ERP\Certificate_2/'.$Certificate_2);}

  if($_FILES['Certificate-3']['name']!=''){
  $Certificate_3 = rand(111111111,999999999).'_'.$_FILES['Certificate-3']['name'];
  move_uploaded_file($_FILES['Certificate-3']['tmp_name'],'C:\xampp\htdocs\ERP\Certificate_3/'.$Certificate_3);}

 
  //echo "$month";

  $sql = "INSERT INTO `memberinfo`(`MemberID`, `Name`, `Email`, `Password`, `MobileNo`, `AltMobileNo`, `Address`, `Area`, `Catagory`, `Type`, `NID`,
   `JoiningDate`, `AD`, `MSP`, `RCS`, `ReferenceID`, `Remarks`, `APhoto`, `AForm`, `ANid`, `ANoc`, `ACertificate-1`, `ACertificate-2`, `ACertificate-3`, `Status`)
   VALUES ('$MemberID','$MemberName','$MemberEmail','$MemberPassword','$MobileNo','$MobileNoAlt','$MemberAddress','$Area','$MemberCatagory','$MemberType','$NID',
   '$JoiningDate','$ADtobePaid','$MSP','$MonthlyRCS','$ReferenceMemberID','$Remarks','$image',
   '$form','$nid','$noc','$Certificate_1','$Certificate_2','$Certificate_3','1')";
  $res = mysqli_query($db,$sql);
  $last_id = $db->insert_id;
  //echo $last_id;
  $_SESSION['MemberID'] = $last_id;
  //die();

   $track = "INSERT INTO `tabpaymenttrack`(`MemberID`) VALUES ('$last_id')";
   $restrack = mysqli_query($db,$track);

   $sqli = "INSERT INTO `tabrcsmaster`(`MemberID`, `RCSMonth`, `AmtRCSToBePaid`) VALUES ('$last_id','$JoiningDate','$MonthlyRCS')";
   $ress = mysqli_query($db,$sqli);

  $sqli1 = "INSERT INTO `tabrcsaccounts`(`MemberID`) VALUES ('$last_id')";
  $resss = mysqli_query($db,$sqli1);

  $sqli2 = "INSERT INTO `tabmembadrcstotal`( `MemberID`, `TotalAD`) VALUES ('$last_id','$ADtobePaid')";
  $ressss = mysqli_query($db,$sqli2);
  $db->close();
}

if (isset($_POST['MemberConfirm'])) {
  $MemberID = $_SESSION['MemberID'];
  $MemberSpouseName = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberSpouseName']));
  $MemberFatherName = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberFatherName']));
  $MemberMotherName = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberMotherName']));
  $MemberChildrenName1 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberChildrenName1']));
  $MemberChildrenName2 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberChildrenName2']));
  $MemberChildrenName3 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberChildrenName3']));
  $MemberDateOfBirth = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberDateOfBirth']));
  $MemberHomeDistrict = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberHomeDistrict']));
  

  $sql = "INSERT INTO `memberpersonalinfo`(`MemberID`, `SpouseName`, `FatherName`, `MotherName`, `Child-1`, `Child-2`, `Child-3`, `DateOfBirth`, `HomeDistrict`)
   VALUES ('$MemberID','$MemberSpouseName','$MemberFatherName','$MemberMotherName','$MemberChildrenName1','$MemberChildrenName2','$MemberChildrenName3','$MemberDateOfBirth','$MemberHomeDistrict')";

  $res = mysqli_query($db,$sql);
  unset($_SESSION["MemberID"]);
  $db->close();
}

if (isset($_POST['MemberPSkip'])) {
  $MemberID = $_SESSION['MemberID'];
  $sql = "INSERT INTO `memberpersonalinfo`(`MemberID`)
          VALUES ('$MemberID')";
  $res = mysqli_query($db,$sql);
  unset($_SESSION["MemberID"]);
  $db->close();
}

if (isset($_POST['MemberPfInsert'])) {
  $MemberID = $_SESSION['MemberID'];
  $sql = "INSERT INTO `memberprofessionandeducation`(`MemberID`)
          VALUES ('$MemberID')";
  $res = mysqli_query($db,$sql);
  $db->close();

}
if (isset($_POST['MemberPfInsert'])) {
  $MemberID = $_SESSION['MemberID'];
  $MemberProfession = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberProfession']));
  $MemberDesignation = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberDesignation']));
  $MemberOfficeName = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberOfficeName']));
  $MemberOfficeAddress = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberOfficeAddress']));
  $MemberEducationDegree1 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberEducationDegree-1']));
  $MemberEducationInstitute1 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberEducationInstitute-1']));
  $MemberEducationResult1 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberEducationResult-1']));
  $MemberEducationYear1 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberEducationYear-1']));

  $MemberEducationDegree2 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberEducationDegree-2']));
  $MemberEducationInstitute2 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberEducationInstitute-2']));
  $MemberEducationResult2 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberEducationResult-2']));
  $MemberEducationYear2 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberEducationYear-2']));

  $MemberEducationDegree3 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberEducationDegree-3']));
  $MemberEducationInstitute3 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberEducationInstitute-3']));
  $MemberEducationResult3 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberEducationResult-3']));
  $MemberEducationYear3 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberEducationYear-3']));

  $MemberEducationDegree4 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberEducationDegree-4']));
  $MemberEducationInstitute4 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberEducationInstitute-4']));
  $MemberEducationResult4 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberEducationResult-4']));
  $MemberEducationYear4 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberEducationYear-4']));

  $MemberEducationDegree5 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberEducationDegree-5']));
  $MemberEducationInstitute5 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberEducationInstitute-5']));
  $MemberEducationResult5 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberEducationResult-5']));
  $MemberEducationYear5 = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberEducationYear-5']));
  

  $sql = "INSERT INTO `memberprofessionandeducation`(`MemberID`, `Profession`, `Designation`, `OfficeName`, `OfficeAddress`, `Degree-1`, `Institute-1`, `Result-1`,`year_1`, `Degree-2`, `Institute-2`, `Result-2`,`year_2`, `Degree-3`, `Institute-3`, `Result-3`,`year_3`, `Degree-4`, `Institute-4`, `Result-4`,`year_4`, `Degree-5`, `Institute-5`, `Result-5`,`year_5`)
  VALUES ('$MemberID','$MemberProfession','$MemberDesignation','$MemberOfficeName','$MemberOfficeAddress','$MemberEducationDegree1','$MemberEducationInstitute1','$MemberEducationResult1','$MemberEducationYear1','$MemberEducationDegree2','$MemberEducationInstitute2','$MemberEducationResult2','$MemberEducationYear2','$MemberEducationDegree3','$MemberEducationInstitute3','$MemberEducationResult3','$MemberEducationYear3','$MemberEducationDegree4','$MemberEducationInstitute4','$MemberEducationResult4','$MemberEducationYear4','$MemberEducationDegree5','$MemberEducationInstitute5','$MemberEducationResult5','$MemberEducationYear5')";
  $res = mysqli_query($db,$sql);
  $db->close();
}

//---------------------------------------------------------------------------------------------------------------------
//-----------------------------------------------EMPLOYEE Insert,Update,Delete-----------------------------------------
//---------------------------------------------------------------------------------------------------------------------


 if (isset($_POST['EmployeeEntry'])) {

  $EmployeeID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeID']));
  $EmployeeName = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeName']));
  $EmployeeMobile = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeMobile']));
  $EmployeeAddress = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeAddress']));
  $JoiningDate = htmlspecialchars(mysqli_real_escape_string($db, $_POST['JoiningDate']));
  $ResignDate = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ResignDate']));
  $Email = htmlspecialchars(mysqli_real_escape_string($db, $_POST['Email']));
  $Password = htmlspecialchars(mysqli_real_escape_string($db, $_POST['Password']));
  $Password = password_hash($Password,PASSWORD_BCRYPT);
  $EmployeeNID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeNID']));
  $EmployeeEducationDegree = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeEducationDegree']));
  $EmployeeEducationInstitute = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeEducationInstitute']));
  $EmployeeEducationResult = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeEducationResult']));
  $EmployeeEducationYear = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeEducationYear']));

  $uploads_dir = 'C:\xampp\htdocs\ERP\Emp_certificate';
  if($_FILES['Certificate_1']['name']!=""){
      if($_FILES['Certificate_1']['error']==0) {
          $image = rand(111111111,999999999).'_'.$_FILES['Certificate_1']['name'];
          //echo $image;
          //print_r($image) ; 
          move_uploaded_file ($_FILES['Certificate_1']['tmp_name'],"$uploads_dir/$image");
        } else {
          echo "error";
          print_r($_FILES['Certificate_1']['error']);
        }
      }
  

  $sql = "INSERT INTO `employeeinfo`(`EmployeeId`, `Name`, `Mobile`, `Address`, `JoiningDate`, `ResignDate`, `Email`, `Password`, `NID`, `Last_degree`, `Last_institute`, `Last_result`, `Last_year`, `Attachment`)
   VALUES ('$EmployeeID','$EmployeeName','$EmployeeMobile','$EmployeeAddress','$JoiningDate','$ResignDate','$Email','$Password','$EmployeeNID',
   '$EmployeeEducationDegree','$EmployeeEducationInstitute','$EmployeeEducationResult','$EmployeeEducationYear','$image')";

  $res = mysqli_query($db,$sql);
  $db->close();

}

if (isset($_POST['EmployeeUpdate'])) {
  //echo" done";
  $EmployeeID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeID']));
  $EmployeeName = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeName']));
  $EmployeeMobile = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeMobile']));
  $EmployeeAddress = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeAddress']));
  $JoiningDate = htmlspecialchars(mysqli_real_escape_string($db, $_POST['JoiningDate']));
  $ResignDate = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ResignDate']));
  $Email = htmlspecialchars(mysqli_real_escape_string($db, $_POST['Email']));
  $EmployeeNID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeNID']));
  $EmployeeEducationDegree = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeEducationDegree']));
  $EmployeeEducationInstitute = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeEducationInstitute']));
  $EmployeeEducationResult = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeEducationResult']));
  $EmployeeEducationYear = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeEducationYear']));

  $sql = "UPDATE `employeeinfo` SET `Name`='$EmployeeName',`Mobile`='$EmployeeMobile',`Address`='$EmployeeAddress',`JoiningDate`='$JoiningDate',`ResignDate`='$ResignDate',`Email`='$Email',
  `NID`='$EmployeeNID',`Last_degree`='$EmployeeMobile',`Last_institute`='$EmployeeMobile',`Last_result`='$EmployeeMobile',`Last_year`='$EmployeeEducationYear' WHERE `EmployeeId`='$EmployeeID'";
 

  $res = mysqli_query($db,$sql);
  $db->close();
 
}
if (isset($_POST['EmployeeDelete'])) {
  
  $EmployeeID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeID']));
  $sql = "DELETE FROM `employeeinfo` WHERE `EmployeeId`='$EmployeeID'";
  $res = mysqli_query($db,$sql);
  $db->close();
  }


//---------------------------------------------------------------------------------------------------------------------
//-----------------------------------------------Cheque Insert,Update,-------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------

if (isset($_POST['ChequeEntry'])) {
  
  $MemberID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberID']));
  $BankName = htmlspecialchars(mysqli_real_escape_string($db, $_POST['BankName']));
  $ADORRCS = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ADORRCS']));
  $Chequetype = htmlspecialchars(mysqli_real_escape_string($db, $_POST['Chequetype']));
  $ChequeNo = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ChequeNo']));
  $ChequeReceiveDate = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ChequeReceiveDate']));
  $ChequeDate = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ChequeDate']));
  $ChequeAmount = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ChequeAmount']));
  $oldcheque = htmlspecialchars(mysqli_real_escape_string($db, $_POST['oldcheque']));
  $ChequeInBy = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ChequeInBy']));
  $Remarks = htmlspecialchars(mysqli_real_escape_string($db, $_POST['Remarks']));

  $uploads_dir = 'C:\xampp\htdocs\ERP\Cheque';
  if($_FILES['cheque']['name']!=" "){
      if($_FILES['cheque']['error']==0) {
          $image = rand(111111111,999999999).'_'.$_FILES['cheque']['name'];
          //echo $image;
          //print_r($image) ; 
          move_uploaded_file ($_FILES['cheque']['tmp_name'],"$uploads_dir/$image");
        } else {
          echo "error";
          print_r($_FILES['cheque']['error']);
        }
      }
  $s="SELECT ID FROM `memberinfo` WHERE MemberID='$MemberID'";
  $result = mysqli_query($db,$s);

  if ($results -> num_rows > 0) {
    //output data of each row
   while($row = $results->fetch_assoc()) {
    $sql = "INSERT INTO `chequetable`(`MemberID`, `ADOrRCS`, `Type`, `Bank`, `ChequeNo`, `Amount`, `ReceiveDate`, `ChequeDate`, `OldChequeNo`, `ChequeInBy`,`Remarks`, `Attachment`) VALUES ('$row[ID]','$ADORRCS','$Chequetype','$BankName','$ChequeNo','$ChequeAmount','$ChequeReceiveDate','$ChequeDate','$oldcheque','$ChequeInBy','$Remarks','$image')";

    $res = mysqli_query($db,$sql);
   }
  }
  $db->close();
}
if (isset($_POST['ChequeUpdate'])) {
  
  $MemberID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberID']));
  $BankName = htmlspecialchars(mysqli_real_escape_string($db, $_POST['BankName']));
  $ADORRCS = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ADORRCS']));
  $Chequetype = htmlspecialchars(mysqli_real_escape_string($db, $_POST['Chequetype']));
  $ChequeNo = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ChequeNo']));
  $ChequeReceiveDate = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ChequeReceiveDate']));
  $ChequeDate = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ChequeDate']));
  $ChequeAmount = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ChequeAmount']));
  $oldcheque = htmlspecialchars(mysqli_real_escape_string($db, $_POST['oldcheque']));
  $ChequeInBy = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ChequeInBy']));
  $Remarks = htmlspecialchars(mysqli_real_escape_string($db, $_POST['Remarks']));
  $ChequeHonoredDate = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ChequeHonoredDate']));
  $ChequedishonoredDate = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ChequedishonoredDate']));
  $s= "SELECT ID FROM `memberinfo` WHERE MemberID='$MemberID'";
  $result = mysqli_query($db,$s);

  if ($results -> num_rows > 0) {
    //output data of each row
   while($row = $results->fetch_assoc()) {
    $sql = "UPDATE `chequetable` SET `ChequeHonoredDate`='$ChequeHonoredDate',`ChequeDishonoredDate`='$ChequedishonoredDate',`Remarks`='$Remarks', `Process`='0' WHERE `ChequeNo`= $ChequeNo AND `MemberID`='$row[ID]'";

    $res = mysqli_query($db,$sql);
   }
  }
  currency_system();
  $db->close();
}

//---------------------------------------------------------------------------------------------------------------------
//-----------------------------------------------ADOpt Insert,Update,Delete--------------------------------------------
//---------------------------------------------------------------------------------------------------------------------

if (isset($_POST['ADInsert'])) {

  $MemberID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberID']));
  $ReceivingDate = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ReceivingDate']));
  $ReceivingAmount = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ReceivingAmount']));
  $ReceivingTool = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ReceivingTool']));
  $EmployeeID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeID']));

  $s= "SELECT ID FROM `memberinfo` WHERE MemberID='$MemberID'";
  $result = mysqli_query($db,$s);

  if ($results -> num_rows > 0) {
    //output data of each row
   while($row = $results->fetch_assoc()) {
 
    $sql = "INSERT INTO `adopt`(`MemberID`, `ReceivedDate`, `ReceivingAmount`, `ReceivingTool`, `InsertEmpID`) VALUES ('$row[ID]','$ReceivingAmount','$ReceivingDate','$ReceivingTool','$EmployeeID')";

    $res = mysqli_query($db,$sql);
    if($ReceivingTool== "Cheque")
      {
          header('location: Cheque-management.php');
      }
    else{
      currency_system();
    }
  }
  }else{
   echo "0 results";
  }
  $db->close();
}

if (isset($_POST['ADUpdate'])) {

  $MemberID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberID']));
  $ReceivingDate = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ReceivingDate']));
  $ReceivingAmount = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ReceivingAmount']));
  $ReceivingTool = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ReceivingTool']));
  $EmployeeID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeID']));

 
  $s= "SELECT ID FROM `memberinfo` WHERE MemberID='$MemberID'";
  $result = mysqli_query($db,$s);

  if ($results -> num_rows > 0) {
    //output data of each row
   while($row = $results->fetch_assoc()) {
 
    $sql = "UPDATE `adopt` SET `RecevingAmount`='$ReceivingAmount',`ReceivingDate`='$ReceivingDate',`ReceivingTool`='$ReceivingTool', `UpgradeEmpID`='$EmployeeID' WHERE `MemberID`='$row[ID]' AND `ReceivingDate`='$ReceivingDate'";

    $res = mysqli_query($db,$sql);
    if($ReceivingTool== "Cheque")
      {
          header('location: Cheque-management.php');
      }
    else{
      currency_system();
  }
  }
  }else{
   echo "0 results";
  }
  $db->close();
}

if (isset($_POST['ADDelete'])) {

  $MemberID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberID']));
  $ReceivingDate = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ReceivingDate']));
  $ReceivingAmount = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ReceivingAmount']));
  $ReceivingTool = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ReceivingTool']));
  $EmployeeID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeID']));

  $s= "SELECT ID FROM `memberinfo` WHERE MemberID='$MemberID'";
  $results = mysqli_query($db,$s);

  if ($results -> num_rows > 0) {
    //output data of each row
      while($row = $results->fetch_assoc()) {

        $sql1 = "SELECT `ID` FROM `adopt` WHERE  `MemberID`='$row[ID]' AND `RecevingAmount`='$ReceivingAmount' AND `ReceivingDate`='$ReceivingDate' AND `ReceivingTool`='$ReceivingTool'";
        //echo "$sql1";
        $result = $db->query($sql1);
        //echo "$results";
        if ($result -> num_rows > 0) {
          //output data of each row
          while($ro = $results->fetch_assoc()) {

          $sqli = "DELETE FROM `adopt` WHERE `ID`= '$ro[ID]'";
          $res = mysqli_query($db,$sqli);
          }
        }else{
          echo "0 results";
        }
      }
  }else{
    echo "0 results";
   }
 $db->close();
}



//---------------------------------------------------------------------------------------------------------------------
//-----------------------------------------------RCSOpt Insert,Update,Delete--------------------------------------------
//---------------------------------------------------------------------------------------------------------------------

if (isset($_POST['RCSInsert'])) {
  $MemberID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberID']));
  $ReceivingDate = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ReceivingDate']));
  $ReceivingAmount = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ReceivingAmount']));
  $ReceivingTool = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ReceivingTool']));
  $EmployeeID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeID']));

  $s= "SELECT ID FROM `memberinfo` WHERE MemberID='$MemberID'";
  $result = mysqli_query($db,$s);

  if ($results -> num_rows > 0) {
    //output data of each row
   while($row = $results->fetch_assoc()) {
 
    $sql = "INSERT INTO `rcsopt`(`MemberID`, `ReceivedDate`, `ReceivingAmount`, `ReceivingTool`, `InsertEmpID`) VALUES ('$row[ID]','$ReceivingAmount','$ReceivingDate','$ReceivingTool','$EmployeeID')";

    $res = mysqli_query($db,$sql);
    if($ReceivingTool== "Cheque")
      {
          header('location: Cheque-management.php');
      }
    else{
      currency_system();

      }
  }
  }else{
   echo "0 results";
  }
  $db->close();
 

  
}

if (isset($_POST['RCSUpdate'])) {

  $MemberID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberID']));
  $ReceivingDate = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ReceivingDate']));
  $ReceivingAmount = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ReceivingAmount']));
  $ReceivingTool = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ReceivingTool']));
  $EmployeeID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeID']));

 
  $s= "SELECT ID FROM `memberinfo` WHERE MemberID='$MemberID'";
  $result = mysqli_query($db,$s);

  if ($results -> num_rows > 0) {
    //output data of each row
   while($row = $results->fetch_assoc()) {
 
    $sql = "UPDATE `rcsopt` SET `RecevingAmount`='$ReceivingAmount',`ReceivingDate`='$ReceivingDate',`ReceivingTool`='$ReceivingTool', `UpgradeEmpID`='$EmployeeID' WHERE `MemberID`='$row[ID]' AND `ReceivingDate`='$ReceivingDate'";

    $res = mysqli_query($db,$sql);
    if($ReceivingTool== "Cheque")
      {
          header('location: Cheque-management.php');
      }
    else{
      currency_system();
      }
  }
  }else{
   echo "0 results";
  }
  $db->close();
 
 
  
}

if (isset($_POST['RCSDelete'])) {

  $MemberID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['MemberID']));
  $ReceivingDate = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ReceivingDate']));
  $ReceivingAmount = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ReceivingAmount']));
  $ReceivingTool = htmlspecialchars(mysqli_real_escape_string($db, $_POST['ReceivingTool']));
  $EmployeeID = htmlspecialchars(mysqli_real_escape_string($db, $_POST['EmployeeID']));

  $s= "SELECT ID FROM `memberinfo` WHERE MemberID='$MemberID'";
  $results = mysqli_query($db,$s);

  if ($results -> num_rows > 0) {
    //output data of each row
      while($row = $results->fetch_assoc()) {

        $sql1 = "SELECT `ID` FROM `rcsopt` WHERE  `MemberID`='$row[ID]' AND `RecevingAmount`='$ReceivingAmount' AND `ReceivingDate`='$ReceivingDate' AND `ReceivingTool`='$ReceivingTool'";
        //echo "$sql1";
        $result = $db->query($sql1);
        //echo "$results";
        if ($result -> num_rows > 0) {
          //output data of each row
          while($ro = $results->fetch_assoc()) {

          $sqli = "DELETE FROM `rcsopt` WHERE `ID`= '$ro[ID]'";
          $res = mysqli_query($db,$sqli);
          }
        }else{
          echo "0 results";
        }
      }
  }else{
    echo "0 results";
   }
 $db->close();
}

//---------------------------------------------------------------------------------------------------------------------
//-----------------------------------------------Monthly Action--------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------

if (isset($_POST['RCS_Action'])) {
  $RCSMonth = htmlspecialchars(mysqli_real_escape_string($db, $_POST['RCSMonth']));
  $RCSNextMonth = date("y-m-d",strtotime($RCSMonth.'1 month'));
  //echo "$RCSNextMonth";
  $sql = "SELECT `ID`, `RCS` FROM `memberinfo`";

  $result = $db->query($sql);
  if ($result->num_rows > 0) {
   //output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

   $sqli = "INSERT INTO `tabrcsmaster`(`MemberID`, `RCSMonth`, `AmtRCSToBePaid`) VALUES ('$row[ID]','$RCSNextMonth','$row[RCS]')";
   $res = mysqli_query($db,$sqli);
 }
}else {
  echo "0 results 5";
}
currency_system();
$db->close();
}

function currency_system(){


  $rcsopt = "SELECT SUM(`RecevingAmount`) as amount, `MemberID` FROM `rcsopt` WHERE `ReceivingTool` = 'Cash'  GROUP BY `MemberID`";
   $result1 = $db->query($rcsopt);
   if ($result1->num_rows > 0) {
    //echo "$result1->num_rows";
   while($row1 = $result1->fetch_assoc()) {
    //echo $row1[MemberID];
    $rcstrack1 = "UPDATE `tabpaymenttrack` SET `RCSCash`='$row1[amount]' WHERE `MemberID` = '$row1[MemberID]'";
    $r1 = mysqli_query($db,$rcstrack1);

   }
 }else {
  echo "0 results 1";
}

$adopt = "SELECT SUM(`ReceivingAmount`) as amount, `MemberID` FROM `adopt` WHERE `ReceivingTool` = 'Cash'  GROUP BY `MemberID`";
   $resultad = $db->query($adopt);
   if ($resultad->num_rows > 0) {
    //echo "$result1->num_rows";
   while($row = $resultad->fetch_assoc()) {
    //echo $row1[MemberID];
    $adtrack1 = "UPDATE `tabpaymenttrack` SET `ADCash`='$row[amount]' WHERE `MemberID` = '$row[MemberID]'";
    $r1 = mysqli_query($db,$adtrack1);

   }
 }else {
  echo "0 results 2";
}

   $rcscheque = "SELECT SUM(`Amount`) as amount, `MemberID` FROM `chequetable` WHERE `ChequeHonoredDate` IS NOT NULL AND `ADOrRCS` = 'RCS' GROUP BY `MemberID`";
   $result2 = $db->query($rcscheque);
   if ($result2->num_rows > 0) {
    //echo "$result2->num_rows";
   while($row2 = $result2->fetch_assoc()) {
    //echo $row2[amount];
    $rcstrack2 = "UPDATE tabpaymenttrack SET RCSCheque='$row2[amount]' WHERE  MemberID = '$row2[MemberID]'";
    $r2 = $db->query($rcstrack2);

   }
 }else {
  //echo "0 results 3";
}

$adcheque = "SELECT SUM(`Amount`) as amount, `MemberID` FROM `chequetable` WHERE `ChequeHonoredDate` IS NOT NULL AND `ADOrRCS` = 'AD' GROUP BY `MemberID`";
   $resultad = $db->query($adcheque);
   if ($resultad->num_rows > 0) {
    //echo "$result2->num_rows";
   while($row = $resultad->fetch_assoc()) {
    //echo $row2[amount];
    $adtrack2 = "UPDATE tabpaymenttrack SET ADCheque='$row[amount]' WHERE  MemberID = '$row[MemberID]'";
    $r2 = $db->query($adtrack2);

   }
 }else {
  //echo "0 results 4";
}

   $rcstotal = "SELECT `MemberID`, SUM(`RCSCash`+ `RCSCheque`) AS rcstotal FROM `tabpaymenttrack` GROUP BY `MemberID` ";
   $resultrcstotal = $db->query($rcstotal);
   while($row2 = $resultrcstotal->fetch_assoc()) {
    $rcstrack3 = "UPDATE `tabpaymenttrack` SET `RCSTotal`='$row2[rcstotal]' WHERE  `MemberID` = '$row2[MemberID]' ";
    $r3 = $db->query($rcstrack3);
   }

   $adtotal = "SELECT `MemberID`, SUM(`ADCash`+ `ADCheque`) AS adtotal FROM `tabpaymenttrack` GROUP BY `MemberID` ";
   $resultadtotal = $db->query($adtotal);
   while($row = $resultadtotal->fetch_assoc()) {
    $adtrack3 = "UPDATE `tabpaymenttrack` SET `ADTotal`='$row[adtotal]' WHERE  `MemberID` = '$row[MemberID]' ";
    $r3 = $db->query($adtrack3);
   }


   
 

  $rcsmaster = "SELECT COUNT(`RCSMonth`) AS total_month, SUM(`AmtRCSToBePaid`) AS total_amount, MemberID FROM `tabrcsmaster` GROUP BY `MemberID`";
  $result3 = $db->query($rcsmaster);
  if ($result3->num_rows > 0) {
     //output data of each row
      //echo "$result3->num_rows";

  while($rows = $result3->fetch_assoc()) {
      //echo "<tr><td>".$rows["total_month"]."</td><td>".$rows["total_amount"]."</td></tr>";
       //echo "$rows[total_month]";

       $sqli1 ="UPDATE `tabrcsaccounts` SET `TotalRCSMonth` = '$rows[total_month]',`TotalRCSAmount` = '$rows[total_amount]' WHERE  `MemberID` = '$rows[MemberID]'";

       $ress = mysqli_query($db,$sqli1);

     }
   }else {
  echo "0 results 6";
}

  $rcstotal1 = "SELECT `MemberID`, `RCSTotal` FROM `tabpaymenttrack` GROUP BY `MemberID` ";
  $resultrcstotal1 = $db->query($rcstotal1);
  while($row2 = $resultrcstotal1->fetch_assoc()) {
    $rcstrack3 = "UPDATE `tabrcsaccounts` SET `TotalRCSPaid`='$row2[RCSTotal]' WHERE  `MemberID` = '$row2[MemberID]' ";
    $r4 = $db->query($rcstrack3);
   }
  $rcsdues = "SELECT `MemberID`, (TotalRCSAmount - TotalRCSPaid) AS dues FROM `tabrcsaccounts` GROUP BY `MemberID` ";
  $resuldues = $db->query($rcsdues);
  while($row2 = $resuldues->fetch_assoc()) {
    //echo "$row2[dues]";
    $rcstrack3 = "UPDATE `tabrcsaccounts` SET `TotalDuesRCS`='$row2[dues]' WHERE  `MemberID` = '$row2[MemberID]' ";
    $r5 = $db->query($rcstrack3);
   }


  $rcstotal2 = "SELECT `MemberID`,`TotalRCSAmount`, `TotalRCSPaid`, `TotalDuesRCS` FROM `tabrcsaccounts` GROUP BY`MemberID`";
  $resultrcstotal2 = $db->query($rcstotal2);
  while($row2 = $resultrcstotal2->fetch_assoc()) {
    $rcstrack3 = "UPDATE `tabmembadrcstotal` SET `TotalRCS`='$row2[TotalRCSAmount]',`TotalPaidRCS`='$row2[TotalRCSPaid]',`TotalDueRCS`='$row2[TotalDuesRCS]' WHERE `MemberID` = '$row2[MemberID]' ";
    $r4 = $db->query($rcstrack3);
   }

  $adtotal2 = "SELECT `MemberID`,`ADTotal` FROM `tabpaymenttrack` GROUP BY`MemberID`";
  $resultadtotal2 = $db->query($adtotal2);
  while($row2 = $resultadtotal2->fetch_assoc()) {
    $rcstrack3 = "UPDATE `tabmembadrcstotal` SET `TotalPaidAD` = '$row2[ADTotal]' WHERE `MemberID` = '$row2[MemberID]' ";
    $r4 = $db->query($rcstrack3);
   }
  $addues2 = "SELECT `MemberID`, (`TotalAD`- `TotalPaidAD`) AS dues FROM `tabmembadrcstotal` GROUP BY`MemberID`";
  $resultaddues2 = $db->query($addues2);
  while($row2 = $resultaddues2->fetch_assoc()) {
    $rcstrack3 = "UPDATE `tabmembadrcstotal` SET `TotalDueAD` = '$row2[dues]' WHERE `MemberID` = '$row2[MemberID]' ";
    $r4 = $db->query($rcstrack3);
   }



}


?>