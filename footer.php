 <footer>
    <a id="back-to-top" href="#the-top"><span>Back to top</span></a>
    <div class="container">
      <div class="wrapper" id="main-block">
            <div id="mission">
                We prioritise on customer satisfaction and quick delivery. All repairs are under 90 day warranty so you dont have to worry about repair issues. Were flexible as you can either drop your equipment to us, or you can order a delivery.  
            </div>

            <div id="footer-links"> 
                <ul>  
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="products.php">Store</a></li>
                    <li><a href="#">Legal</a></li>
                    <li><a href="#">Dsiclaimer</a></li>
                </ul>
                <ul>  
                    <li><a href="computerRepair.php">Repair Laptop</a></li>
                    <li><a href="computerRepair.php">Repair Desktop</a></li>
                    <li><a href="virusRemoval.php">Virus Removal</a></li>
                    <li><a href="dataRecovery.php">Data Recovery</a></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
            
            <div id="opening-hours">
              <h4 style="text-transform:uppercase">Opening hours:</h4>
                  <span>MONDAY 10:00 - 18:00</span>
                  <span>TUESDAY 10:00 - 18:00</span>
                  <span>WEDNESDAY 10:00 - 18:00</span>
                  <span>THURSDAY 10:00 - 18:00</span>
                  <span>FRIDAY 10:00 - 18:00</span>
                  <span>SATURDAY 11:00 - 15:00</span>
                  <span>SUNDAY CLOSED</span>
            </div>

        </div><!-- end of mainBlock  -->
    <br>  
    
    
    
    </div><!--end of container  -->
    <div id="bottom-block" class="wrapper">
        <div class="container">  
            <div class="copywright"><div>&copy; 2019 Meteor repairs</div> <a href="#the-top">Terms of use</a> <a href="">Privacy policy</a></div>
        </div>
    </div><!-- endo of bottom block  -->

  </footer>
	<script>
		$(window).scroll(function() {
		    if ($(this).scrollTop() > 50 ) {
		        $('.scrolltop:hidden').stop(true, true).fadeIn();
		    } else {
		        $('.scrolltop').stop(true, true).fadeOut();
		    }
		});

		$(document).on("click","#back-to-top", function(){
			$("html,body").animate({scrollTop:$("#the-top").offset().top},"1000");
			return false;
		})
	</script>
</body>
<script src="js\assets\components\sliderLogic.js"></script>
</html>