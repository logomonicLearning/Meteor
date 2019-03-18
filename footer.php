 <footer>
    <a id="back-to-top" href="#the-top"><span>Back to top</span></a>
    <div class="container">
      <div class="wrapper" id="main-block">
            
            <!-- has 3 main parts, mission, links and opening hours, the first and 3rd parts should be 25% and the center col should be 50%  -->

            <div id="mission">
                We prioritise on customer satisfaction and quick delivery. All repairs are under 90 day warranty so you dont have to worry about repair issues. Were flexible as you can either drop your equipment to us, or you can order a delivery.  
            </div>

            <div id="footer-links"> 
                <ul>  
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="#">Study Music</a></li>
                    <li><a href="#">Store</a></li>
                    <li><a href="#">Legal</a></li>
                    <li><a href="#">Dsiclaimer</a></li>
                </ul>
                <ul>  
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="#">Study Music</a></li>
                    <li><a href="#">Store</a></li>
                    <li><a href="#">Legal</a></li>
                    <li><a href="#">Dsiclaimer</a></li>
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
            <div class="copywright"><div>&copy; 2019 CodeMode</div> <a href="#the-top">Terms of use</a> <a href="">Privacy policy</a></div>
        </div>
    </div><!-- endo of bottom block  -->

  </footer>
	<script>
		// $(window).scroll(function() {
		// 	$(function(){$("#back-to-top").click(function(){
		// 		$("html,body").animate({scrollTop:$("#the-top").offset().top},"1000");
		// 		return false
		// 	})
		// })
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
		
		/*$(document).ready(function(){
			$("#back-to-top").click(function(){$("html,body").animate({scrollTop:$("#the-top").offset().top},"1000");
				return false;
			})
		})*/

		

	$( function() {
	  $("#accordion" ).accordion();
	  $("#accordion h3").addClass("h3-style");
	  // $("#accordion h3").prepend('<span class="ui-icon-caret-1-e"></span>')
	  
	} );
	


	</script>
</body>
<script src="js\assets\components\sliderLogic.js"></script>
</html>