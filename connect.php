<?php 

error_reporting(0);
$conn = new mysqli('160.153.77.227', 'neerajkeerp', 'v{L0?9^PUfsV', "esp_test");
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
$conn->query("set time_zone = '+00:00' ");

?>