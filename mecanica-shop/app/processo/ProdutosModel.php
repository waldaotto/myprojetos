<?php


require_once "produtosdb.php";

 class produtosModel {

   public function create($nome_produto,$descricao_produto,$preco_produto,$estoque_produto){
        
   }
   
   public function delete($id_produto){

   }

   public function findbyid($id_produto){
// RETORNA $error CASO ID NÃO SEJA INTEIRO
    if(!is_int($id_produto)){ 
    $error = [
      "retorno"=>false,
        "n"=>2,
        "msg"=>"ID de produto invalido",
    ];
    return $error;
   }
// RETORNA $error CASO NÃO EXISTA PRODUTO NO ID
   if(!isset($GLOBALS["database"]["produtos"][$id_produto])){
    $error = [
      "retorno"=>false,
        "n"=>1,
        "msg"=>"Produto inexistente",
    ];
    return $error;
   }
// RETORNA O PRODUTO
    $produto = $GLOBALS["database"]["produtos"][$id_produto];
    $retorno = [
                  "retorno"=>true,
                  "infos"=>$produto,
                  "id"=>$id_produto
               ];
    return $retorno;
   }
//
   function findall(){
    $produtos = $GLOBALS["database"]["produtos"];

    return $produtos;
    
   }

   public function exibirTrue(){
      require "../tela/produtoFound.php";
   }
   public function exibirFalse(){
      require "../tela/produtoFalse.php";
   }
   
}