<?php
    session_start();
    include "contact.php";
    $fullname = $_POST['fullname'];
    $phoneno = $_POST['phoneno'];
    $emailid = $_POST['emailid'];
    $message = $_POST['message '];

    $sql="insert into contact_us(fullname, phoneno, emailid, message)values('$fullname','$phoneno','$email','$message')";
    $result=mysqli_query($con,$sql);

    if($result)
    {
        header("location:loginpage.php");

    }
    else
    {
        echo"error";
    }
    
    /*database connection
    */
?>