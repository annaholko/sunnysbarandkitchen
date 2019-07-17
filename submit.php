<?php
$secret = $_POST["secret"];
$response = $_POST["response"];
$url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response;
$verify = file_get_contents($url);
echo $verify;

$message = "email was successfully sent";
$error = false;
if(empty($name)||empty($subject) | empty($email) | empty($message) | emapty($phone)){
    $message = "You forgot to enter your information";
    $error = true;
}

if(isset($_POST['email'])) {
    /*var_dump($_POST);*/
    $name = $_POST ['name'];
    $subject = $_POST ['subject'];
    $from = $_POST ['email'];
    $message = $_POST ['message'];
    $phone = $_POST ['phone'];

    $mailTo ="info@sunnysbarandkitchen.com";
    $headers = "From: ".$from;
    $txt = "You have received an email from ".$name.".\n\n".$message;
    
    
    mail($mailTo,$subject,$txt, $headers); 
}
$data = {message: $message};
    if($error){
        http_response_code(400)
    } 
    header('Content-Type: application/json');
    echo json_encode($data);
?>