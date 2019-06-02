<!DOCTYPE html>

<html >
<head>
  <meta charset="utf-8">
</head>
<body>

<?php
    require 'functions.php';
    
    $prescription=$_GET['prescription'];
    
    $sql = "INSERT INTO doctor (prescription)
VALUES ('$prescription')";
 insert($sql);