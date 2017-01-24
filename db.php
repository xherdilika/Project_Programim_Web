<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "tirana_argetohet";

  //krijojme lidhjen me db
  $conn = mysql_connect($servername, $username, $password);

  //kontrollojm lidhjen
  if(! $conn)
    die("Connection failed: " .mysql_error());

    mysql_select_db($dbname,$conn);
 ?>
