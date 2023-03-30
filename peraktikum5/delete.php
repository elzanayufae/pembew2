<?php
require_once("dbkoneksi.php");

if (isset($_GET["iddel"])) 
    $iddel = $_GET["iddel"];
    $query = "DELETE FROM pelanggan WHERE id = 'iddel";
    $delete = $dbh->query($query)

?>