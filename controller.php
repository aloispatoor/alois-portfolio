
<?php
  // Vérifie qu'il provient d'un formulaire
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //identifiants mysql
    $host = "localhost";
    $username = "xyfl3645_apatoor";
    $password = "4k9j6mRSMnyTUAq";
    $database = "xyfl3645_portfolio";

    $name = $_POST["name"]; 
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    if (!isset($name)){
        die("S'il vous plaît, entrez votre nom");
    }
    if (!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("S'il vous plaît, entrez votre adresse e-mail");
    }
    if (!isset($message)){
        die("S'il vous plaît, entrez votre message");
    }

    //Ouvrir une nouvelle connexion au serveur MySQL
    $mysqli = new mysqli($host, $username, $password, $database);

    //Afficher toute erreur de connexion
    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
      }  

    //préparer la requête d'insertion SQL
    $statement = $mysqli->prepare("INSERT INTO messages (name, email, message) VALUES(?, ?, ?)"); 

    //Associer les valeurs et exécuter la requête d'insertion
    $statement->bind_param('sss', $name, $email, $message); 
    
    if($statement->execute()){
    print "Bonjour " . $name . "!, votre message a été envoyé !";
    }else{
    print $mysqli->error; 
    }
}
?>