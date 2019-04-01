<!-- <div class="contact container">    -->
    <!-- <section id="form"> -->
      
      
      <?php include_once("contact_process.php");?>

      <form method="post" action="contact.php" id="inner-form" class="ui large form">
        <div class="field">
        
        <label for="enquiry">How can we help?</label>
        <select name="enquiry" id="enquiry">
          <option>Laptop Rrepair</option>
          <option>Desktop Repair</option>
          <option>Virus Removal</option>
          <option>Data Recovery</option>
          <!-- <option selected="selected">Medium</option> -->
        </select>
        <?php echo $error_enquiry;?>
        <div class="ui error message" id="err-enquiry"></div>
        </div>

            <!-- errEnquiry, errModel, errFName, errLName, errEmail, errPhone, errConsent, errDescription -->
        <div class="field">
            <label>Make/Model</label>
            <input type="text" name="model" id="model" placeholder="Make/Model">
            <div class="ui error message" id="err-model"><?php echo $error_model;?></div>
        </div>
        
      <div class="field">
          <label>Brief Description</label>
          <textarea name="description" id="description"></textarea>
          <div class="ui error message" id="err-description"><?php echo $error_description;?></div>
        </div>

        <div class="field">
          <label>Name</label>
          <div class="two fields">
            <div class="field">
              <input type="text" name="first-name" id="first-name" placeholder="First Name">
              <div class="ui error message" id="err-fname"><?php echo $error_firstname;?></div>
            </div>
            
            <div class="field">
              <input type="text" name="last-name" id="last-name" placeholder="Last Name">
              <div class="ui error message" id="err-lname"><?php echo $error_lastname;?></div>
            </div>
          </div><!-- end of two field  -->
        </div><!-- end of field (one field containing two fieldcontainer with 2 fields) -->

        <div class="field">
            <label>Phone</label>
            <input type="text" name="phone" id="phone" placeholder="Phone number">
            <div class="ui error message" id="err-phone"><?php echo $error_phone;?></div>
        </div>

        <div class="field">
            <label>Email</label>
            <input type="text" name="email" id="email" placeholder="Email">
            <div class="ui error message" id="err-email"><?php echo $error_email;?></div>
        </div>
         
        <div class="ui segment">
          <div class="field">
            <div class="checkbox">
              
              <input type="checkbox" name="consent" id="consent" tabindex="0">
              I consent that meteor saves your data to contact you
              <div class="ui error message" id="err-consent"><?php echo $error_consent;?></div>  
            </div>    
          </div>
        </div><!--end of ui segment  -->
        
        <input type="submit" id="submit" class="ui primary button" name="submit" tabindex="0" value="Submit">
    </form>
  <!-- </section> -->