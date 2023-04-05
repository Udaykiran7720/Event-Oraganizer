<?php
    $conn = mysqli_connect('localhost','root','','yourstory');
    if($conn){
        echo"connected";
    }
    else{
        echo"not connected";
    }
?>