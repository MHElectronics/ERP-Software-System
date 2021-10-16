<?php 
$db = mysqli_connect('localhost', 'root', '', 'mcl');
if($db-> connect_error){
    die("connection faild:".$db-> connect_error);
}
?>