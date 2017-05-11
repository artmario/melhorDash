<?php
class Produto {
   private $id_empresa_fk, $descricao, $id_produto, $preco;
   
   public function getEmpresaID(){
       return $this->$id_empresa_fk;
   }
   
   public function setEmpresaID($newEmpresaID){
       $this->id_empresa_fk = $newEmpresaID;
   }
   
   public function getDescricao(){
       return $this->$descricao ;
   }
   
   public function setDescricao($newDescricao){
       $this->descricao = $newDescricao;
   }
   
   public function getIdProduto(){
       return $this->$id_produto ;
   }
   
    public function setIdProduto($newIDProduto){
       $this->id_produto = $newIDProduto;
   }
   
   public function setPreco($newPreco){
       $this->preco = $newPreco;
   }
   
      public function getPreco(){
       return $this->preco ;
   }
   
  
}

?>