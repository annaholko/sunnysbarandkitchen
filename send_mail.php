<?php
 if(isset) ($_POST['submit']) {
    $name = $_POST ['name'];
    $subject = $_POST ['subject'];
    $from = $_POST ['email'];
    $message = $_POST ['message'];
    $phone = $_POST ['phone'];

    $mailTo ="info@sunnysbarandkitchen.com";
    $headers = "From: ".$from;
    $txt = "You have received an email from ".$name.".\n\n".$message;
    
    
    
    mail($mailTo,$subject,$txt, $headers);
    header("Location: contactus.php?mailsend");
    
}
?>






