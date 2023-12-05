<?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
       
        $subscriber_email = $_POST['subscriber_email'];

        if(empty($subscriber_email)) {
            
        }
    }

    else {
        header("Location: ../index.php");
        die();
    }