<?php

require_once '../connexion/config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title > our car</title>
        <!-- pour les icons shop --> 
        <link rel="stylesheet  " href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" >
        <link rel ="stylesheet" href="../../CSS/car.css">
        <link rel="shortcut icon" type="image/icon" href="IMG/logo.png"/>
        <script src="../redirect.js" defer></script>
    </head>
<body>
    <!-- navbar -->
    <header>
        
        <a href="#" class="logo"> VELOCITY <span>.</span></a>
        <nav class="navbar">
          <a href="../INDEX.php">home</a>
            <a href="#">our cars</a>
          <a href="partielogin/login_form.PHP">join us</a>
      </nav>
      
    </header>
    <!--imageeeee-->
        <div class="row">
            <div class="picture">
                <div class="textbox">
                    <h1>VELOCITY</h1>
                    <h3>Dive into a world of diverse rides at <br /> VELOCITY.
                       Discover your perfect car from top brands. <br /> Drive your dream today!</h3>
                    <button type="button" class="boton"><a href="../INDEX.php" id="btntellme">tell Me Something</a> </button>
                </div>
            </div>  
        </div>

    
    <!-- cadre 1-->
    <section>  
            <div class="cadre">
            <!--cadre 1 START -->
            <div class="about a-effect">
            <i class="icon fa fa-cogs fa-2x"></i>
            <h2 class="about-title">
              mechanical aspect
            </h2>
            <p class="about-desc">
              Transparency is key when it comes to the mechanical aspect of your car.
               We provide comprehensive information about the maintenance history of each vehicle in our inventory 
            </p>
            <a href="#" class="about-link">read more</a>
          </div>
          <!--cadre 1 end -->
          <!--cadre 2 start -->
             <div class="about mg a-effect">
             <i class="icon fa fa-magic fa-2x"></i>
              <h2 class="about-title"> design aspect</h2>
               <p class="about-desc">In the realm of automotive excellence, the design aspect is the visual poetry that captures the essence of a vehicle,
             and at VELOCITY, we take pride in presenting a gallery of automotive masterpieces</p>
               <a href="#" class=" about-link">read more</a> 
              </div>
               <!--cadre 2 end -->
            <!--cadre 3  start  -->
            <div class="about a-effect">
             <i class="icon fa fa-mobile fa-2x"></i>
               <h2 class="about-title">technologie aspect </h2>
            <p class="about-desc">At VELOCITY, we embrace the forefront of automotive innovation, where the technology aspect is not just a feature but a driving force behind every vehicle we offer. </p>
             <a href="#" class="about-link">read more</a>
            </div>
            <!--cadre 3  end -->
            </div> 
    </section>
    <!--end cadre 2-->
  <!--templeeee -->
    <h2 id="titre">FIND YOUR CAR</h2>
    <div id="formauto">
      <form name="formauto" method="post" actiion="">
        <input type="text" >
    <section id="bodytemple" class="bodytemple">
    <figure class="cars">
            <img src="../../IMG/citroen.jpg" alt="BMW 6-Series Gran Coupe"/>
            <figcaption>
              <h3>Citroën C3 </h3>
              <p>Model: 2017 3100 Mi 240HP Automatic
                $89,395 </p>
                <button ><a href="../user_page.php"></a>BUY NOW</button>
            </figcaption>
          </figure>
      <figure class="cars">
        <img src="../../IMG/skoda.jpg" alt="Chevrolet Camaro WMV20"/>
        <figcaption>
          <h3>Skoda fabia 2023</h3>
          <p> Model: 2017 3100 Mi 240HP Automatic
            $66,575</p>
            <button ><a href="../user_page.php"></a>BUY NOW</button>
        </figcaption>
      </figure>
      <figure class="cars">
        <img src="../../IMG/dacia.jpg" alt="Lamborghini V520"/>
        <figcaption>
          <h3>Dacia Logan</h3>
          <p> Model: 2017 3100 Mi 240HP Automatic
            $125,250</p>
            <button ><a href="../user_page.php"></a>BUY NOW</button>
        </figcaption>
      </figure>
      <figure class="cars"><img src="../../IMG/hiunday.jpg" alt="Audi A3 Sedan"/><figcaption>
          <h3>Hyundai Gi10</h3>
          <p> Model: 2017 3100 Mi 240HP Automatic
            $95,500</p>
            <button ><a href="../user_page.php"></a>BUY NOW</button>
        </figcaption>
      </figure>
      <figure class="cars">
        <img src="../../IMG/208.jpg" alt="Audi A3 Sedan"/>
        <figcaption>
          <h3>peugeot 208</h3>
          <p>Model: 2017 3100 Mi 240HP Automatic
            $95,500</p>
            <button ><a href="../user_page.php"></a>BUY NOW</button>
</figcaption>
      </figure>
      <figure class="cars">
        <img src="../../IMG/polo.jpg" alt="Porsche 718 Cayman"/>
        <figcaption>
          <h3>polo 8</h3>
          <p> Model: 2017 3100 Mi 240HP Automatic
            $48,500 </p>
            <button ><a href="../user_page.php"></a>BUY NOW</button>
        </figcaption>
      </figure>
      <figure class="cars">
        <img src="../../IMG/kia.jpg" alt="BMW 8-Series Coupe"/>
        <figcaption>
          <h3>Kia Picanto</h3>
          <p> Model: 2017 3100 Mi 240HP Automatic
            $56,000
          </p>
          <button ><a href="../user_page.php"></a>BUY NOW</button>
        </figcaption>
      </figure>
      <figure class="cars">
        <img src="../../IMG/toyota.jpg" alt="BMW 8-Series Coupe"/>
        <figcaption>
          <h3>Toyota Agya</h3>
          <p>Model: 2017 3100 Mi 240HP Automatic
            $56,000
          </p>
            <button ><a href="../user_page.php"></a>BUY NOW</button>
      </figcaption>
        
      </figure>
    </section>
<!--end temple -->
<section id="clients-saye"  class="clients-saye">


   
   </div>

    </section>
    
    <div id="brandpic" class="brandpic">
    <img src="../../IMG/brand.jpg" id="brand" alt="brand">
    <footer>
      <div class="container">
        <div class="row">
           <div class="col-md-6">
           </div>
           <div class="col-md-4">
              <div class="full">
                  <h3>VELOCITY</h3>
                 <h4 class="widget_heading">SUBSCRIBE</h4>
              </div>
              <div class="full subribe_form">
                
                    
                      <div class="field">
                        <button class="submit_bt"><a href="register_form.php" ><span class="submit_btt">join us</span> </a></button>
                      </div>
                  
                
              </div>
           </div>
           <div class="col-md-4">
              <div class="full">
                <h4 class="widget_heading">Usefull Links</h4>
              </div>
              <div class="full f_menu">
                 <ul>
                  <li><a href="../INDEX.php">Home</a></li>
                  <li><a href="#">Our Cars</a></li>
                 <li><a href="partielogin/login_form.PHP">join us</a></li>
                 </ul>
              </div>
           </div>
              <div class="col-md-6">
             <div class="full">
             </div>
           </div>
              <div class="full">
                  <ul class="social_links">
                    <li><a href="https://www.facebook.com/"><img src="../../IMG/ffff.png" id="ffff"></a></li>
                    <li><a href="https://www.instagram.com/"><img src="../../IMG/iiii.png" id="ffff"></a></li>
                    <li><a href="https://twitter.com/"><img src="../../IMG/tttt.png" id="ffff"></a></li>
                   </ul>
                  </br>
              </br>
          </br>
          <div class="full cont_footer">
            <h4 class="widget_heading">Contact Details</h4>
            <p><strong>VELOCITY: Adderess</strong><br><br>manouba, tunis<br>Phone: +216 23883920<br>fawez.sassi@esen.tn <br> oumaima.daieb@esen.tn</p>
          </div>
        </div>      
        </div>
      </div>
    </div>
   </footer>
   <div class="cpy_right">
    <div class="contain">
                  <p id="p">© 2024 All Rights Reserved. Design by sassi fawez grp5 daieb oumaiama grp3</p>
               </div>
            </div>
            
</body>
</html>