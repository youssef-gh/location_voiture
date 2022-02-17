<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 

if(isset($_POST['submit']))
{
    $Avance=$_POST['Avance'];
    $Cin=$_POST['Cin'];
    $Fl=$_POST['Fl'];
	$Date=$_POST['Date'];
	$nbjours=$_POST['nbjours'];
	$montant=$_POST['montant'];
    $Frais=$_POST['Frais'];
	$Matricule=$_POST['Matricule'];
	$nom=$_POST['nom'];

    $id=intval($_GET['id']);
    $sql="Update  facture set CIN=:cin, matricule=:Matricule, Name=:nom, date=:Date, avance=:Avance, fraislv=:Fl, frais=:Frais, nbjours=:Nb, montant=:Montant where id=:id";
    $query = $pdo->prepare($sql);
    $query->bindParam(':Avance',$Avance,PDO::PARAM_STR);
    $query->bindParam(':Fl',$Fl,PDO::PARAM_STR);
    $query->bindParam(':Frais',$Frais,PDO::PARAM_STR);
	$query->bindParam(':Cin',$Cin,PDO::PARAM_STR);
	$query->bindParam(':nom',$nom,PDO::PARAM_STR);
	$query->bindParam(':Date',$Date,PDO::PARAM_STR);
	$query->bindParam(':Matricule',$Matricule,PDO::PARAM_STR);
	$query->bindParam(':Nb',$Nb,PDO::PARAM_STR);
	$query->bindParam(':Montant',$Montant,PDO::PARAM_STR);

    $query->execute();
    $lastInsertId = $pdo->lastInsertId();
    if($lastInsertId)
    {
    $msg="Vehicle posted successfully";
    }
    else 
    {
    $error="Something went wrong. Please try again";
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
	
	<title>Car Rental Portal | Admin Post Vehicle</title>

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
    </head>

<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
	<div> <h2> psdfgsdgsdgsd </h2> </div>
		<div class="content-" style="padding-left:30px;">
			<div class="container-">

				<div class="row">
					<div class="col-md-16">
					
						<h2 class="page-title">Post A Vehicle</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Basic Info</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label"> CIN: <span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="Cin" class="form-control" required>
</div>
<div class="form-group">
<label class="col-sm-2 control-label"> Nom <span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="nom" class="form-control" required>
</div>
<div class="form-group">
<label class="col-sm-2 control-label"> Matricule <span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="Matricule" class="form-control" required>
</div>
<div class="form-group">
<label class="col-sm-2 control-label"> Avance <span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="Avance" class="form-control" required>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">nombre de jours<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="Nb" class="form-control" required>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Montant<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="Montant" class="form-control" required>
</div>




</div>
											
<div class="hr-dashed"></div>


<div class="form-group">
<label class="col-sm-2 control-label">Frais de Livraison<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="Fl" class="form-control" required>
</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Autres Frais<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="Frais" class="form-control" required>
</div>                
</div>		
</div>
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


