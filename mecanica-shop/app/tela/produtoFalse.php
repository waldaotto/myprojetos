<!DOCTYPE html>
<?php
    include "header.php";
   $msg = $GLOBALS["stmt"];
?>
<body>
  
    <hr>
    <h1>Erro durante a pesquisa do produto:</h1>
    <h2><?= $msg; ?></h2>
