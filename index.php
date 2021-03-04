<?php 
    $connection=mysqli_connect("localhost","root","","vehicle management");

    session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>OBTBS Nepal</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="Style1.css">
    <link rel="stylesheet" href="style.css">
    

 
</head> 
<style>
    
.parallax {
    /* The image used */
    background-image: url("bus-people-public-transportation-34171.jpg");
    height: 100%;

    /* Set a specific height */
    min-height: 700px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    }
    
.parallax1 {
    /* The image used */
    background-image: url("pexels-photo-280310 .jpeg");
    height: 100%;

    /* Set a specific height */
    min-height: 600px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
    } 
    
    .navbar-fixed-top.scrolled {
       background-color: ghostwhite;
      transition: background-color 200ms linear;
    }

</style>
<body data-spy="scroll" data-target=".navbar" data-offset="50" onload="myFunction()"> 
   
   
 
       
    
     
     
     
    <!--
    <div>  
       <div class="jumbotron">
          <h2 class="animated bounce">Ruet Vehicle Management</h2>      
          <p>A management system where you can easily manage vehicles.</p>
        </div>
           
       
        
    </div> 
    -->
    <div class="parallax foo">
       <?php include 'navbar.php';?>
    
        <div class="hero-text" style="font-size:50px text-align: center; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color: white;">
           
            <h1 class="animated rubberBand" >Wellcome to OBTBS NEPAL </h1>
            
<div3>Onlinebtbsnepal.com is an authorized online agent for BUS<br>
	tickets, RIJAP and Safari as well as land transportation  company located in Chitwan, Nepal.
<br>
We're dealing with all Cites of Nepal such as KTM 
YATAYAT,POKHARA YATAYAT,SUDHURPACHIM YATAYAT,CHITWAN YATAYAT 
<br>
and PACHIMANCHAL YATAYAT  all your JOURNY   needs throughout 
<br >

the cities  with excellent personal contacts and therefore excellent conditions, both for fares and availability.
<br>
Similarly, we deal with MUSTANG Visite Pakage
 such as MANAKAMANA ,CHANDRAGIRI,SAURAHA NEW DHILLI  & many 
<br>
 more Pakages who are operating Journey
 to and from Chitwan, Nepal.
  </div3>
            <?php if(isset($_SESSION['username'])==true) { ?>
            <a class="btn btn-success" style="text-align: center" href="booking.php">Book a Vehicle</a>
            
            <?php } else{  ?>
            <a class="btn btn-success" style="text-align: center" href="login.php">Login To Book A Vehicle</a> 
            <?php } ?>
            
          </div>
    </div>                 
    
    <div>
       <br><br>
        <div id="bus_route" class="container">
          <div class="page-header">
            <h1 style="text-align: center">Bus Route</h1>      
          </div> 
          <div class="row">
              <div class="col-md-6 foo">
                <p><b>The ruet bus goes around theChitwan,KTM,Pokhara,Butwal citys in different interval. this is the route of the ruet bus.</b></p>
                <img src="Buses.jpg" class="img-responsive" >  
              </div>
              <div class="col-md-6">
                  <br>
                  <div class="mapouter"><div class="gmap_canvas">
                  <iframe width="500" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,Nepal=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                  </iframe><a href="https://www.online-timer.net"></a><br>
                  <style>.mapouter{position:relative;text-align:right;height:400px;width:400px;}</style>
                  <a href="https://www.embedgooglemap.net">embed google map wordpress</a>
                  <style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:500px;}</style></div></div>
              
              </div>
          </div>       
        </div>
        
        <br>
        <div class="page-header">
            <h1 style="text-align: center">Bus</h1>      
        </div>
        <div class="parallax1">
            <div class="row">
                <div class="col-3">
                  <div class="form-container">
                <img src="Bus1.jpg">
              <h3>TOUR BUS</h3>
              <ul >
                <li>Wifi</li>
                <li>Music System</li>
                <li>Comfortable Seats</li>
                <li>First Aid Kits</li>
                <li>Mobile Charger</li>
                <li>Miniral Water</li>
                <li>Coffee/hot cold Drinks</li>
                <li>LED TV</li>
                <li>Ac/Fan System</li>
                
          
                </ul>
               </div>
                </div>
          
    <div class="col-3">
      <div class="form-container">
                <img src="Bus2.jpg">
              <h3>Normal Bus</h3>
              <ul >
                <li>Wifi</li>
                <li>Music System</li>
                <li>Comfortable Seats</li>
                <li>Air Cooler</li>
                <li>Reading Light</li>
                <li>Miniral Water</li>
               
                <li>LED TV</li>
                
                
          
                </ul>
               </div></div>
               <div class="col-3">
                <div class="form-container">
                <img src="Safari.jfif">
              <h3>Safari Bus</h3>
              <ul >
                <li>Photogaraphy</li>
                <li>Music System</li>
                <li>Comfortable Seats</li>
                <li>Passenger Insurance</li>
                <li>Miniral Water</li>

                </ul>
                </div>
              </div>
       </div>
       
        </div>

</div>
    </div>
       
        </div>
        <div class="small-container">
         	<h2 class="title">Connected Yatayat</h2>
            <div class="row">
                <div class="col-4">
                <img src="Chitwanyatayat.png">
             
             
               </div>
          
    <div class="col-4">
                <img src="Sudhurpachimyatayat.png">
            
             
               </div>
               <div class="col-4">
                <img src="Pokharayatayat.png">
              
             
              </div>
              <div class="col-4">
                <img src="Nepalyatayat.png">
              
             
              </div>
       </div>
</div>
<h2 class="title">POPULAR TREKKING TOUR PACKAGE NEPAL</h2>
<div class="row">
                <div class="col-4">
                <img src="Chandragiri.jfif">
             
               <h4>CHANDRAGIRI Visit</h4>
               <p>Chandragiri Temple is situated at the top hill, seven kilometers away from Thankot. 
                   It lies on the south-west side of the Kathmandu valley. The temple is also known as Bhaleshwor Mahadev temple. 
                   Hindu devotees come here to worship Lord Shiva and take blessings.
                    It is believed that it is the same spot where Satidevi’s forehead fell off from her dead body in the place.</p>
               </div>
          
    <div class="col-4">
                <img src="manakamana.jfif">
              <h4>MANAKAMANA Visit </h4>
             <p>Manakamana devi temple is a highly venerated sacred
                  place of the Hindu goddess Bhagwati , 
                  an incarnation of Parvati. 
                  It is belived that the Goddess Bhagwati rewards Those Who Makes
                 The pilgrimage to her shrine by granting their wishes
             </p>
               </div>
               <div class="col-4">
                <img src="Sauraha.jfif">
              
               <h4>SAURAHA SAFARI PACKAGE</h4>
               <p>Laid-back Sauraha is known as a gateway to sprawling Chitwan National Park,
                    just across the Rapti River, with rhinos, tigers, and crocodiles inhabiting its tropical forests.
                     Low-key safari lodges dot the district, alongside down-home cafes and restaurants 
                     serving Nepalese specialties like momo dumplings. 
                </p>
       </div>
</div>

        <div id="driver" class="container">
          
          <div class="row">
            
              <div class="col-md-12">
                
                  <p style="font-size: 20px;"></p>
                  
              </div>
          </div>
               
        </div>
        
        
        <div id="bus" class="container">
          <div class="page-header">
            <h1 style="text-align: center"> </h1>      
          </div> 
          <div class="row">
              <div class="col-md-6">
                
                <img src="Chitwan.jfif" class="img-responsive" >  
              </div>
              <div class="col-md-6 foo1">
                  <p style="font-size:20px;">	<h1>Dasain Tihar Offer</h1>
		
		
		<h3>Sauraha ,Gautam Buddha International Cricket Stadium and Devghat Dham Visit Only Rs. 5000/ </h3>
		<br>
        <p>Gautam Buddha International Cricket Stadium is a cricket stadium being built at Chitwan, Nepal.
             The campaign for the stadium was started by the Dhurmus-Suntali Foundation,
             Devghat is one of the famous religious and cultural centers in central Nepal. </p></p>
              </div>
              
          </div>       
        </div>
        
     
                
      
        
        <footer style="background-color:;
          color:; padding-top: 70px;
          padding-bottom: 70px;" class="container-fluid text-center">
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="footer-col-1">
<h3>OBTBS Nepal</h3>

<p>OBTBS Nepal is a best online bus tickets booking serices 
  trusted by over 2 thousand happy customers globally.
   OBTBS Nepal Offers bus ticket booking through its website,
   ios,and android mobile apps for all major routes in Nepal.</p>
      </div>
      <div class="footer-col-2">
        <img src="Logo.jpeg">

      </div>
      <div class="footer-col-3">
        <h3>Book </h3>
        <ul>

          <li>Bus tickets</li>
          <li>Safari Bus</li>
          <li>Tour Bus RIJAP </li>
        </ul>
        
              </div>
              <div class="footer-col-4">
                <h3>Follow Us </h3>
                <ul>
        
                  <li>Facebook</li>
                  <li>Twitter</li>
                  <li>Instagram </li>
                  <li>YouTube</li>
                </ul>
                
                      </div>
                      <div class="footer-col-5">
                       
                        <ul>
                
                          <li><a href="">Home</a></li>
    	<li><a href="About.html">About Us</a></li>
    	<li><a href="">Contact</a></li>
    	<li><a href="Account.html">Account</a></li>
                        </ul>
                        
                        
                              </div>
    </div>
    </div>
    <hr>
    <p class="copyright">&#169;copyright 2020-OBTBS Nepal</p>
    <div class="brands-1">
       
        <div class="row">
            <h1> Payment Partner:</h1>
          <div class="col-6">
            <img src="e-sewa.jfif">
        
          </div>
          <div class="col-6">
            <img src="ime-pay.jfif">
          </div>
          <div class="col-6">
            <img src="Connect-ips.png">
          </div>
        
         
          
        
        
        </div>
        
        </div>
  </div>
</div>
                  </footer>
    
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".parallax");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
    </script>    
  
  
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  
  
  <script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
        sr.reveal('.foo1', { duration: 800,origin: 'top'});
    </script>



