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
$Avance=$_POST['Avance'];
$Matricule=$_POST['Matricule'];

$Frais=$_POST['Frais'];
$Fl=$_POST['Fl'];
$Cin=$_POST['Cin'];
$nom=$_POST['nom'];
$Nb=$_POST['Nb'];
$Montant=$_POST['Montant'];
$sql="insert into facture(avance, CIN, fraislv, frais, Name, matricule, montant, nbjours, dates) values(:Avance, :Cin, :Fl, :Frais, :nom, :Matricule,:Montant, :Nb, NOW())";
"UPDATE facture SET dates = NOW()";
"UPDATE facture SET total = montant  + fraislv + frais";
$query = $pdo->prepare($sql);
$query->bindParam(':Avance',$Avance,PDO::PARAM_STR);
$query->bindParam(':Fl',$Fl,PDO::PARAM_STR);
$query->bindParam(':Frais',$Frais,PDO::PARAM_STR);
$query->bindParam(':Cin',$Cin,PDO::PARAM_STR);
$query->bindParam(':nom',$nom,PDO::PARAM_STR);
$query->bindParam(':Matricule',$Matricule,PDO::PARAM_STR);
$query->bindParam(':Nb',$Nb,PDO::PARAM_STR);
$query->bindParam(':Montant',$Montant,PDO::PARAM_STR);


$query->execute();


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
h2{
	padding-top : 50px
}
.form-control{
	width: 400px;
	/* padding-left : 100px */
	
}
.control-panel{
	/* padding-right: 60px; */
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
					
						<h2 class="page-title">Ajouter Facture</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">


<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label" style = "padding-right: 60px;"> CIN: <span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="Cin" class="form-control"  style = "margin-left:-20px" required>
</div>
<div class="form-group">
<label class="col-sm-2 control-label"> Nom <span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="nom" class="form-control" style = "margin-left:20px" required>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" style = "padding-right: 40px;"> Matricule <span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="Matricule" class="form-control" required>
</div>
<div class="form-group" >
<label class="col-sm-2 control-label"style = "padding-right:25px;"> Avance <span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="Avance" class="form-control" style = "margin-left:10px" required>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" style = "padding-right: 20px;">nombre de jours<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="Nb" class="form-control" style = "margin-left:20px" required>
</div>
<div class="form-group">
<label class="col-sm-2 control-label"style = "padding-right: 30px;">Montant<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="Montant" class="form-control" required>
</div>


</div>
											
<div class="hr-dashed"></div>


<div class="form-group">
<label class="col-sm-2 control-label">Frais de Livraison<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="Fl" class="form-control" style = "margin-left:30px" required>
</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Autres Frais<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="Frais" class="form-control" style = "margin-left:30px" required>
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