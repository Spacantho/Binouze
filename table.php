<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "binouze";

// Create connection
$conn = new mysqli($localhost, $root, $, $binouze);
// Check connection
if ($conn->Erreur_Connection) {
  die("Connection failed: " . $conn->Erreur_Connection);