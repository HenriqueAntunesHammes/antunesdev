<?php
require 'conexaobanco.class.php';
 class SociosDAO {

   private $conexao = null;

   public function __construct(){
     $this->conexao = ConexaoBanco::getInstance();
   }

   public function __destruct(){}

   public function verificarSocios($s){
     try{
       $stat = $this->conexao->prepare("select * from socios where emailSocios = ? and senhaSocios = ?");
       $stat->bindValue(1, $s->emailSocios);
       $stat->bindValue(2, $s->senhaSocios);
       $stat->execute();

       $socios = null;
       $socios = $stat->fetchObject('Socios');
       return $socios;
     }catch(PDOException $e){
       echo "Erro ao buscar usuarios! ".$e;
     }
   }
 }
