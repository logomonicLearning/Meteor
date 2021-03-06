<?php 
    include_once ('dbCon.php');
?>

<?php
//error_reporting(0);
// $firstName = $lastName= $model = $email = $enquiry = $website = "";
$enquiry=$model=$description=$firstName=$lastName=$email=$phone=$consent="";
$error_enquiry=$error_model=$error_description=$error_firstname=$error_lastname=$error_email=$error_phone=$error_consent="";
$has_error = false;

if(isset($_POST['submit'])) {
    //1 enquirY
    if(empty($_POST['enquiry'])) {
        $error_enquiry = "enter the nature of your enquiry!!";
        $has_error = true;
    } 
    else {
        $enquiry = filter_user_input($_POST['enquiry']);
    }
    
    //2 fname
    if(empty($_POST['first-name'])) {
        $error_firstname = "Please enter your first name!!";
        $has_error = true;
    } 
    else {
        $firstName = filter_user_input($_POST['first-name']);
    }
    
    //3 last-name
    if(empty($_POST['last-name'])) {
        $error_lastname = "Please enter your name!!";
        $has_error = true;
    } 
    else {
        $lastName = filter_user_input($_POST['last-name']);
    }
    
    //4 description
    if(empty($_POST['description'])) {
        $error_description = "Please enter a description!!";
        $has_error = true;
    } 
    else {
        $description = filter_user_input($_POST['description'], "message");
    }
    
    // 5 model
    if(empty($_POST['model'])) {
        $error_model = "Please enter the make of your device!!";
        $has_error = true;
    } 
    else {
        $model = filter_user_input($_POST['model']);
    }
    
    //6 EMAIL
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

    //7 phone
    if(empty($_POST['phone'])) {
        $error_phone = "Please enter your phone number!!";
        $has_error = true;
    } 
    else{
        $phone = filter_user_input($_POST['phone']);
    }
    //8 consent
    if($_POST['consent'] !='yes') {
        $error_consent = "tick to consent!!";
        $has_error=true;
    }

    else{
      $consent="Yes";
    }

    //error handler
    if(!$has_error){
        if(insert_into_db($enquiry,  $model, $description, $firstName, $lastName,  $email, $phone)){
          
            if(send_email($enquiry,  $model, $description, $firstName, $lastName,  $email, $phone)){
                $msg = "success"; 
            } 
            else{
                $msg ="error_email";
            }
        } 
        else {
            $msg= "error_db";
        } 
        //turned off because the header has already been set  
        // header("Location:contact.php?msg=$msg");
    }
    
    
} # End of POST


# SANITISE USER INPUT
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



// ADD TO DATABASE
function insert_into_db($enquiry, $model, $description, $firstName, $lastName, $email, $phone){
    global $conn;

    $sql=  "INSERT INTO contact(enquiry, model, description, firstName, lastName, email, phone)
    VALUES ('$enquiry', '$model', '$description', '$firstName', '$lastName', '$email', '$phone')";

    $result = mysqli_query($conn, $sql);
    if(mysqli_affected_rows($conn) >0){
        return true;
    } 
    else {
        return false;
    }
} # End of insert_into_db function 

//SEND TO MAIL
function send_email($enquiry, $model, $description, $firstName, $lastName, $email, $phone){
    $to = "logomoniclearning@gmail.com";
    $subject = "User Contact info";
    $message = " You have received an email from : <br><b>"
    ." Name: "  .$firstName .$lastName. "<br>"
    ." Email: ".$email. "<br>"
    ." Regarding: " .$enquiry. "<br>"
    ." Description: ".$description. "</b><br>";
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



