
  
<?php 
    include_once("header.php");
    include_once("contact_process.php");
	  // include_once("dbCon.php");
?>

<style type="text/css">
  .ui.error{
    /*display:none;*/
  }
</style>

<?php
			
			if(isset($_GET['msg']) && !empty($_GET['msg'])){
				if($_GET['msg'] == "success"){
					echo "<br><br><div class='success'>Your message has been added to our database  successfully!</div>";
				} elseif($_GET['msg'] == "error_email"){
					echo "<div class='error'>Sorry, unable to send email. Please try again!</div>";
				}
				elseif($_GET['msg'] == "error_db"){
					echo "<div class='error'>Sorry, unable to add to database. Please try again!</div>";
				}
			   }
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
    <section id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2629977.6105622104!2d15.369873000000002!3d49.93000800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2scz!4v1552141263491" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
   
    <section id="form">
      <?php include_once("contactForm.php");?>
    </form>
  </section>
  </div>
</div>

  </main>

<!-- <script src="js/myjs/contactlogic0.1.js"> -->



      
</script>
<!-- <script src="js/myJs/submitionFormLogic.js"></script> -->
<!-- <script src="js/assets/components/form.js"></script> -->
<!-- C:\xampp\htdocs\Meteor\js\assets\components -->
<?php
    include_once ("footer.php");
?>
