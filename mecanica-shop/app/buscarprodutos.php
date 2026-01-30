<!DOCTYPE html>

<?php

require_once "ProdutosModel.php";

$produto = new produtosModel;

if(isset($_GET["buscaproduto"]) && $_GET["buscaproduto"]!=null){
    $query = $_GET["buscaproduto"];
    $query = (int)$query;

if(is_int($query)){
    $stmt = $produto->findbyid($query);
}
elseif(ctype_alpha($query)){
    $stmt = $produto->findbyname($query);
}
else{
    $stmt = "ERROR";
}

if($stmt["retorno"]==true){
   
    $GLOBALS["stmt"] = $stmt;
    $produto->exibirTrue();
    
}
else{
    //funcao deu ruim
}
}