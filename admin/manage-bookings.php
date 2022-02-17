<?php
session_start();
error_reporting(0);
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

$msg="Reservation annulé";
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

$msg="Réservation Confirmé";
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
.row{
	color : white
}

.pagination>.disabled>span, .pagination>.disabled>span:hover, .pagination>.disabled>span:focus, .pagination>.disabled>a, .pagination>.disabled>a:hover, .pagination>.disabled>a:focus {
    color: #1d1c1b;
    background-color: #f8f5f0;
    border-color: #dfd7ca;
    cursor: not-allowed;
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
		<div class="content-">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Les Réservations</h2>

						<!-- Zero Configuration Table -->
						<div class="panel panel-default">
							<div class="panel-body">
							<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap" style = "background-color : black"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
								<table id="zctb" class="display table table-striped table-bordered " cellspacing="0" width="100%">
									<thead>
										<tr>
										<th>#</th>
											<th>Nom</th>
											<th>Véhicule</th>
											<th>Paiement</th>
											<th>Heure de Départ</th>
											<th>Heure de Retour</th>
											<th>Date de Départ</th>
											<th>Date de Retour</th>
											<th>Nombre de jours</th>
											<th>Posté en</th>
											<th>Status</th>
											
											<th>Action</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
										<th>#</th>
										<th>Nom</th>
											<th>Véhicule</th>
											<th>Paiement</th>
											<th>Heure de Départ</th>
											<th>Heure de Retour</th>
											<th>Date de Départ</th>
											<th>Date de Retour</th>
											<th>Nombre de jours</th>
											<th>Posté en</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</tfoot>
									<tbody>

									<?php $sql = "SELECT users.name,vehicles.VehiclesTitle,booking.paiement,booking.FromDate,booking.ToDate,booking.nbjours,booking.VehicleId ,booking.paiement,vehicles.depart,vehicles.retour, vehicles.retour as vid,booking.Status,booking.PostingDate,booking.id  from booking join vehicles on vehicles.id=booking.VehicleId join users on users.username=booking.userEmail   ";
											$query = $pdo -> prepare($sql);
											$query->execute();
											$results=$query->fetchAll(PDO::FETCH_OBJ);
											$cnt=1;
											if($query->rowCount() > 0)
											{
											foreach($results as $result)
											{				?>	
										<tr>
											<td><?php echo htmlentities($cnt);?></td>
											<td><?php echo htmlentities($result->name);?></td>
											<td><?php echo htmlentities($result->VehiclesTitle);?></td>
											<td><?php echo htmlentities($result->paiement);?></td>
											<td><?php echo htmlentities($result->depart);?></td>
											<td><?php echo htmlentities($result->retour);?></td>
											<td><?php echo htmlentities($result->FromDate);?></td>
											<td><?php echo htmlentities($result->FromDate);?></td>
											<td><?php echo htmlentities($result->nbjours);?></td>
											<td><?php echo htmlentities($result->PostingDate);?></td>
										
											<td><?php 
											if($result->Status==0)
											{
											echo htmlentities('Pas encore confirmé');
											} else if ($result->Status==1) {
												
											echo htmlentities('Confirmé');
											}
											else{
												echo htmlentities('Annulé');
											}
										?></td>
											<!-- <td><?php echo htmlentities($result->PostingDate);?></td> -->
										<td><a href="manage-bookings.php?aeid=<?php echo htmlentities($result->id);?>" onclick="confirm"> Confirmer</a> 


										<a href="manage-bookings.php?eid=<?php echo htmlentities($result->id);?>" onclick="return confirm('Do you really want to Cancel this Booking')"> Annuler</a>
										</td>

										</tr>
										<?php $cnt=$cnt+1; }} ?>
										
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
	<!-- <script src="js/bootstrap-select.min.js"></script>  -->
	<!-- <script src="js/bootstrap.min.js"></script> -->
	<!-- <script src="js/jquery.dataTables.min.js"></script> -->
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
