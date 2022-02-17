<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="assets/common/css/style.css" /> -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->


<link href="assets/css/slick.css" rel="stylesheet">
<title>Notre Agences</title>
<style> 
#tour-dates .table {
  width: 100%;
}

#tour-dates .table table {
  width: 60%;
}

#tour-dates .table {
  padding: 2.6rem 1rem;
  background-color: #222;
  color: #ddd;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

#tour-dates .table h2 {
  font-size: 3rem;
  text-align: center;
  padding: 1rem 0;
  color: #fff;
}

#tour-dates .table table tr td {
  padding: 1rem 1rem;
}

#tour-dates table td a {
  text-decoration: none;
  background-color: #000;
  padding: 0.3rem 0.5rem;
  color: #ddd;
  transition: background-color 0.2s, color 0.2s;
}

#tour-dates table td a:hover {
  background-color: #8B0000;
  color: white;
}
th{
    color: #cc0000;
}
body{
  background-image : url('images/bg.jpg')
}
</style>
</head>

<body >
<?php include("nav.php"); ?>
<section id="tour-dates">
        <div class="table">
          <h2 style = "color:#f12020">Notres Agences</h2>
          <table>
            <tr>
              <th>Ville de l'agance</th>
              <th>Adresse</th>
              <th>Contact1</th>
              <th>Contac2</th>
            </tr> 
            <tr>
            <td>BENI MELLAL</td>
              <td>Amal RUE 01 BENI MELLAL</td>
              <td>0545254633</td>
              <td>0545254633</td>
            </tr>
            <tr>
            <td>NADOUR</td>
              <td>Agdal RUE 05 NADOUR</td>
              <td>0545254633</td>
              <td>0545254633</td>
            </tr><tr>
            <td>MARRAKECH</td>
              <td>Ramz RUE 02 MARRAKECH</td>
              <td>0545254633</td>
              <td>0545254633</td>
            </tr><tr>
            <td>AGADIR</td>
              <td>Alfateh RUE 28 AGADIR</td>
              <td>0545254633</td>
              <td>0545254633</td>
            </tr><tr>
            <td>TANGER</td>
              <td>Acharaf RUE 48 TANGER</td>
              <td>0545254633</td>
              <td>0545254633</td>
            </tr><tr>
            <td>ESSOUIRA</td>
              <td>Kassbah RUE 32 ESSOUIRA</td>
              <td>0545254633</td>
              <td>0545254633</td>
            </tr><tr>
            <td>TETOUAN</td>
              <td>Sidi youssef RUE 16 TETOUAN</td>
              <td>0545254633</td>
              <td>0545254633</td>
            </tr><tr>
            <td>KHOURIBGA</td>
              <td>Assalam RUE 01 KHOURIBGA</td>
              <td>0545254633</td>
              <td>0545254633</td>
            </tr><tr>
            <td>RABAT</td>
              <td>Airfane RUE 12 RABAT</td>
              <td>0545254633</td>
              <td>0545254633</td>
            </tr><tr>
            <td>LAAYOUNE</td>
              <td>sahara RUE 08 LAAYOUNE</td>
              <td>0545254633</td>
              <td>0545254633</td>
            </tr><tr>
            <td>DAKHLA</td>
              <td>elmeddina RUE 07 DAKHLA</td>
              <td>0545254633</td>
              <td>0545254633</td>
            </tr>
          </table>
        </div>
      </section>
    </main>
    

</body>
<script type="text/javascript" src="./assets/libs/jquery/jquery.min.js"></script>
  <!-- jQuery Modal -->
  <script src="./assets/libs/jquery/plugins/jquery.modal.min.js"></script>
  <link rel="stylesheet" href="./assets/libs/jquery/plugins/jquery.modal.min.css" />
  <?php include("footer.php"); ?>
</html>
