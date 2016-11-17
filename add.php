<?php
include 'pdoconnect.php';

$sql =   "INSERT INTO evenement (summary, startEvent, endEvent, email)
VALUES ('".$_POST['summary']."','".$_POST["startEvent"]."','".$_POST["endEvent"]."','".$_POST["email"]."')";
if ($pdo->query($sql)) {
  echo "<script language='javascript' type='text/javascript'>alert('Évenement crée !')</script>";
  echo "<script language='javascript' type='text/javascript'>window.open('jsonparse.php','_self')</script>";
}
else{
echo "Les donnés n'ont pas été ajoutés.";
}
?>
