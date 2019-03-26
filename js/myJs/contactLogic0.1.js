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
    if($phone.val()=="" || phone.val().length<10){
      errPhone="Please enter a valid phone number";
      showError($phone,errPhone);
    }
    else{
      phoneVal=phone.val();
      errPhone="";
    }

  // // 7 email
    // let atpos = $email.val().indexOf("@");
    // let dotpos = $email.val().lastIndexOf(".");
    
    // if (email.val() =="") {
       
    //     error_email ="Email must be filled out";
    //     email.focus();
    //     hasError = true;
    //     // return false;
    // } 
    // else if (atpos < 1 || (dotpos - atpos < 2)) {
    //     console.log(dotpos - atpos)
    //     errEmail =  "Please enter correct email ID";
    //     email.focus();
    //     hasError = true;
    //     // return false;
    // } 
    // else {
    //     emailVal = email.val();
    //     errEmail = "";
    // }
    
    
  //   //8 consent
  //   if(!consent.checked){
  //     consent.focus();
  //     errConsent="Please tick to consent";
  //     hasError=true;
  //     // return false;
  //   } 
  //   else{
  //     errConsent="";
  //   }
  
  //9 finale
  if(hasError==true){
    return false;
  }
}

function showError(el, msg){
    el.next(".ui.error").html(msg).show();
}















 // //NOT WORKING    
    // //   $('.ui.form')
    // //           .form({
    // //             fields: {
    // //               // enquiry, model, first-name, last-name, email, phone, consent
                  
    // //               enquiry: {
    // //                 identifier  : 'enquiry',
    // //                 rules: [
    // //                   {
    // //                     type   : 'empty',
    // //                     prompt : 'Please enter the purpose of your enquiry'
    // //                   }
    // //                 ]
    // //               },

    // //               model: {
    // //                 identifier  : 'model',
    // //                 rules: [
    // //                   {
    // //                     type   : 'empty',
    // //                     prompt : 'Please enter the model number of your computer/laptop'
    // //                   }
    // //                 ]
    // //               },

    // //               first-name: {
    // //                 identifier  : 'first-name',
    // //                 rules: [
    // //                   {
    // //                     type   : 'empty',
    // //                     prompt : 'Please enter your first name'
    // //                   }
    // //                 ]
    // //               },

    // //               last-name: {
    // //                 identifier  : 'last-name',
    // //                 rules: [
    // //                   {
    // //                     type   : 'empty',
    // //                     prompt : 'Please enter your first name'
    // //                   }
    // //                 ]
    // //               },

    // //               email: {
    // //                 identifier  : 'email',
    // //                 rules: [
    // //                   {
    // //                     type   : 'empty',
    // //                     prompt : 'Please enter your e-mail'
    // //                   },
    // //                   {
    // //                     type   : 'email',
    // //                     prompt : 'Please enter a valid e-mail'
    // //                   }
    // //                 ]
    // //               },


    // //               phone: {
    // //                 identifier  : 'phone',
    // //                 rules: [
    // //                   {
    // //                     type   : 'empty',
    // //                     prompt : 'Please enter your e-mail'
    // //                   },
    // //                   {
    // //                     type   : 'phone',
    // //                     prompt : 'Please enter a valid phone number'
    // //                   }
    // //                 ]
    // //               },

    // //               consent:{
    // //                 identifier:'consent',
    // //                 rules:[
    // //                   {
    // //                     type:'checked',
    // //                     prompt:'you must agree to the terms'
    // //                   }
    // //                 ]
    // //               }
    // //             }
    // //           });
      
    // //   $("#enquiry").selectmenu();

    // // })

    // // $("#submit").on("submit", function(e){
    // //   e.preventDefault();
    // //   // enquiry, model, description, first-name, consent, email, phone
    // //   var enquiry, model, description, fname, sname, email, phone, consent;


    // //   alert("hello");
    // // })

    //   // $('#form .dropdown.icon').click(function(){
    //   //   $(".menu").show()
    //   });