<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: rgba(0, 0, 0, 0.979);
  height:3rem;
  opacity: 0.8;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  color: #fff;
    border-bottom: #fff solid 2px;
}

.topnav a.active {
  text-decoration: none;
    transition: background-color 0.5s;
    margin-left: 3rem;
    color: #fff;
    font-size: 1.2rem;
    padding: 0.5rem 1rem;
    border-radius: 3px;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 10px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
.topnav a:link,
  .topnav a:visited,
  .topnav a:active {
    text-decoration: none;
    transition: background-color 0.5s;
    margin-left: 3rem;
    color: #fff;
    font-size: 1.2rem;
    padding: 0.5rem 1rem;
    border-radius: 3px;
  }
  
</style>
</head>
<body>
<section class = "navv">
<div class="topnav">
  <a class="activeE" href="index.php">Acceuil</a>
  <a href="cars1.php">Cars</a>
  <a href="agences.php">agences</a>
  <a class = "login" href="login.php">Se connecter</a>
  <a class = "logout" href="logout.php">Deconnexion</a>
  
</div>
</section>
</body>
</html>
