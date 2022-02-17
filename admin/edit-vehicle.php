<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 

if(isset($_POST['submit']))
  {
$vehicletitle=$_POST['vehicletitle'];
$dispo=$_POST['dispo'];


$priceperday=$_POST['priceperday'];
$Depart=$_POST['Depart'];
$Retour=$_POST['Retour'];
$Coleur=$_POST['Coleur'];
$fueltype=$_POST['fueltype'];
$seatingcapacity=$_POST['seatingcapacity'];

$id=intval($_GET['id']);

$sql="update vehicles set depart=:Depart,retour=:Retour,coleur=:Coleur,VehiclesTitle=:vehicletitle,PricePerDay=:priceperday,FuelType=:fueltype,SeatingCapacity=:seatingcapacity, Disponible=:dispo where id=:id ";
$query = $pdo->prepare($sql);
$query->bindParam(':vehicletitle',$vehicletitle,PDO::PARAM_STR);
$query->bindParam(':dispo',$dispo,PDO::PARAM_STR);

$query->bindParam(':Depart',$Depart,PDO::PARAM_STR);
$query->bindParam(':Retour',$Retour,PDO::PARAM_STR);
$query->bindParam(':Coleur',$Coleur,PDO::PARAM_STR);
$query->bindParam(':priceperday',$priceperday,PDO::PARAM_STR);
$query->bindParam(':fueltype',$fueltype,PDO::PARAM_STR);
$query->bindParam(':seatingcapacity',$seatingcapacity,PDO::PARAM_STR);

$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->execute();

$msg="= updated successfully";


}


	?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>Admin platforme</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
	<style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
body{
	background-image: url("Bgg.jpg") ;
	color : white
}
.panel-body {
	background-image: url("Bgg.jpg") ;

}
form{
	background-image: url("Bgg.jpg") ;

}
.panel{
	background-image: url("Bgg.jpg") ;
}
.succWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: black;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgb(0 0 0 / 10%);
    box-shadow: 0 1px 1px 0 rgb(0 0 0 / 10%);
}

		</style>
</head>

<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
	<div> <h2> psdfgsdgsdgsd </h2> </div>
		<div class="content-">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Modifier les Véhicules</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-body">

<?php 
$id=intval($_GET['id']);
$sql ="SELECT vehicles.* from vehicles  where vehicles.id=:id";
$query = $pdo -> prepare($sql);
$query-> bindParam(':id', $id, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-" >
<label class="col-sm-2 control-label"style = "padding-right : 50px" >Nom de Véhicule<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="vehicletitle" class="form-control" style = "margin-left : -9px" value="<?php echo htmlentities($result->VehiclesTitle)?>" required>
</div>			
				
<div class="hr-dashed"></div>

<div class="form-group">
<label class="col-sm-2 control-label">Prix par Jour<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="priceperday" class="form-control" style = "width : 450px;margin-left:15px"  value="<?php echo htmlentities($result->PricePerDay)?>" required>
</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label"style = "padding-right : 40px">Capacité (chaîses)<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="seatingcapacity" class="form-control" value="<?php echo htmlentities($result->SeatingCapacity)?>" required>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label"style = "padding-right : 20px">Coleur<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="Coleur" class="form-control" style = "width : 450px;margin-left:10px" value="<?php echo htmlentities($result->coleur)?>" required>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" style = "padding-right: 20px;">Heure de Depart<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="Depart" class="form-control" style = "width : 470px;margin-left: 20px;" placeholder="heure:minute">
</div>
<div class="form-group">
	<label class="col-sm-2 control-label"style = "padding-right : 30px">Heure de Retour<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="Retour" class="form-control" style = "width : 450px;" placeholder="heure:minute">
</div>
<div>
<label class="col-sm-2 control-label">Carburant<span style="color:red">*</span></label>
<div class="col-sm-4" style = "padding-top: 14px;">
<select class="=" name="fueltype" style = "bakcground-color : black ;color : black;font-weight:bold;margin-left : 30px" required>


<option value="OUI">Carburant</option>
<option value="NON">Non Carburant</option>

</select>
</div>	
<label class="col-sm-2 control-label"style = "padding-right : 30px">Disponible ?<span style="color:red">*</span></label>
<div class="col-sm-4" style = "padding-top: 14px;">
<select class="" name="dispo" style = "bakcground-color : black ;color : black;font-weight:bold" required style = "margin: 20px;">



<option value="NON">NON DISPONIBLE</option>
<option value="OUI">DISPONIBLE</option>



</select>
</div>		

</div>

<?php }} ?>


				<div class="form-group">
					<div class="col-sm-8 col-sm-offset-2" >
					
					<button class="btn btn-primary" name="submit" type="submit" style="margin-top:4%">Save changes</button>
					</div>
				</div>

			</form>
		</div>
		</div>
	</div>
</div>
		
	

	</div>
</div>
				
			

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php } ?>