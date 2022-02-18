<?php

// submit_contact.php
if (!isset($_POST['email']) || !isset($_POST['message']))
{
	echo('Il faut un email et un message pour soumettre le formulaire.');
    return;
}	

$email = $_POST['email'];
$message = $_POST['message'];
$name = $_POST['name'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Message Envoyé !</title>
</head>
<body>
    <main>
        <h2>Message Envoyé !</h2>
        <h3>Rappel de vos informations :</h3>
        <p><b>Nom</b> : <?php echo strip_tags($name); ?></p>
        <p><b>Email</b> : <?php echo($email); ?></p>
        <p><b>Message</b> : <?php echo strip_tags($message); ?></p>
    </main>
    
</body>
</html>