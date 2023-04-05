<?php
    session_start();
    include "connection.php";
    $booker_name = $_POST['booker_name'];
    $phone_no = $_POST['phone_no'];
    $booker_address = $_POST['booker_address'];
    $event_name = $_POST['event_name'];
    $event_location = $_POST['event_location'];
    $email_id = $_POST['email_id'];
    $event_date = $_POST['event_date'];
    $no_of_guest = $_POST['no_of_guest'];
    $event_description = $_POST['event_description'];

    $sql="insert into booking(booker_name, phone_no, booker_address, event_name, event_location, email_id, event_date, no_of_guest, event_description)values('$booker_name','$phone_no','$booker_address','$event_name','$event_location','$email_id','$event_date','$no_of_guest','$event_description')";
    $r=mysqli_query($conn,$sql);

    if($r)
    {      
        header("location:confirm.php");
    }
    else
    {
        echo"error";
    }
?>