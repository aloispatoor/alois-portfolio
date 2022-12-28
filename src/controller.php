<?php
  require 'includes/config.php';

  if(!empty($_POST["message"]) && !empty($_POST["email"]) && !empty($_POST["name"]) && empty($_POST["botcheck"])){
    $name = trim(htmlspecialchars($_POST["name"])); 
    $email = trim(htmlspecialchars($_POST["email"]));
    $message = trim(htmlspecialchars($_POST["message"]));
  } else {
    header("Location:../views/index.php?error=missingInput#contact");
    exit();
  }

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location:../views/index.php?error=invalidEmail#contact");
    exit();
  }
  if (strlen($name) < 3 || strlen($name) > 100) {
      header("Location:../views/index.php?error=invalidName#contact");
      exit();
  }
  if (strlen($message) < 20 || strlen($message) > 500) {
      header("Location:../views/index.php?error=invalidMessage#contact");
      exit();
  }

  try{
    $sqlInsert = 'INSERT INTO messages (name,email,message) VALUES (:name,:email,:message)';
    $reqInsert = $db->prepare($sqlInsert);
    $reqInsert->bindValue(':name', $name, PDO::PARAM_STR);
    $reqInsert->bindValue(':email', $email, PDO::PARAM_STR);
    $reqInsert->bindValue(':message', $message, PDO::PARAM_STR);
    $resultInsert = $reqInsert->execute();
  } catch (PDOException $e) {
    echo 'Erreur :'.$e->getMessage();
  }

  if ($resultInsert) {
    header("Location:../views/index.php?success=messageSent#contact");
    exit();

  } else {
    header("Location:../views/index.php?success=unknownError#contact");
    exit();

  }
