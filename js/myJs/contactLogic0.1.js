// document.getElementById("test").addEventListener("click", function(){
//   // alert('hello');
//   document.getElementById('err-email').innerHTML="this is a test error";
// })

document.getElementById("inner-form").addEventListener("submit", function(e){
  e.preventDefault();
  // console.log('hello');
  validateForm();
})

var hasError=false;
// error variables
var errEnquiry, errModel, errFName, errLName, errEmail, errPhone, errDescription, errConsent=undefined;
//user input values
var enquiryVal, modelVal, descriptionVal, firstNameVal, lastNameVal, emailVal, phoneVal, consentVal=undefined;


function validateForm(){
  $('.ui.error.message').hide();
  //dom elements
  var enquiry, model, description, firstName, lastName, email, phone, consent;
  $enquiry=$('#enquiry');
  $model=$('#model');
  $description=$('#description');
  $firstName=$('#first-name');
  $lastName=$('#last-name');
  $email=$('#email');
  $phone=$('#phone');
  $consent=$('#consent');

  //1 enquiry
  if($enquiry.val()==""){
    hasError=true;
    errEnquiry="Please select the nature of your enquiry";
    $enquiry.next(".ui.error").html(errEnquiry).show();
  }
  else{
    enquiryVal=$enquiry.val();
  }
  
  //2 model
  if($model.val()==""){
    hasError=true;
    errModel="Please Enter the model number";
    showError($model,errModel);
  }
  else{
    modelVal=$model.val();
  }

  //3 description
  if($description.val()==""){
    hasError=true;
    errDescription="Please write a brief description of the problem";
    showError($description,errDescription);
  }
  else{
    modelVal=$model.val();
    errModel="";
  }

  // // 4 fname
  if($firstName.val()==""){
    hasError=true;
    errFName="Please enter your first name";
    showError($firstName,errFName);
  }
  else{
    firstNameVal=$firstName.val();
    errFName="";
  }
  
  //5 lastname
  if($lastName.val()==""){
    hasError=true;
    errLName="Please enter your last name";
    showError($lastName ,errLName);
  }
  else{
    lastNameVal=$lastName.val();
    errLName="";
  }
  

  //6 phone (needs fixing)
  // var phoneno = /^\d{10}$/;
  // if((inputtxt.value.match(phoneno))
  //       {
  //     return true;
  //       }
  //     else
  //       {
  //       alert("message");
  //       return false;
  //       }
    // var phoneDT=
    if($phone.val()==""){
      errPhone="Please enter a valid phone number";
      showError($phone,errPhone);
    }
    else if($phone.val()!==11 || typeof($phone.val())!=="number"){
      errPhone="Please enter a valid phone number";  
      showError($phone,errPhone);
    }
    else{
      phoneVal=phone.val();
      errPhone="";
    }

  // 7 email
    let atpos = $email.val().indexOf("@");
    let dotpos = $email.val().lastIndexOf(".");
    
    if ($email.val() =="") {
        errEmail ="Email must be filled out";
        showError($email,errEmail);
        hasError = true;
    } 
    else if (atpos < 1 || (dotpos - atpos < 2)) {
        console.log(dotpos - atpos)
        errEmail =  "Please enter correct email ID";
        showError($email,errEmail);
        hasError = true;
    } 
    else {
        emailVal = email.val();
        errEmail ="";
    }
    
    
    //8 consent
    if(!$consent.prop('checked')){
      // consent.focus();
      // console.log(typeof($consent.attr(checked))
      errConsent="Please tick to consent";
      hasError=true;
      showError($consent,errConsent);
    } 
    else{
      errConsent="";
    }
  
  //9 finale
  if(hasError==true){
    return false;
  }
}

function showError(el, msg){
    el.next(".ui.error").html(msg).show();
}
