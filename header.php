<!DOCTYPE html>
<html>
<head>
  




  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Theming - Semantic</title>




  <!-- NORMALISE -->
  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/base-min.css">

  <!-- purecss buttons -->
  <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">

  <!-- slider links -->
  <link rel="stylesheet" href="css/base.css" />
  <link rel="stylesheet" href="css/slider.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.css" rel="stylesheet" type="text/css" />
  <!--- Component JS -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  

  <!--- Site CSS -->
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/site.css">
    <link rel="stylesheet" type="text/css" href="css/grid.css">

    <!--- Component CSS -->
    <link rel="stylesheet" type="text/css" href="css/icon.css">
    <link rel="stylesheet" type="text/css" href="css/button.css">
    <link rel="stylesheet" type="text/css" href="css/card.css">
    <link rel="stylesheet" type="text/css" href="css/label.css">
    <link rel="stylesheet" type="text/css" href="css/image.css">
    <link rel="stylesheet" type="text/css" href="css/reveal.css">
    <link rel="stylesheet" type="text/css" href="css/dimmer.css">
    <link rel="stylesheet" type="text/css" href="css/rating.css">
    <link rel="stylesheet" type="text/css" href="css/transition.css">
    <link rel="stylesheet" type="text/css" href="css/popup.css">
    <link rel="stylesheet" type="text/css" href="css/myStyle/faqStyle.css">
    <link rel="stylesheet" href="css/form.css">  
    <link rel="stylesheet" type="text/css" href="css/message.css">
    <link rel="stylesheet" type="text/css" href="css/myStyle/contactStyle.css">

    <!-- ../../dist/components/ -->
    
    <link href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/myStyle/mainStyle.css">
    


    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.js"></script> 
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

   
  
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
  <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    
    <!--- Component JS -->
  <!-- <script src="../assets/library/jquery.min.js"></script>
  <script src="../assets/library/iframe-content.js"></script> -->
    <!-- libraries -->
    <script src="js/assets/library/jquery.min.js"></script>
    <script src="js/assets/library/iframe-content.js"></script>

    <!-- components -->
    <script type="text/javascript" src="js/assets/components/popup.js"></script>
    <script type="text/javascript" src="js/assets/components/dimmer.js"></script>
    <script type="text/javascript" src="js/assets/components/rating.js"></script>
    <script type="text/javascript" src="js/assets/components/transition.js"></script>
    <script src="js/form.js"></script>
    <script src="js/transition.js"></script>
    <script src="js/dropdown.js"></script>





 
  <!--- Example Javascript -->
  <script>
  // $(document).ready(function() {
  //     $('.pure-menu-list .pure-menu-has-children').dropdown({
  //       on: 'hover'
  //     });

  //     $('.ui.menu a.item')
  //       .on('click', function() {
  //         $(this)
  //           .addClass('active')
  //           .siblings()
  //           .removeClass('active')
  //         ;
  //       })
  //     ;
  //   })
  // ;
  $('#back-to-top').click(function(){
      $('#nav-top').animate({
          scrollTop: 0
      }, 3000);
  });



  </script>
</head>
<body>

<header id="the-top">
  <div class="header-wrapper"> 
    <div class="container">
      <div class="wrapper" id="top-header">
        <div id="banner"><img src="#"></div>
        
        <div class="contact-info">
            <span><i class="ui icon"> </i>0207 555 999</span>
            <span><i class="ui icon"> </i>admin@meteorrepair.com</span>
            <span><i class="ui icon"> </i>123 Fake Street London F314</span>
        </div>

      </div>
    </div>
  </div>

  <div class="header-wrapper"> 
  <nav id="nav-top" class="container">
    <div class="pure-menu pure-menu-horizontal">
        <ul class="pure-menu-list">
            <li class="pure-menu-item pure-menu-selected">
              <a href="index.php" class="pure-menu-link">Home</a>
            </li>
            
            <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
                <a href="#" id="menuLink1" class="pure-menu-link">Services</a>
                <ul class="pure-menu-children">
                  <li class="pure-menu-item"><a href="#" class="pure-menu-link">Laptop Repair</a></li>
                  <li class="pure-menu-item"><a href="#" class="pure-menu-link">PC Repair</a></li>
                  <li class="pure-menu-item"><a href="#" class="pure-menu-link">Data Recovery</a></li>
                  <li class="pure-menu-item"><a href="#" class="pure-menu-link">Virus Removal</a></li>
                  <li class="pure-menu-item"><a href="#" class="pure-menu-link">Hardware Upgrade</a></li>
                </ul>
            </li>
            <li class="pure-menu-item"><a class="pure-menu-link" href="products0.1.php">Products</a></li>
            <li class="pure-menu-item"><a class="pure-menu-link">About</a></li>
            <li class="pure-menu-item"><a class="pure-menu-link" href="contact.php">Contact</a></li>
            <li class="pure-menu-item"><a class="pure-menu-link" href="faq.php">FAQ</a></li>
        </ul>
    </div>    
</nav> <!-- end of nav -->
</div>
</header>

<header>
  <div class="container">
      <div id=slider class="slider wrapper">
              <div class="slide-viewer">
                <div class="slide-group">
                  <div class="slide slide-1">
                    <img src="images/icons/icons8-bug-100.png" alt="No two are the same" />
                  </div>
                  <div class="slide slide-2">
                    <img src="images/icons/icons8-hdd-64.png" alt="Monsieur Mints"  />
                  </div>
                  <div class="slide slide-3">
                    <img src="images/icons/icons8-hdd-96.png" alt="The Flower Series"  />
                  </div>
                  <div class="slide slide-4">
                    <img src="images/icons/icons8-laptop-80.png" alt="Salt o' The Sea"  />
                  </div>
                </div>
              </div>
              <div class="slide-buttons"></div>
            </div>
  </div>
</header> <!-- end of 2nd header(slider) perhaps make a separate file and only include in the index -->
