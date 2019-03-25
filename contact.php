
  
<?php 
    include_once ("header.php")
?>

<main class="contact">
<div class="container">
  <div class="wrapper grid">
    <section id="opening">opening</section>
    <section id="address">address</section>
    <section id="service-area"><button>Service Area</button></section>
    <section id="call">call</section>
    <section id="mail">mail</section>
    <section id="share">share</section>
    <section id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2629977.6105622104!2d15.369873000000002!3d49.93000800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2scz!4v1552141263491" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></section>
    <section id="form">
      <form id="inner-form" class="ui large form">
        <div class="ui error message"></div>
        <div class="field">
        
        <label for="enquiry">How can we help?</label>
        <select name="enquiry" id="enquiry">
          <option>Laptop Repair</option>
          <option>Desktop Repair</option>
          <option>Virus Removal</option>
          <option>Data Recovery</option>
          <!-- <option selected="selected">Medium</option> -->
        </select>

        </div>

        <div class="field">
            <label>Make/Model</label>
            <input type="text" name="model" placeholder="Make/Model">
        </div>
        
      <div class="field">
          <label>Brief Description</label>
          <textarea name="description" id="description"></textarea>
        </div>

        <div class="field">
          <label>Name</label>
          <div class="two fields">
            <div class="field">
              <input type="text" name="first-name" placeholder="First Name">
            </div>
            
            <div class="field">
              <input type="text" name="last-name" placeholder="Last Name">
            </div>
          </div><!-- end of two field  -->
        </div><!-- end of field (one field containing two fieldcontainer with 2 fields) -->

        <div class="field">
            <label>Phone</label>
            <input type="text" name="phone" placeholder="Phone number">
        </div>

        <div class="field">
            <label>Email</label>
            <input type="text" name="email" placeholder="Email">
        </div>
         
         <div class="ui segment">
          <div class="field">
            <div class="ui checkbox">
              <input type="checkbox" name="consent" tabindex="0">
              <label>I consent that meteor saves your data to contact you</label>
            </div>
          </div>
        </div><!--end of ui segment  -->

        <input type="submit" id="submit" class="ui primary button" tabindex="0" value="Submit">

      
    </form>
  </section>
  </div>
</div>
  </main>
<script>
document.getElementById("submit").addEventListener("submit", function(){
  e.preventDefault();
  console.log('hello')
  validateForm();
})

var errEnquiry, errModel, errFName, errLName, errEmail, errPhone, errConsent;

function validateForm(){
  var enquiry, model, firstName, lastName, email, phone, consent;
  
  enquiry=document.getElementById('enquiry').value;
  model==document.getElementById('model').value;
  firstName=document.getElementById('first-name').value;
  lastName=document.getElementById('last-name').value;
  email=document.getElementById('email').value;
  phone=document.getElementById('phone').value;
  consent=document.getElementById('consent').value;

  if(enquiry==null || enquiry.value==""){
    hasError=true;
    errEnquiry="Please select the nature of your enquiry";
    enquiry.focus
  }
}

  function showErrors(){

  }



$(document).ready(function() {
    



    //NOT WORKING    
    //   $('.ui.form')
    //           .form({
    //             fields: {
    //               // enquiry, model, first-name, last-name, email, phone, consent
                  
    //               enquiry: {
    //                 identifier  : 'enquiry',
    //                 rules: [
    //                   {
    //                     type   : 'empty',
    //                     prompt : 'Please enter the purpose of your enquiry'
    //                   }
    //                 ]
    //               },

    //               model: {
    //                 identifier  : 'model',
    //                 rules: [
    //                   {
    //                     type   : 'empty',
    //                     prompt : 'Please enter the model number of your computer/laptop'
    //                   }
    //                 ]
    //               },

    //               first-name: {
    //                 identifier  : 'first-name',
    //                 rules: [
    //                   {
    //                     type   : 'empty',
    //                     prompt : 'Please enter your first name'
    //                   }
    //                 ]
    //               },

    //               last-name: {
    //                 identifier  : 'last-name',
    //                 rules: [
    //                   {
    //                     type   : 'empty',
    //                     prompt : 'Please enter your first name'
    //                   }
    //                 ]
    //               },

    //               email: {
    //                 identifier  : 'email',
    //                 rules: [
    //                   {
    //                     type   : 'empty',
    //                     prompt : 'Please enter your e-mail'
    //                   },
    //                   {
    //                     type   : 'email',
    //                     prompt : 'Please enter a valid e-mail'
    //                   }
    //                 ]
    //               },


    //               phone: {
    //                 identifier  : 'phone',
    //                 rules: [
    //                   {
    //                     type   : 'empty',
    //                     prompt : 'Please enter your e-mail'
    //                   },
    //                   {
    //                     type   : 'phone',
    //                     prompt : 'Please enter a valid phone number'
    //                   }
    //                 ]
    //               },

    //               consent:{
    //                 identifier:'consent',
    //                 rules:[
    //                   {
    //                     type:'checked',
    //                     prompt:'you must agree to the terms'
    //                   }
    //                 ]
    //               }
    //             }
    //           });
      
    //   $("#enquiry").selectmenu();

    // })

    // $("#submit").on("submit", function(e){
    //   e.preventDefault();
    //   // enquiry, model, description, first-name, consent, email, phone
    //   var enquiry, model, description, fname, sname, email, phone, consent;


    //   alert("hello");
    // })

      // $('#form .dropdown.icon').click(function(){
      //   $(".menu").show()
      });
      
</script>
<!-- <script src="js/myJs/submitionFormLogic.js"></script> -->
<script src="js/assets/components/form.js"></script>
<!-- C:\xampp\htdocs\Meteor\js\assets\components -->
<?php
    include_once ("footer.php");
?>
