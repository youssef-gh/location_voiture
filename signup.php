<?php

session_start();

//Check if the user is logged in, if he is redirect him to welcome page
if(isset($_SESSION["loggedin"])){
    header("location: index.php");
    exit;
}

// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $username = $password = $confirm_password = $passport = $prenom =  $CIN = $datenaissance = $permis = $nationalite ="";
$name_err = $username_err = $password_err = $confirm_password_err = $passport_err =  $prenom_err = $CIN_err = $datenaissance_err = $permis_err = $nationalite_err= "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate Name
    if(empty(trim($_POST["name"]))){
        $name_err = "Please enter you full name.";     
    } elseif(strlen(trim($_POST["name"])) < 5){
        $name_err = "name must have atleast 5 characters.";
    } else{
        $name = trim($_POST["name"]);
    }
    if(empty(trim($_POST["prenom"]))){
        $prenom_err = "Please enter you full name.";     
    } elseif(strlen(trim($_POST["prenom"])) < 5){
        $prenom_err = "name must have atleast 5 characters.";
    } else{
        $prenom = trim($_POST["prenom"]);
    }
    if(empty(trim($_POST["CIN"]))){
        $CIN_err = "Please enter you full CIN.";     
    } elseif(strlen(trim($_POST["CIN"])) < 5){
        $CIN_err = "name must have atleast 5 characters.";
    } else{
        $CIN = trim($_POST["CIN"]);
    }
    if(empty(trim($_POST["datenaissance"]))){
        $datenaissance_err = "Please enter you full name.";     
    } elseif(strlen(trim($_POST["datenaissance"])) < 5){
        $datenaissance_err = "name must have atleast 5 characters.";
    } else{
        $datenaissance = trim($_POST["datenaissance"]);
    }
    if(empty(trim($_POST["permis"]))){
        $permis_err = "Please enter you full name.";     
    } elseif(strlen(trim($_POST["permis"])) < 5){
        $permis_err = "name must have atleast 5 characters.";
    } else{
        $permis = trim($_POST["permis"]);
    }

    if(empty(trim($_POST["passport"]))){
        $passport_err = "Please enter your passport.";     
    } elseif(strlen(trim($_POST["name"])) < 5){
        $passport_err = "passport must have atleast 5 characters.";
    } else{
        $passport = trim($_POST["passport"]);
    }

    if(empty(trim($_POST["nationalite"]))){
        $nationalite_err = "Please enter your nationalite.";     
    } elseif(strlen(trim($_POST["name"])) < 5){
        $nationalite_err = "nationalite must have atleast 5 characters.";
    } else{
        $nationalite = trim($_POST["nationalite"]);
    }
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (name ,username, password, passport, prenom, CIN, datenaissance, permis, nationalite) VALUES (:name, :username, :password, :passport, :prenom, :CIN, :datenaissance, :permis, :nationalite)";
         
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":name", $param_name, PDO::PARAM_STR);
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            $stmt->bindParam(":passport", $param_passport, PDO::PARAM_STR);
            $stmt->bindParam(":prenom", $param_prenom, PDO::PARAM_STR);
            $stmt->bindParam(":CIN", $param_CIN, PDO::PARAM_STR);
            $stmt->bindParam(":datenaissance", $param_datenaissance, PDO::PARAM_STR);
            $stmt->bindParam(":permis", $param_name, PDO::PARAM_STR);
            $stmt->bindParam(":nationalite", $param_nationalite, PDO::PARAM_STR);
            // Set parameters
            $param_username = $username;
            $param_name = $name;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_passport = $passport;
            $param_prenom = $prenom;
            $param_CIN = $CIN;
            $param_datenaissance = $datenaissance;
            $param_permis = $permis;
            $param_nationalite = $nationalite;
            // Attempt to execute the prepared statement
           
           
            if($stmt->execute()){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }
    
    // Close connection
    unset($pdo);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title >Sign Up</title>
    <link rel="stylesheet" href="assets/libs/bootstrap-4.3.1-dist/css/bootstrap.min.css">
   
    <style>
        body{ font: 14px sans-serif;
            background-image: url('images/login_bg.jpg');
            background-repeat: no-repeat;
             }
        .wrapper{width: 360px; padding: 20px; margin-left: auto; margin-right: auto; margin-top: 50px; color:white;}
    </style>
</head>
<body>
    <?php include("nav.php");?>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <!-- <p>Please fill this form to create an account.</p> -->
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?> ">
                <span class="invalid-feedback"><?php echo $name_err; ?></span>
            </div>   
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="prenom" class="form-control <?php echo (!empty($prenom_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $prenom; ?>">
                <span class="invalid-feedback"><?php echo $prenom_err; ?></span>
            </div>
            <div class="form-group">
                <label>Nationalité</label>
                <input type="text" name="nationalite" class="form-control <?php echo (!empty($nationalite_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $nationalite; ?> ">
                <span class="invalid-feedback"><?php echo $nationalite_err; ?></span>
            </div>    
            <div class="form-group">
                <label>CIN</label>
                <input type="text" name="CIN" class="form-control <?php echo (!empty($CIN_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $CIN; ?> ">
                <span class="invalid-feedback"><?php echo $CIN_err; ?></span>
            </div>   
            <div class="form-group">
                <label>Date De Naissance </label>
                <input type="text" name="datenaissance" class="form-control <?php echo (!empty($datenaissance_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $datenaissance; ?> ">
                <span class="invalid-feedback"><?php echo $datenaissance_err; ?></span>
            </div>   
            <div class="form-group">
                <label>Numéro de Permis</label>
                <input type="text" name="permis" class="form-control <?php echo (!empty($permis_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $permis; ?>">
                <span class="invalid-feedback"><?php echo $permis_err; ?></span>
            </div>    
            <div class="form-group">
                <label>username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div> 
            
            <div class="form-group">
                <label>passport</label>
                <input type="text" name="passport" class="form-control <?php echo (!empty($passport_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $passport; ?>">
                <span class="invalid-feedback"><?php echo $passport_err; ?></span>
            </div> 
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            
        
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
</body>
</html>