<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="assets/css/slick.css" rel="stylesheet">

		
    
    <title>Location Voiture - Home</title>
    <style>
      .section {
  background-image: url("assets/images/fun-facts-bg.jpg");
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 160px 0;
  position: relative;
  display: flex;
  }
  .f1 {
  border-radius: 50%;
  color: #ffffff;
  display: table;
  height: 188px;
  margin: 0 auto;
  text-align: center;
  width: 188px;
  background: #fa2837 none repeat scroll 0 0;
  fill: #fa2837;
  }
  .f1 .cell {
  display: table-cell;
  vertical-align: middle;
  }
  .f1 h2 {
  color: #ffffff;
  margin: 0 auto;
  }
  .f1 p {
  font-size: 15px;
  line-height: 24px;
  margin: 0 auto;
  }
  .f1 h2 .fa {
  display: block;
  }
  .f1 {
  margin: 10px auto;
  }
  .f1 {
  height: 130px;
  width: 130px;
  }
  .f1 h2 {
  font-size: 26px;
  }
  .f1 p {
  font-size: 12px;
  line-height: 14px;
  }
  .f1 {
  height: 158px;
  width: 158px;
  }
  .f1 h2 {
  font-size: 30px;
  }
  .f1 p {
  font-size: 13px;
  }
  



#infos .text {
  color: #ddd;
  justify-content: center;
  align-items: center;
  line-height: 2rem;
  font-size: 1.2rem;
  word-spacing: 2px;
  padding-left: 2rem;
  margin-bottom:0px;
  /* background-image: url("images/bg.jpg"); */
  
}
#infos{
  /* background-image: url("images/bg.jpg"); */
}
body{
  background-image: url("images/bg.jpg");

}


li{
  font-weight: bold;
}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.txt {
  color:  white;
  font-size: 50px;
  font-weight : bold;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;

  /* font-weight : bold */
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.1s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}



@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.section {
    background-image: url('assets/images/4.jpg');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 160px 0;
    position: relative;
    display: flex;
}

     </style> 
     
</head>
<body>

<?php include("nav.php"); ?>
   
<div class="car-slides">



<div class="slideshow-container">

<div class="mySlides fade" style="display: block;">
  <div class="numbertext">1 / 3</div>
  <img src="images/rangerover.jpg" style="width:100%">
  <div class="txt">+300 cars</div>
</div>

<div class="mySlides fade" style="display: none;">
  <div class="numbertext">2 / 3</div>
  <img src="images/nissan.jpg" style="width:100%">
  <div class="txt">+1000 clients</div>
</div>

<div class="mySlides fade" style="display: none;">
  <div class="numbertext">3 / 3</div>
  <img src="images/m.jpg" style="width:100%">
  <div class="txt">10 agences</div>
</div>


</div>
<br>

<div style="text-align:center">
  <span class="dot active"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 1900); // Change image every 2 seconds
}
</script>
<section id="infos">
        <h2 style="color: white"> <b> A propre De Nous: </b></h2>
        <div class="text">
          <p>
          La location de voiture courte durée (LCD) ou location de véhicule est un service proposé par une entreprise offrant aux clients la location des automobiles pour de courtes périodes pouvant aller de quelques heures à quelques semaines. Les sociétés de location sont souvent constituées de nombreuses agences locales permettant notamment aux clients de retourner leur véhicule à un endroit différent de celui de la prise en charge. Les agences de location sont situées pour la plupart dans les terminaux des aéroports, 
          à proximité immédiate des gares et dans les centres-villes et la réservation peut se faire en ligne par l’intermédiaire d’un site web.
            </p><ul>

            <li>CASABLANBCA <br></li>
            <li>BENI MELLAL<br></li>
            <li>MARRAKECH<br></li>
            <li>NADOUR<br></li>
            <li>TETOUAN<br></li>
            <li>ESSOUIRA<br></li>
            <li>AGADIR<br></li>
            <li>TANGER<br></li>

          </ul>
          
          <p></p>
          
        </div>
        <img src="./assets/common/img/dave.jpg" alt="">
      </section>
<div>
<section class="section flex_div">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="f1" style="margin-left:100px;">
          <div class="cell">
            <h2><i class="fa fa-calendar" aria-hidden="true"></i>40+</h2>
            <p>Ans dans le service</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="f1" style="margin-left:200px;">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>100+</h2>
            <p>Noveaux Voitures</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-1">
        <div class="f1" style="margin-left:290px;">
          <div class="cell">
            <h2><i class="fa fa-car" aria-hidden="true"></i>150+</h2>
            <p>Anciennes voitures</p>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section></div>

    

    

    
<?php include("footer.php"); ?>
  
</div></body>