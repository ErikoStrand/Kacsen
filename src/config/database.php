<?php
if (!defined("DB_USER")) {
    define('DB_HOST', '10.156.14.124');
    define('DB_USER', 'Kacsen');
    define('DB_PASS', 'Kacsen123!');
    define('DB_NAME', 'Kacsen'); // Leave empty for default database

  // Create connection
  $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  
  // Check connection
  if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  }
}
