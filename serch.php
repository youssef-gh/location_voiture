<!DOCTYPE html>
<html lang="en">
  <head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Notre Cars</title>
    <!--Bootstrap -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"> -->
    <!--Custome Style -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!-- <link rel="stylesheet" href="assets/common/css/style.css" type="text/css"> -->
    <!--OWL Carousel slider-->
    <!-- <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css"> -->
    <!-- <link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css"> -->
    <!--slick-slider -->
    <!-- <link href="assets/css/slick.css" rel="stylesheet"> -->
    <!--bootstrap-slider -->
    <!-- <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet"> -->
    <!--FontAwesome Font Style -->
    <!-- <link href="assets/css/font-awesome.min.css" rel="stylesheet"> -->

    
    
    <title>Our Cars </title>
    <style>  @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
          /* *{
  margin: 0;
  padding: 0;
  color: #d9d9d9;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
} */
.content1{
  position: relative;
  margin: 130px auto;
  text-align: center;
  padding: 0 20px;
}
.content1 .text{
  font-size: 2.5rem;
  font-weight: 600;
  color: #202020;
}
.content1 .p{
  font-size: 2.1875rem;
  font-weight: 600;
  color: #202020;
}
footer{
  /* position: fixed; */
  bottom: 0px;
  width: 100%;
  background: #111;
}
.main-content{
  display: flex;
}
.main-content .box{
  flex-basis: 50%;
  padding: 10px 20px;
}
.box h2{
  font-size: 1.125rem;
  font-weight: 600;
  text-transform: uppercase;
}
.box .content{
  margin: 20px 0 0 0;
  position: relative;
}
.box .content:before{
  position: absolute;
  content: '';
  top: -10px;
  height: 2px;
  width: 100%;
  background: #1a1a1a;
}
.box .content:after{
  position: absolute;
  content: '';
  height: 2px;
  width: 15%;
  background: #f12020;
  top: -10px;
}
.left .content p{
  text-align: justify;
}
.left .content .social{
  margin: 20px 0 0 0;
}
.left .content .social a{
  padding: 0 2px;
}
.left .content .social a span{
  height: 40px;
  width: 40px;
  background: #1a1a1a;
  line-height: 40px;
  text-align: center;
  font-size: 18px;
  border-radius: 5px;
  transition: 0.3s;
}
.left .content .social a span:hover{
  background: #f12020;
}
.center .content .fas{
  font-size: 1.4375rem;
  background: #1a1a1a;
  height: 45px;
  width: 45px;
  line-height: 45px;
  text-align: center;
  border-radius: 50%;
  transition: 0.3s;
  cursor: pointer;
}
.center .content .fas:hover{
  background: #f12020;
}
.center .content .text{
  font-size: 1.0625rem;
  font-weight: 500;
  padding-left: 10px;
}
.center .content .phone{
  margin: 15px 0;
}
.right form .text{
  font-size: 1.0625rem;
  margin-bottom: 2px;
  color: #656565;
}
.right form .msg{
  margin-top: 10px;
}
.right form input, .right form textarea{
  width: 100%;
  font-size: 1.0625rem;
  background: #151515;
  padding-left: 10px;
  border: 1px solid #222222;
}
.right form input:focus,
.right form textarea:focus{
  outline-color: #3498db;
}
.right form input{
  height: 35px;
}
.right form .btn{
  margin-top: 10px;
}
.right form .btn button{
  height: 40px;
  width: 100%;
  border: none;
  outline: none;
  background: #f12020;
  font-size: 1.0625rem;
  font-weight: 500;
  cursor: pointer;
  transition: .3s;
}
.right form .btn button:hover{
  background: #000;
}
.bottom center{
  padding: 5px;
  font-size: 0.9375rem;
  background: #151515;
}
.bottom center span{
  color: #656565;
}
.bottom center a{
  color: #f12020;
  text-decoration: none;
}
.bottom center a:hover{
  text-decoration: underline;
}
@media screen and (max-width: 900px) {
  footer{
    position: relative;
    bottom: 0px;
  }
  .main-content{
    flex-wrap: wrap;
    flex-direction: column;
  }
  .main-content .box{
    margin: 5px 0;
  }



          
    
      .padding{
        padding:100px 120px;
      }}
      body{
        background-image: url("images/bg.jpg");
      }
      .gray-bg {
	background:#111;
}
.result-sorting-wrapper {
  color : white;
  background: black none repeat scroll 0 0;
  border-bottom: 0px ;
  border-left: 0px ;
  margin-bottom: 40px;
  overflow: hidden;
  padding: 10px 20px;
}
.sorting-count span {
    color: #f5f5f5;
}
.product-listing-content h5 a {
    color: #f5f0f0;
}
    </style>
  </head>

<body>
<?php 
   
   include("nav.php");
   include_once 'config.php';
    ?>



<section class="listing-page">
  <div >
  <!-- class="container"> -->
    <div class="">
      <!-- <div class = "padding"> -->
        <div class="result-sorting-wrapper">
          <div class="sorting-count">

          <?php
if (isset($_POST["var1"])) {
    $var1 = $_POST['var1'];

$sql = "SELECT * FROM vehicles WHERE VehiclesTitle LIKE :search";
$query = $pdo->prepare($sql);
// $query->bindValue(':search', '%' . $var1 . '%',);
$query->bindParam(':search',$var1, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>
       
        <div class="product-listing-m gray-bg" style = "margin:100px;">
          <div class="product-listing-img"><img src="images/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="Image" /> </a> 
          </div>
          <div class="product-listing-content" style = "color:white;">
            <h5><a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"> <?php echo htmlentities($result->VehiclesTitle);?></a></h5>
            <p class="list-price">$<?php echo htmlentities($result->PricePerDay);?> Per Day</p>
            <ul>
              <li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($result->SeatingCapacity);?> Chaises</li>
              <li><i class="fa fa-" aria-hidden="true"></i>Coleur: <b> <?php echo htmlentities($result->coleur);?> </b></li>
              <li><i class="fa fa-car" aria-hidden="true"></i>Carburant :<b> <?php echo htmlentities($result->FuelType);?></b></li>
              
            </ul>
            <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>" class="btn">Voir les Details <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
          </div>
        </div>
      <?php }}
    else { 
        echo " Aucun Resultat Ressayer SVP !";

    } } ?>
         </div>
          
    </div>
  </div>
</div>





</section>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<?php include("footer.php"); ?>
  



  

</body>