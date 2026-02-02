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
else{
    $stmt = "ERROR";
}

if($stmt["retorno"]==true){
   
    $GLOBALS["stmt"] = $stmt;
    $produto->exibirTrue();
    
}
else{
     $GLOBALS["stmt"] = $stmt["msg"];
    $produto->exibirFalse();

}
}