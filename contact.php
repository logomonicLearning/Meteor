
  
<?php 
    include_once ("header.php")
?>

<style type="text/css">
  .ui.error{
    /*display:none;*/
  }
</style>

<main class="contact">
<div class="container">
  <div class="wrapper grid">
    <section id="opening">opening</section>
    <section id="address">address</section>
    <section id="service-area"><button>Service Area</button></section>
    <section id="call">call</section>
    <section id="mail">mail</section>
    <section id="share">share</section>
    <section id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2629977.6105622104!2d15.369873000000002!3d49.93000800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2scz!4v1552141263491" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
   
    <section id="form">
      <form id="inner-form" class="ui large form">
        <div class="field">
        
        <label for="enquiry">How can we help?</label>
        <select name="enquiry" id="enquiry">
          <option>Laptop Rrepair</option>
          <option>Desktop Repair</option>
          <option>Virus Removal</option>
          <option>Data Recovery</option>
          <!-- <option selected="selected">Medium</option> -->
        </select>
        <div class="ui error message" id="err-enquiry"></div>
        </div>

            <!-- errEnquiry, errModel, errFName, errLName, errEmail, errPhone, errConsent, errDescription -->
        <div class="field">
            <label>Make/Model</label>
            <input type="text" name="model" id="model" placeholder="Make/Model">
            <div class="ui error message" id="err-model"></div>
        </div>
        
      <div class="field">
          <label>Brief Description</label>
          <textarea name="description" id="description"></textarea>
          <div class="ui error message" id="err-description"></div>
        </div>

        <div class="field">
          <label>Name</label>
          <div class="two fields">
            <div class="field">
              <input type="text" name="first-name" id="first-name" placeholder="First Name">
              <div class="ui error message" id="err-fname"></div>
            </div>
            
            <div class="field">
              <input type="text" name="last-name" id="last-name" placeholder="Last Name">
              <div class="ui error message" id="err-lname"></div>
            </div>
          </div><!-- end of two field  -->
        </div><!-- end of field (one field containing two fieldcontainer with 2 fields) -->

        <div class="field">
            <label>Phone</label>
            <input type="text" name="phone" id="phone" placeholder="Phone number">
            <div class="ui error message" id="err-phone"></div>
        </div>

        <div class="field">
            <label>Email</label>
            <input type="text" name="email" id="email" placeholder="Email">
            <div class="ui error message" id="err-email"></div>
        </div>
         
         <div class="ui segment">
          <div class="field">
            <div class="ui checkbox">
              <input type="checkbox" name="consent" id="consent" tabindex="0">
              <label>I consent that meteor saves your data to contact you</label>
            </div>
            <div class="ui error message" id="err-consent"></div>
          </div>
        </div><!--end of ui segment  -->
        <input type="submit" id="submit" class="ui primary button" name="submit" tabindex="0" value="Submit">
    </form>
  </section>
  </div>
</div>

<button id="test">testig</button>
  </main>

<script src="js/myjs/contactlogic0.1.js">



      
</script>
<!-- <script src="js/myJs/submitionFormLogic.js"></script> -->
<!-- <script src="js/assets/components/form.js"></script> -->
<!-- C:\xampp\htdocs\Meteor\js\assets\components -->
<?php
    include_once ("footer.php");
?>
