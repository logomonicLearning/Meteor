<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>Meteor Repairs and Sales</title>
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
    <link rel="stylesheet" type="text/css" href="css/site.css">

    <!--- Component CSS -->
    <link rel="stylesheet" type="text/css" href="css/icon.css">
    <link rel="stylesheet" type="text/css" href="css/label.css">
    <link rel="stylesheet" type="text/css" href="css/myStyle/faqStyle.css">
    <!-- <link rel="stylesheet" href="css/form.css">   -->
    <link rel="stylesheet" type="text/css" href="css/message.css">
    
    <link href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/myStyle/mainStyle.css">
    <link rel="stylesheet" type="text/css" href="css/myStyle/contactStyle.css">
    
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.2/semantic.min.js"></script> 
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>  
    
    <!--- Component JS -->
    <script src="js/assets/library/jquery.min.js"></script>
    <script src="js/assets/library/iframe-content.js"></script>


  <!--- Example Javascript -->
  <script>
  $('#back-to-top').click(function(){
      $('#nav-top').animate({
          scrollTop: 0
      }, 3000);
  });
  $(window).load(function() {
      // Animate loader off screen
      $(".se-pre-con").fadeOut("slow");;
    });

  
  $(document).ready(function() {
      // $('.pure-menu-list .pure-menu-has-children').dropdown({
      //   on: 'hover'
      // });

      $('.ui.menu a.item')
        .on('click', function() {
          $(this)
            .addClass('active')
            .siblings()
            .removeClass('active')
          ;
        })
      ;
    })
  ;

  </script>

</head>
<body>

<header id="the-top">
  <div class="header-wrapper"> 
    <div class="container">
      <div class="wrapper" id="top-header">
        <div id="banner"><a href="index.php"><img src="images/meteorlogo2.png"></a></div>
        
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
                  <li class="pure-menu-item">
                    <a href="computerRepair.php" class="pure-menu-link">Laptop Repair</a>
                  </li>
                  <li class="pure-menu-item">
                    <a href="computerRepair.php" class="pure-menu-link">PC Repair</a>
                  </li>
                  <li class="pure-menu-item">
                    <a href="dataRecovery.php" class="pure-menu-link">Data Recovery</a>
                  </li>
                  <li class="pure-menu-item">
                    <a href="virusRemoval.php"   class="pure-menu-link">Virus Removal</a>
                  </li>
                  <li class="pure-menu-item"><a  class="pure-menu-link">Hardware Upgrade</a></li>
                </ul>
            </li>
            <li class="pure-menu-item"><a class="pure-menu-link" href="products.php">Products</a></li>
            <li class="pure-menu-item"><a class="pure-menu-link" href="about.php">About</a></li>
            <li class="pure-menu-item"><a class="pure-menu-link" href="contact.php">Contact</a></li>
            <li class="pure-menu-item"><a class="pure-menu-link" href="faq.php">FAQ</a></li>
        </ul>
        
        <a href="cart0.1.php" aria-label="0 items in shopping basket" class="" id="nav-cart" >
            <div class="cart"> 
                <span id="nav-cart-count" aria-hidden="true" class="nav-cart-count nav-cart-0">
                  
          <?php 
              include ('dbCon.php');
              $sql = "SELECT SUM(quantity) AS total_item FROM cart";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);
        
              if($row['total_item']!= NULL){
                echo "<b>".$row['total_item']."</b>" ;
              } else {
                echo "0";
              }
          ?>

                  
                </span>
            </div>
            <!-- <span class="nav-cart-icon nav-sprite"></span> -->
        </a>
    </div>    
</nav> <!-- end of nav -->
</div>
</header>

