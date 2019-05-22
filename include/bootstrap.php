<?php
/* Här läggs include till de klasser vi har, samt att vi startar
  session och initierar objekt */
  session_start();

  include("models/database.php");

  // skapar ett objekt av typen databas.
  $database = new Database();
  $conn = $database->connectDB();



 ?>
