<?php
//error_reporting(0);
$has_error = false;
// first-name, last-name, make,phone, email,description    
if(isset($_POST['submit'])) {
    //fname
    if(empty($_POST['first-name'])) {
        $error_name = "Please enter your first name!!";
        $has_error = true;
    } 
    else {
        $name = filter_user_input($_POST['first-name']);
    }
    
    //last-name
    if(empty($_POST['last-name'])) {
        $error_name = "Please enter your name!!";
        $has_error = true;
    } 
    else {
        $name = filter_user_input($_POST['last-name']);
    }
    
    //description
    if(empty($_POST['description'])) {
        $error_name = "Please enter a description!!";
        $has_error = true;
    } 
    else {
        $name = filter_user_input($_POST['description']);
    }
    
    //make
    if(empty($_POST['make'])) {
        $error_name = "Please enter the make of your device!!";
        $has_error = true;
    } 
    else {
        $name = filter_user_input($_POST['make']);
    }
    //

    if(empty($_POST['email'])) {
        $error_email = "Please enter email!!";
        $has_error = true;
    }
    else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $error_email = "Please enter valid email!!";
        $has_error = true;
    } 
    else {
        $email = filter_user_input($_POST['email']);
    }
    //

    if(empty($_POST['phone'])) {
        $error_subject = "Please enter your phone number!!";
        $has_error = true;
    } 
    else{
        $subject = filter_user_input($_POST['subject']);
    }
    
    //error handler
    if(!$has_error){
        if(insert_into_db($name, $email, $subject, $message)){
            if(send_email($name, $email, $subject, $message)){
                $msg = "success"; 
            } 
            else{
                $msg ="error_email";
            }
        } 
        else {
            $msg= "error_db";
        } 
        header("Location:contact.php?msg=$msg");
    }
    
} # End of POST


# Sanitising user input

function filter_user_input($data, $type="") {
    $data = trim($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data);

    if($type == "message"){
        $data = addslashes($data);
    } 

    elseif($type==""){
        $data = stripslashes($data);
    }

    return $data;
} # End of filter_user_input function


function insert_into_db($name, $email, $subject, $message){
    global $conn;

    $sql=  "INSERT INTO contact(name, email, subject, message)
    values ('$name','$email', '$subject', '$message')";

    $result = mysqli_query($conn, $sql);
    if(mysqli_affected_rows($conn) >0){
        return true;
    } 
    else {
        return false;
    }
} # End of insert_into_db function 


function send_email($name, $email, $user_subject, $message){
    $to = "logomoniclearning@gmail.com";
    $subject = "User Contact info";
    $message = " You have received an email from : <br><b>"
    ." Name: "  .$name. "<br>"
    ." Email: ".$email. "<br>"
    ." Subject: " .$user_subject. "<br>"
    ." Message: ".$message. "</b><br>";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: logomoniclearning@gmail.com" . "\r\n" ;

    if(mail($to,$subject,$message,$headers)){
        return true;
    } 
    else {
        return false;
    }
}
?>

