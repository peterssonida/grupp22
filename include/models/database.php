<?php
/* Här lägger vi all funktionalitet som hanterar databas.
 tex uppkoppling mot databas, och ev alla metoder/funktioner som
 hanterar databasen. men ffa uppkopplingen till databasen */

 class Database {

   private $uname = "dbtrain_1064";
   private $pass = "utwspc";
   private $host = "dbtrain.im.uu.se";
   private $dbname = "dbtrain_1064";
   public $conn;

   public function connectDB() {

    $this->conn = null;

    $this->conn = new mysqli($this->host, $this->uname, $this->pass, $this->dbname);
    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn.connect_error);
    }
      return $this->conn;
  }

 }

 ?>
