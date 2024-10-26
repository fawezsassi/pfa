<?php


?>

<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title > VELOCITY</title>

        <link rel="stylesheet  " href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" >
        <link rel ="stylesheet" href="../CSS/style.css">
        <link rel="shortcut icon" type="image/icon" href="IMG/logo.png"/>
        <script language="javascript" src="../JS/controle.js"></script>
    </head>
<body>

    <header>
       
        <a href="#" class="logo">VELOCITY<span>.</span></a>
        <nav class="navbar">
        <a href="#">home</a>
            <a href="view/car.php">our cars</a>
            <a href="view/partielogin/login_form.PHP">join us</a>
        </nav>
     
 
    </header>

    <section class="home" id="home">
            <div class="content">
            <h3>Furious Cars </h3>
            <span> find the best car for you </span>
            <a href="car.php" class="btn">shop now </a>
        </div>
    </section>
    <section class="about" id="about">
      
            
        
     <div class="row"> 
        <div class="abcon">
            <h3 class="abs" id="uu"> about us ? </h3>
            <p class="p"> 
                Welcome to VELOCITY, where your journey to find the perfect car begins! As automotive enthusiasts,
            
                 we understand the thrill and excitement that comes with owning a vehicle that perfectly suits your lifestyle.
       
                  Our mission is to make that experience seamless, enjoyable, and memorable for you.</p>
           <a href="#" class="btn">learn more </a>
        </div>
       
           <div>
        <img src="../IMG/red.png" id="red">
             </div>
    </div>
             <div class="row"> 
                <div>
                    <img src="../IMG/bleu.png" id="red">
                         </div>
                <div class="abcon">
                    <h3 class="abs">Our products </h3>
                    <p class="p" id="p">Welcome to the future of driving – welcome to VELOCITY, where innovation meets elegance in our
                         stunning collection of brand-new vehicles. Our showroom is a testament to cutting-edge automotive technology, 
                         featuring the latest models from renowned manufacturers. Each vehicle is a masterpiece, meticulously designed for performance,
                          safety, and style.</p>
                   <a href="element.html" class="btn">learn more </a>
                </div>
            </div>  
                
                          
     </section>


<section class="whychose">
    <h3 class="we"> why choose us ? </h3>
    <div class="icons-contawhy ">
     <div class="icons">
            <img src="../IMG/c1_icon.png" alt=" FINANCING MADE EASY">
            <div class="info">
            <h3> FINANCING MADE EASY  </h3>
            
            </div>
         </div>

         <div class="icons">
            <img src="../IMG/c3_icon.png" alt="">
            <div class="info">
            <h3> TRUSTED BY THOUSANDS</h3>
         
            </div>
         </div>

         <div class="icons">
            <img src="../IMG/c2_icon.png" alt="">
            <div class="info">
            <h3>WIDE RANGE OF BRANDS </h3>
           
            </div>
       </div>
       </div>
       <a href="#" class="btnwhy">learn more </a>
    </section>


        

        <section class="review" id="review">
          
            <h1 class="h"> customer's <span> review </span>  </h1>
            <div id="bcc">
            <div class="box-container">
                <div class="box">
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <i class="fas fa-star"></i>
                   <p>I recently purchased a car from VELOCITY, and the experience exceeded my expectations. 
                    The selection of new cars was impressive, featuring the latest models with cutting-edge technology and stylish designs 
                    The team at VELOCITY provided exceptional customer service, guiding me through the process with patience and expertise. </p>
                   <div class="user">
                    
                    <img src="../IMG/cu1.jpg" id="cm">

                    <div class="user-info">
                        <h3> john deo </h3>
                       
                    </div>
                </div>
                
                </div> 
             
             
                   
            </div>

                <div class="box-container">
                    <div class="box">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                      
                       <p>  I'm giving VELOCITY four stars because while I am generally satisfied with my purchase, 
                        I believe there's always room for improvement. The car itself is fantastic—reliable, stylish, and equipped with some great features. 
                        However, there were a few minor issues during the buying process that prevented me from giving a perfect rating.
                       
                     </p>
                   <div class="user">
                       <img src="../IMG/cu2.jpg" id="cm" alt="">
                       <div class="user-info">
                           <h3> jessica  karmin </h3>
                           
                           </div>
                       </div>
                      
                   </div>
                    </div> 
                   
               
                <div class="box-container">
                    <div class="box">
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                       <i class="fas fa-star"></i>
                      
                       <p>    I faced a few challenges that influenced my rating. The transparency in pricing could be improved, 
                        as I encountered some unexpected fees during the transaction. Additionally,
                         the post-purchase service has been somewhat lacking. I've had difficulty getting timely responses to my inquiries and concerns.
                         The car itself is satisfactory,  </p>
                   <div class="user">
                       <img src="../IMG/cu3.jpg"  id="cm">
                       <div class="user-info">
                           <h3> leo peleg </h3>
                          
                           </div>
                       </div>
                 
                   </div>
                    </div> 
                   
                </div>
            
          
         </section>
     <section class="contact" id="contact">
        <h1 class="he"><span > contact</span></h1>
        <div class="row">
            <form action=""   id="form" method="post" >

                <input type="textarea" placeholder="username" class="box"  name="nomutiisateur" >
               <input type="email" placeholder="email" class="box" id="email" name="email">
                <input type="tel" placeholder="tel" class="box" id="tel" name="tel">
                <textarea name="commentaire" class="box" placeholder="message" id="" cols="90" rows="10"></textarea>
                <button type="submit" onclick="return test1() ,test2(),test()"  name="submit" class="btnn" >SEND</button>
            </form>
           
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3194.1173538253065!2d10.056823281772889!3d36.81570769527261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd2d972d7a581d%3A0x1c27a72d26da3522!2sManouba%20University!5e0!3m2!1sit!2stn!4v1704029749342!5m2!1sit!2stn" id="map"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>

        </div>
</section>


<footer>
    <div class="container">
      <div class="row">
         
      
         <div class="c">
            <div class="full">
                <h3>VELOCITY</h3>
               <h4 class="sousheading">SUBSCRIBE</h4>
            </div>
            <div class="full subribe_form">
            
                    <div class="field">
                    <button class="submit_bt"><a href="register_form.php" ><span class="submit_btt">join us</span> </a></button>
                    </div>
              
            </div>
         </div>
         <div class="c">
            <div class="full">
              <h4 class="sousheading">Usefull Links</h4>
            </div>
            <div class="mmenu">
               <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="car.php">Our Cars</a></li>
                 
                  <li><a href="login_form.php">join us</a></li>
               </ul>
            </div>
         </div>
            <div class="">
           <div class="full">
            
           </div>
         </div>
         
            <div class="full">

                
                <ul class="social_links">
                    <li><a href="https://www.facebook.com/"><img src="../IMG/ffff.png" id="ffff"></a></li>
                    <li><a href="https://www.instagram.com/"><img src="../IMG/iiii.png" id="ffff"></a></li>
                    <li><a href="https://twitter.com/"><img src="../IMG/tttt.png" id="ffff"></a></li>
                 </ul>
                </br>
            </br>
        </br>
              <div class="full cont_footer">
                <h4 class="sousheading">Contact Details</h4>
                <p><strong>VELOCITY: Adderess</strong><br><br>manouba, tunis<br>Phone: +216 23883920<br>fawez.sassi@esen.tn</p>
              </div>
            </div>
           
      </div>
   
    </div>
  
 </footer>
 <div class="cpy_right">
    <div class="container">
        <div class="row">
            
               <div class="full">
                  <p id="p">© 2024 All Rights Reserved. Design by sassi fawez grp5 daieb oumaiama grp3</p>
               </div>
            
        </div>
    </div>
</div>
 

</body>
</html>

