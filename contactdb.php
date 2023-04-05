<?php
    session_start();
    include "connection.php";
    $fullname = $_POST['fullname'];
    $phoneno = $_POST['phoneno'];
    $emailid = $_POST['emailid'];
    $message = $_POST['message'];

    $sql="insert into contact_us(fullname, phoneno, emailid, message)values('$fullname','$phoneno','$emailid','$message')";
    $result=mysqli_query($conn,$sql);

    if($result)
    {      
        header("location:confirm.php");
    }
    else
    {
        echo"error";
    }
?>