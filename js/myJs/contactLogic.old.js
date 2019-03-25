document.getElementById("test").addEventListener("click", function(){
  // alert('hello');
  document.getElementById('err-email').innerHTML="this is a test error";
})

document.getElementById("inner-form").addEventListener("submit", function(e){
  // e.preventDefault();
  // console.log('hello');
  validateForm();
})

var hasError=false;
//error variables
var errEnquiry, errModel, errFName, errLName, errEmail, errPhone, errDescription, errConsent=undefined;
//user input values
var enquiryVal, modelVal, descriptionVal, firstNameVal, lastNameVal, emailVal, phoneVal, consentVal=undefined;


function validateForm(){
  //dom elements
  var enquiry, model, description, firstName, lastName, email, phone, consent;
  enquiry=document.getElementById('enquiry');
  model=document.getElementById('model');
  description=document.getElementById('description');
  firstName=document.getElementById('first-name');
  lastName=document.getElementById('last-name');
  email=document.getElementById('email');
  phone=document.getElementById('phone');
  consent=document.getElementById('consent');

  //1 enquiry
  if(enquiry.value==""){
    hasError=true;
    errEnquiry="Please select the nature of your enquiry";
    enquiry.focus();
    // return false;
  }
  else{
    enquiryVal=enquiry.value;
    errEnquiry="";
  }
  
  //2 model
  if(model.value==""){
    hasError=true;
    errModel="Please Enter the model number";
    model.focus();
    // return false;
  }
  else{
    modelVal=model.value;
    errModel="";
  }

  //3 description
  if(description.value==""){
    hasError=true;
    errDescription="Please Enter the model number";
    model.focus();
    // return false;
  }
  else{
    modelVal=model.value;
    errModel="";
  }

  // 4 fname
  if(firstName.value==""){
    hasError=true;
    errFName="Please enter your first name";
    firstName.focus();
    // return false;
  }
  else{
    firstNameVal=firstName.value;
    errFName="";
  }
  
  //5 lastname
  if(lastName.value==""){
    hasError=true;
    errLName="Please enter your last name";
    lastName.focus();
    // return false;
  }
  else{
    lastNameVal=firstName.value;
    errLName="";
  }
  

  //6 phone (needs fixing)
    if(phone.value=="" || phone.value.length<10){
      phone.focus();
      errPhone="Please enter a valid phone number";
      // return false;
    }
    else{
      phoneVal=phone.value;
      errPhone="";
    }

  // 7 email
    atpos = email.value.indexOf("@");
    dotpos = email.value.lastIndexOf(".");
    
    if (email.value =="") {
       
        error_email ="Email must be filled out";
        email.focus();
        hasError = true;
        // return false;
    } 
    else if (atpos < 1 || (dotpos - atpos < 2)) {
        console.log(dotpos - atpos)
        errEmail =  "Please enter correct email ID";
        email.focus();
        hasError = true;
        // return false;
    } 
    else {
        emailVal = email.value;
        errEmail = "";
    }
    
    
    //8 consent
    if(!consent.checked){
      consent.focus();
      errConsent="Please tick to consent";
      hasError=true;
      // return false;
    } 
    else{
      errConsent="";
    }
  
  //9 finale
  if(hasError==true){
    showErrors()
    return false;
  }
}

  function showErrors(){
//     var errEnquiry, errModel, errFName, errLName, errEmail, errPhone, errConsent, errDescription
    document.getElementById("err-enquiry").html=errEnquiry
    document.getElementById("err-model").html=errModel
    document.getElementById("err-description").html=errDescription
      document.getElementById("err-fname").html=errFName
      document.getElementById("err-lname").html=errLName
      document.getElementById("err-email").html=errEmail
      document.getElementById("err-phone").html=errPhone
      document.getElementById("err-consent").html=errConsent

      document.queryselectorAll('.ui.error').style.display="block";
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