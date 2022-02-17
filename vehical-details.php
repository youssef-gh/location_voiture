<?php 
session_start();
include('config.php');
// error_reporting(0);
if(isset($_POST['submit']))
{
  
$fromdate=$_POST['fromdate'];
$Nb=$_POST['Nb'];
$todate=$_POST['todate']; 
$Paiement=$_POST['Paiement'];
// echo $_SESSION['username'];
$username=$_SESSION['username'];
$status=0;
$vhid=$_GET['vhid'];
"SELECT users.*  from users ";
$sql="INSERT INTO  booking(userEmail,VehicleId,FromDate,ToDate,Status,paiement,nbjours) VALUES(:username, :vhid, :fromdate, :todate, :status, :Paiement, :Nb)";
$query = $pdo->prepare($sql);
$query->bindParam(':username',$username,PDO::PARAM_STR);
$query->bindParam(':Nb',$Nb,PDO::PARAM_STR);
$query->bindParam(':vhid',$vhid,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':todate',$todate,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->bindParam(':Paiement',$Paiement,PDO::PARAM_STR);

// if (!ini_get('display_errors')) {
//     ini_set('display_errors', '1');
// }

// echo ini_get('display_errors');
$query->execute();


}

?>


<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title> Details de Vehicule </title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">


<style>
body{
        background-image: url("images/bg.jpg");
      }
h1, h2, h3, h4, h5, h6 {
    color: #f5f5f5;
    font-weight: 900;
    margin: 0 auto 15px;
}
.divider {
    border-bottom: 0px;
    clear: both;
    margin: 0px auto;
}


</style>

</head>
<?php include('navb.php');?>

<body>
  <div class = "tsts">
</div>




<!--Listing-Image-Slider-->

<?php 
$vhid=intval($_GET['vhid']);
$sql = "SELECT vehicles.*  from vehicles  where vehicles.id=:vhid";
$query = $pdo -> prepare($sql);
$query->bindParam(':vhid',$vhid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  
?>  
<section id="listing_img_slider">
  <div><img src="images/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="image" width="900" height="560"></div>
  <div><img src="images/vehicleimages/<?php echo htmlentities($result->Vimage2);?>" class="img-responsive" alt="image" width="900" height="560"></div>
  <div><img src="images/vehicleimages/<?php echo htmlentities($result->Vimage3);?>" class="img-responsive" alt="image" width="900" height="560"></div>
 
</section>
<!--/Listing-Image-Slider-->


<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="listing_detail_head row">
      <div class="col-md-9">
        <h2> <?php echo htmlentities($result->VehiclesTitle);?></h2>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <p><?php echo htmlentities($result->PricePerDay);?> DH</p>Par jour
         
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="" style = "padding-bottom:60px;">
          <ul>
          
            
            <li> 
              <h5><p style = "font-size: 30px;font-weight : bold">DISPONIBLITE : <span style = "color : red ;text-decoration: underline; font-size: 30px;font-weight : bold"><?php echo htmlentities($result->Disponible);?></span> </p></h5>
        
            </li>
            <li> 
              <h5>Carburant :<span style = "color : red ;text-decoration: underline; font-size: 30px;font-weight : bold"> <?php echo htmlentities($result->FuelType);?></h5>
        
            </li>
       
            <li> 
              <h5 >Capacité:<span style = "color : red ;text-decoration: underline; font-size: 30px;font-weight : bold"> <?php echo htmlentities($result->SeatingCapacity);?> Chaises </h5>
            </li>
          </ul>
        </div>
        <div class="listing_more_info">
          <div class="listing_detail_wrp"> 
            
            
            <!-- Tab panes -->
            <div class="tab-content"> 
              <!-- vehicle-overview -->
              <div role="tabpanel" class="tab-pane active" id="vehicle-">
                <h3> INFO SUR CETTE VOITURE </h2>
                <p> 
                Classic
                ESP, ABS, airbag, vitres électriques <br> régulateur de vitesse, ordinateur de bord<br> climatisation automatique, phares automatiques<br> rétroviseurs électriques

                Elegance
                finition en hausse (boiseries)<br> jantes alliage, poignées de portes chromées

                Avantgarde
                boiseries remplacées par aluminium<br> des définitions supplémentaires<br>bas de caisse spécifique

                Option pack
                essuie-glaces automatiques, banquette arrière fractionnable, peinture métallisée

                Option pack Luxe
                climatisation automatique, cuir 
              </p>
              </div>
          
                
            </div>
          </div>
          
        </div>
<?php }} ?>
   
      </div>
      
      <!--Side-Bar-->
      <aside class="col-md-3">
      
       
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i>Reserver</h5>
          </div>
          <form method="post">
            <div class="form-group">
            <label> Date de Départ: </label>
              <input type="text" id = "" class="form-control" name="fromdate" placeholder="From Date(dd/mm/yyyy)" required>
            </div>
            <div class="form-group">
            <label> Date de Retour: </label>
              <input type="text"  class="form-control" name="todate" placeholder="To Date(dd/mm/yyyy)" required>
            </div>
            <div class="form-group">
              <label> Nombre de jours: </label>
              <input type="number" id = "ysf" class="form-control" name="Nb"  required>
            </div>
            <div class="form-group">
              <select class="" name="Paiement" required style ="color :black">

              <option value="Espece">Espèce</option>
              <option value="cheque">chèque</option>
              </select>
              </div>
            <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
              {?>
              <div class="form-group">
                <input type="submit" class="btn"  name="submit" value="Envoyer">
              </div>
              <?php } else { ?>
                <a href="login.php" class="btn btn-xs uppercase" >Connectez vous svp</a>

              <?php } ?>
              <?php 
                $vhid=intval($_GET['vhid']);
                $sql = "SELECT vehicles.*  from vehicles  where vehicles.id=:vhid";
                $query = $pdo -> prepare($sql);
                $query->bindParam(':vhid',$vhid, PDO::PARAM_STR);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                if($query->rowCount() > 0)
                {
                foreach($results as $result)
                {  
                ?>  
             

              
             <p style = "padding-top: 20px;font-size:20px;" id = "gh"> <b> Total : </b><span id="ttl" name="Total"> </span></b></p> <script> 
              var input_val = document.getElementById('ysf');
              function useValue() {
                  
                  var val = input_val.value;
                  document.getElementById('ttl').innerHTML= (val *<?php echo htmlentities($result->PricePerDay);?>) + " DH";
    
              } 
              input_val.onchange = useValue;
              <?php }} ?>




</script> 
          </form>
        </div>
        
        
      </aside>
      <!--/Side-Bar--> 
    </div>
    
    <div class="space-20"></div>
    <div class="divider"></div>
    
    
    
  </div>
</section>
<!--/Listing-detail--> 


<?php include('footer.php');?>





<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<script src="assets/switcher/js/switcher.js"></script>
<script src="assets/js/bootstrap-slider.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>

<!-- <script> 
var input_val = document.getElementById('ysf');
function useValue() {
    var val = input_val.value;
    // use it
    alert(val); // just to show the new value
}

</script> -->

</body>

</html>