<?php
require_once("connect.php");

if(isset($_REQUEST["fname"]) && isset($_REQUEST["lname"]) && isset($_REQUEST["email_addr"]) && isset($_REQUEST["mobile"]) && isset($_REQUEST["comment"])){

    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $email_addr = $_REQUEST["email_addr"];
    $mobile = $_REQUEST["mobile"];
    $comment = $_REQUEST["comment"];
    
    if($fname != "" && $lname != "" && $email_addr != "" && $mobile != "" && $comment != ""){
    
    $insert_query = "INSERT INTO `users_info` ( `fname`, `lname`, `email_addr`, `mobile`, `comment`) VALUES ( '$fname', '$lname', '$email_addr', '$mobile', '$comment')";
    $run_query = mysqli_query ($connect, $insert_query );
    
     header("location: index.php?action=true");
    }

    else{
        header("location: index.php?action=false");
    }
}



?>
