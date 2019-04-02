	
<?php 
    include_once ("header.php")
?>
			
<style>

</style>	

	
	<main class="faq">
	<div class="ui huge header" style="text-transform:uppercase;">FAQ</div>
	<div class="container">
	<div id="accordion">
		<h3>Why should I use Meteor Repairs for a repair?</h3>
	 	<p>Your Computer is precious to you. Meteor Repairs technicians undergo strict training and regular testing to ensure they have the experience and qualifications to repair all leading devices. With nearly 500,000 repairs to date, we are the trusted repair chain.</p>
	 	 
	 	<h3>How long does a repair take?</h3>
	 	<p>We pride ourselves on an express repair service. Common devices can be repaired in-store within an hour, whilst postal repairs are between 48-72 hours.</p>
	 	 
	 	<h3>What should I do before handing over my device?</h3>
	 	<p>Whilst your device is in safe hands with us, it is always recommended that you back-up your device and reset back to the factory settings before hand for security purposes.</p>
	 	 
	 	<h3>Do repairs come with warranty?</h3>
	 	<p>There is a lifetime warranty on most device repairs. Please check our terms and conditions for more details.</p>
	 	 
	 	 
	 	<h3>How does the walk-in service work?</h3>
	 	<p>Our walk-in service allows you to have your computer repaired straight away! You can see the time required for each repair when you book on our website.</p>
	 	 
	 	<h3>If I use Meteor Repairs will this void my Manufacturer’s warranty?</h3>
	 	<p>Like most third-party repair services, use of our service can void your manufacturer’s warranty. The good news is we provide our own warranty for all our repairs! For more details please click here.</p>
	 	 
	 	<h3>I only have a small crack on my screen do I need a full-screen replacement?</h3>
	 	<p>Yes, we do a full-screen replacement regardless of the size of the crack in your screen and all our screen replacements come with a lifetime warranty!</p>
	  	 
	 	<h3>Are Meteor Repairs screens original parts?</h3>
	 	<p>Although we are an alternative repair service to the main distribution. All our screens are OEM (Original Equipment Manufactured and QC tested.
	 	We have so confident in the quality of our screens that we offer a lifetime warranty! For more details please see here.</p>
	 	 
	 	<h3>Why does Meteor Repairs ask for my PIN or ID before repair?</h3>
	 	<p>Providing your pin/passcode before the repair is completely up to you!
	 	We advise everyone to provide this information as our technicians need to verify that the device is in full working order before you collect it!
	 	They undergo a series of tests that include touch sensitivity and camera. At no time they would access your personal information or intrude on your privacy. You can view our privacy policy here.</p>
	 	 
	 	<h3>Do Meteor Repairs offer support after repair?</h3>
	 	<p>Yes! You can contact our customer service team here.</p>
	 	 
	 	<h3>Does Meteor Repairs have any special offers and deals at the moment?</h3>
	 	<p>Yes! You can find all our latest offers here.</p>
	 	</div> 
	 
	 </div>
	 </main>
	 
	 <script>
	$(document).ready(function(){
		$("p").hide();
		$("p:first-child").show();
		$("h3").click(function(){
			$("p").hide();
			$(this).next("p").slideToggle();
		});
		$("#accordion h3").addClass("h3-style");
		$("#accordion h3").prepend('<span class="ui-icon-caret-1-e"></span>')
	})

	</script>

<?php
    include_once ("footer.php");
?>
