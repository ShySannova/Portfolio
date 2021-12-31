<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    $subject = "Mail From My Website";
    $mailTo = "example@nomail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You Have Received e-amil from ".$name.".\n\n".$message;


    $result = mail($mailTo, $subject, $txt, $headers);
    if ($result) {
        echo '<script type="text/javascript">alert("Message Sent Successfully")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("Submission Failed! Try Again...!")</script>';
    }
}