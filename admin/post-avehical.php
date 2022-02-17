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
$priceperday=$_POST['priceperday'];
$fueltype=$_POST['fueltype'];
$matricule=$_POST['matricule'];
$Color=$_POST['Color'];
$seatingcapacity=$_POST['seatingcapacity'];
$vimage2=$_FILES["img2"]["name"];
$vimage3=$_FILES["img3"]["name"];

move_uploaded_file($_FILES["img1"]["tmp_name"],"img/vehicleimages/".$_FILES["img1"]["name"]);
move_uploaded_file($_FILES["img2"]["tmp_name"],"img/vehicleimages/".$_FILES["img2"]["name"]);
move_uploaded_file($_FILES["img3"]["tmp_name"],"img/vehicleimages/".$_FILES["img3"]["name"]);


$sql="INSERT INTO vehicles(VehiclesTitle,PricePerDay,FuelType,SeatingCapacity,Matricule, coleur,Vimage1,Vimage2,Vimage3,Vimage4,Vimage5) VALUES(:vehicletitle,:priceperday,:fueltype,:seatingcapacity,:matricule,:Color,:vimage1,:vimage2,:vimage3,:vimage4,:vimage5)";
$query = $pdo->prepare($sql);
$query->bindParam(':vehicletitle',$vehicletitle,PDO::PARAM_STR);
$query->bindParam(':matricule',$matricule,PDO::PARAM_STR);
$query->bindParam(':Color',$Color,PDO::PARAM_STR);
$query->bindParam(':priceperday',$priceperday,PDO::PARAM_STR);
$query->bindParam(':fueltype',$fueltype,PDO::PARAM_STR);
$query->bindParam(':seatingcapacity',$seatingcapacity,PDO::PARAM_STR);
$query->bindParam(':vimage1',$vimage1,PDO::PARAM_STR);
$query->bindParam(':vimage2',$vimage2,PDO::PARAM_STR);
$query->bindParam(':vimage3',$vimage3,PDO::PARAM_STR);
$query->bindParam(':vimage4',$vimage4,PDO::PARAM_STR);
$query->bindParam(':vimage5',$vimage5,PDO::PARAM_STR);

$query->execute();
$lastInsertId = $pdo->lastInsertId();
if($lastInsertId)
{
$msg="La voiture est ajouté";
}
else 
{
$error="Erreur , Reessayer";
}

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
h2{
	padding-top : 50px

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
	<!-- <div> <h2> psdfgsdgsdgsd </h2> </div> -->
		<div class="content-" style="padding-left:30px;">
			<div class="container-">

				<div class="row">
					<div class="col-md-16">
					
						<h2 class="page-title">Ajouter une Véhicle</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">


									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label">Vehicle Title<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="vehicletitle" class="form-control" required>
</div>


</div>
											
<div class="hr-dashed"></div>


<div class="form-group">
<label class="col-sm-2 control-label">Prix par jour<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="priceperday" class="form-control" required>
</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Capacité (Chaîses)<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="seatingcapacity" class="form-control" required>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Matricule<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="matricule" class="form-control" style = "width : 400px" required>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" style = "padding-top : 30px;">Coleur<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="Color" class="form-control" style = "margin : 20px;width : 480px"required>
</div>

</div>
<div>
<label class="col-sm-2 control-label">Carburant<span style="color:red">*</span></label>
<div class="col-sm-4" style = "padding-top: 10px;">
<select class="=" name="fueltype" style = "bakcground-color : black ;color : black;font-weight:bold" required>


<option value="OUI">Carburant</option>
<option value="NON">Non Carburant</option>

</select>
</div>		
</div>		
<div class="hr-dashe"></div>
<div>

</div>		



<div class="form-group" style = "padding-top: 50px;">
<div class="col-sm-12">
<h4><b>Upload Images</b></h4>
</div>
</div>


<div class="form-group">
<div class="col-sm-4">
Image 1 <span style="color:red">*</span><input type="file" name="img1" required>
</div>
<div class="col-sm-4">
Image 2<span style="color:red">*</span><input type="file" name="img2" required>
</div>
<div class="col-sm-4">
Image 3<span style="color:red">*</span><input type="file" name="img3" required>
</div>
</div>


<!-- <div class="form-group">
<div class="col-sm-4">
Image 4<span style="color:red">*</span><input type="file" name="img4" required>
</div>
<div class="col-sm-4">
Image 5<input type="file" name="img5">
</div>

</div> -->
<div class="hr-dashed"></div>									
</div>
</div>
</div>
</div>
							


	
	<div class="form-group">
		<div class="col-sm-8 col-sm-offset-2">
			<button class="btn btn-default" type="reset">Cancel</button>
			<button class="btn btn-primary" name="submit" type="submit">Save changes</button>
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