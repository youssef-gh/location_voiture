<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{




if(isset($_REQUEST['eid']))
{
$eid=intval($_GET['eid']);
$status="2";
$sql = "UPDATE booking SET Status=:status WHERE  id=:eid";
$query = $pdo->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);
$query-> bindParam(':eid',$eid, PDO::PARAM_STR);
$query -> execute();

$msg="Booking Successfully Cancelled";
}


if(isset($_REQUEST['aeid']))
	{
$aeid=intval($_GET['aeid']);
$status=1;

$sql = "UPDATE booking SET Status=:status WHERE  id=:aeid";
$query = $pdo->prepare($sql);
$query -> bindParam(':status',$status, PDO::PARAM_STR);

$query-> bindParam(':aeid',$aeid, PDO::PARAM_STR);
$query -> execute();

$msg="Booking Successfully Confirmed";
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
}
.panel-body {
	background-image: url("Bgg.jpg") ;

}
table{
	background-image: url("Bgg.jpg") ;
	color : white

}
.table-striped>tbody>tr:nth-of-type(odd) {
	background-image: url("Bgg.jpg") ;


}
th{
	color : red;
}
h2 {
	color : white;
	padding-top : 50px
}

.pagination>.disabled>span, .pagination>.disabled>span:hover, .pagination>.disabled>span:focus, .pagination>.disabled>a, .pagination>.disabled>a:hover, .pagination>.disabled>a:focus {
    color: #1d1c1b;
    background-color: #f8f5f0;
    border-color: #dfd7ca;
    cursor: not-allowed;
}


		</style>

</head>

<body>
	<?php include('includes/header.php');?>
	<!-- <div> <h2> psdfgsdgsdgsd </h2> </div> -->
	<div class="ts-main-content">
		<?php include('includes/leftbar.php');?>
		<div class="content-">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title" style = "color: white ">Les Factures</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-body">
							
								<table id="zctb" class="display table table-striped table-bordered " cellspacing="0" width="100%">
									
									<thead>
										<tr>
										<th>#</th>
										<th>CIN</th>
										<th>Name</th>
										<th>Montant</th>
										<th>Frais de Livraison</th>
										<th>Autre Frais</th>
										<th>Total</th>
										<th>Nombre de Jours</th>
										<th>Avance</th>
										<th>TVA</th>
										<th>HT</th>
										<th>Reste</th>
										<th>Date</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>#</th>
										<th>CIN</th>
										<th>Name</th>
										<th>Montant</th>
										<th>Frais de Livraison</th>
										<th>Autre Frais</th>
										<th>Total</th>
										<th>Nombre de Jours</th>
										<th>Avance</th>
										<th>TVA</th>
										<th>HT</th>
										<th>Reste</th>
										<th>Date</th>
											
										</tr>
									</tfoot>
									<tbody>

									<?php $sql = "SELECT facture.Name,facture.CIN,facture.avance,facture.fraislv,facture.frais,facture.nbjours, facture.montant, facture.matricule, facture.tva, facture.dates from facture  ";
											$query = $pdo -> prepare($sql);
											$query->execute();
											$results=$query->fetchAll(PDO::FETCH_OBJ);
											$cnt=1;
											if($query->rowCount() > 0)
											{
											foreach($results as $result)
											{				?>	
										<tr>
											<?php $result->total = $result->montant + $result->fraislv + $result->frais;	?>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($result->CIN);?></td>
											<td><?php echo htmlentities($result->Name);?></td>
											<td><?php echo htmlentities($result->montant);?></td>
											<td><?php echo htmlentities($result->fraislv);?></td>
											<td><?php echo htmlentities($result->frais);?></td>
											<td class="tot"><?php echo htmlentities($result->total);?></td>
											<td><?php echo htmlentities($result->nbjours);?></td>
											<td><?php echo htmlentities($result->avance);?></td>
											<td><?php echo htmlentities($result->tva);?></td>
											<td><?php echo htmlentities($result->montant-($result->montant*$result->tva));?></td>
											<td><?php echo htmlentities($result->total-$result->avance);?></td>
											<td><?php echo htmlentities($result->dates);?></td>
											<td></td>
											</tr>
										<?php 
										$cnt=$cnt+1;
											
												}} ?>
											<?php 
												
												$varr = '2021-08-22';
												$sql = "select SUM(montant + fraislv + frais) as somme from facture WHERE dates =  CURDATE()  ";
												
												$query = $pdo -> prepare($sql);
												$query->execute();
												$results=$query->fetchAll(PDO::FETCH_OBJ);
												foreach($results as $result)
													{				?>	
												
												 
												<p style = "font-size : 30px; color : Red;font-weight : bold"> RECETTE DU JOUR :  <span style = " font-size : 40px; text-decoration : underline; color : white ">  <?php echo htmlentities($result->somme); }?> DH.	</span> </p>
										
									</tbody>
								</table>
								

						

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
	<script>
	function confirm_it(){
		confirm('Do you really want to Confirm this booking');
		prmopt("entrer heure de depart (dd/mm/yyyy");
		
	}
	</script>
	<script>

</script>
</body>
</html>
<?php } ?>
