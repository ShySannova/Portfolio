<?php
use PHPMailer\PHPMailer\PHPMailer;
if (isset($_POST['submit'])) {
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    // post value
     $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    $subject = "Mail From My Website";
    // $mailTo = "example@nomail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You Have Received e-amil from ".$name.".\n\n".$message;




    $email=new PHPMailer();

    // smtp seting for email
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = '';
    $mail->Password = '';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $email->isHTML(true);
    $email->setFrom($mailFrom);
    $email->addAddress($mailFrom);
    $email->Subject=("$subject");
    $email->ody=$txt;
   

    if ( $email->send()) {
        echo '<script type="text/javascript">alert("Message Sent Successfully")</script>';
    }
    else{
        echo '<script type="text/javascript">alert("Submission Failed! Try Again...!")</script>';
    }
}