<?php 
    include_once ("header.php")		
?>
<style>
	/*include_once("repairStyle.css")*/
	.wrapper {
    text-align: center;
}
	.wrapper h1 {
	    display: inline;
	    margin-bottom: 20px;
	}
.container{
	position: relative;
	/*top:;*/
	margin:auto;
	margin-bottom:50px;
}
.container figure{

}

</style>
<div class="container">
	<figure><img src="" alt=""></figure>
	<div class="wrapper">
		<h1>Virus Removal</h1>
		<p>

While Mac computers are quite safe from viruses, Windows OS users usually have a harder time keeping it safe. We’re here to ensure that your computer’s antivirus and anti-malware software works alright, with no harmful code running through your system… Also, we sell licensed software at a discounted price!


</p>

<p>Replacing hardware parts is how oftentimes a serious PC or a laptop glitch gets fixed.
Ultimately, it all comes down to the overall quality of the parts a tech company has in stock and their range.
We have both, being able to find a replacement part virtually for any computer or a laptop!</p>		


	</div>
</div>
<div class="contact container">

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
  </section>
  </div>
</div>
<?php
	// include_once("contactForm.php");
    include_once ("footer.php");
?>