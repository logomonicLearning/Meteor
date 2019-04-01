 
<?php 
    include_once ("header.php")
		
?>
<style type="text/css">
  #repair-process h2{
    text-align:center;
  }
  .wrapper {
    text-align: center;
  }


  .ui.card:first-child {
    max-width: 100%;
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 290px;
    min-height: 0px;
    background: #FFFFFF;
    padding: 0em;
    border: none;
    border-radius: 0.28571429rem;
    -webkit-box-shadow: 0px 1px 3px 0px #D4D4D5, 0px 0px 0px 1px #D4D4D5;
    box-shadow: 0px 1px 3px 0px #D4D4D5, 0px 0px 0px 1px #D4D4D5;
    -webkit-transition: -webkit-box-shadow 0.1s ease, -webkit-transform 0.1s ease;
    transition: -webkit-box-shadow 0.1s ease, -webkit-transform 0.1s ease;
    transition: box-shadow 0.1s ease, transform 0.1s ease;
    transition: box-shadow 0.1s ease, transform 0.1s ease, -webkit-box-shadow 0.1s ease, -webkit-transform 0.1s ease;
    z-index: '';
}
</style>
<main>
  <div class="container">
    <section class="wrapper" >
      <h2>Our Repair Process</h2>
      <div id="repair-process">
      <div class="repair-process-item">
        <i class="ui icon phone"></i>

        <h3>1. Book your computer </h3>
        <p>Business Emergency Call? Tell us about your desktops, laptops or network issues you experiencing and we will resolve it, including domain server networks support</p>

      </div>  
      <div class="repair-process-item">
        <i class="ui icon car"></i>
        <h3>2. Hardware Diagnostics</h3>
        <p>We know how often it is inconvenient to bring your business computers to us. That’s why we can visit your Business office and fix all desktops , servers and network communications</p>
      </div>  
      <div class="repair-process-item">
        <i class="ui icon cog"></i>
        <h3>3. Quotation</h3>
        <p>We will get your desktops, laptops, IPAds fixed, and in addition to that we provide a 90 day satisfaction guarantee!, we can arraneg collection of you hardware</p>

      </div>  
    </div>
    </section>
  </div>
  
      
  <div class="container" id="advert-container">
    <section class="wrapper" id="advert">
      
      <div class="ui card">
          <div class="conten  t">
            <div class="header">
              <img src="images/icons/icons8-laptop-80.png">
              Laptop Repair
            </div>
            <div class="description">
              We will repair your laptop good and proper!
              <!-- <img src="../assets/images/wireframe/paragraph.png" class="ui wireframe image"> -->
            </div>
          </div>
          <div class=" buttons">
            <a style="color:grey" href="contact.php" class="pure-button button-bottom">
              Contact Us
            </a>
            <div class="pure-button button-bottom">
              More Info
            </div>
          </div>
        </div>

        <div class="ui card">
            <div class="content">
              <div class="header">
                <img src="images/icons/icons8-workstation-512.png" width=70px>
                Desktop Repair
              </div>
              <div class="description">
                We will repair your laptop good and proper!
                <!-- <img src="../assets/images/wireframe/paragraph.png" class="ui wireframe image"> -->
              </div>
            </div>
            <div class="buttons">
              <a href="contact.php" class="pure-button button-bottom">
                Contact Us
              </a>
              <div class="pure-button button-bottom">
                More Info
              </div>
            </div>
          </div>

          <div class="ui card">
              <div class="content">
                <div class="header">
                  <img src="images/icons/icons8-hdd-64.png" width=70px>
                  Data Recovery
                </div>
                <div class="description">
                  We will repair your laptop good and proper!
                  <!-- <img src="../assets/images/wireframe/paragraph.png" class="ui wireframe image"> -->
                </div>
              </div>
              <div class="buttons">
                <a href="contact.php" class="pure-button button-bottom">
                  Contact Us
                </a>
                <a href="dataRecovery.php"class="pure-button button-bottom">
                  More Info
                </a>
              </div>
            </div>

            <div class="ui card">
                <div class="content">
                  <div class="header">
                    <img src="images/icons/icons8-bug-100.png" width=70px>
                    Virus Removal
                  </div>
                  <div class="description">
                    Is your laptop bugged out? dont worry
                    <!-- <img src="../assets/images/wireframe/paragraph.png" class="ui wireframe image"> -->
                  </div>
                </div>
                <div class="buttons">
                  <a href="contact.php" class="pure-button button-bottom">
                    Contact Us
                  </a>
                  <div class="pure-button button-bottom"  >
                    More Info
                  </div>
                </div>
              </div>
    </section>








  </div> <!-- end of 2nd cont -->


  <div style="display:none" class="container" id="advert-container2"> 
    <section class="wrapper" id="advert2">
       <div class="ui card">
       <a href="">
         <figure class="image">
           <img src="icons8-laptop-80.png" width=70px>
         </figure>
         <div class="content">
           <h2 class="header">Laptop Repair</h2>
           <div class="description">
             We will repair your laptop good and proper!
           </div>
         </div>
         </a>
      </div><!-- end of first card -->

      <div class="ui card">
         <a href="">
         <figure class="image">
           <img src="icons8-workstation-512.png" width=70px >
         </figure>
         <div class="content">
           <h2 class="header">PC Repairs</h2>
           <div class="description">
             We will repair your laptop good and proper!
           </div>
         </div>
         </a>
      </div><!-- end of 2nd card -->

      <div class="ui card">
         <a href="">
         <figure class="image">
           <img src="icons8-hdd-64.png" width=70px >
         </figure>
         <div class="content">
           <h2 class="header">Data Recovery</h2>
           <div class="description">
             Did you just erase your life's work? dont worry, we have a solution to retrieve all which you thought was lost.
           </div>
         </div>
         </a>
      </div><!-- end of first card -->

      <div class="ui card">
         <a href="">
         <figure class="image">
           <img src="icons8-bug-100.png" width=70px>
         </figure>
         <div class="content">
           <h2 class="header">Virus Removal</h2>
           <div class="description">
             Are you losing the battle with a notorious virus? Dont worry, we are pc doctors and have the cure.
           </div>
         </div>
         </a>
      </div><!-- end of first card -->

     </section>

  </div>
</main>

<?php
    include_once ("footer.php");
?>