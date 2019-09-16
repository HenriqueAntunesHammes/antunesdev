<?php
require 'conexaobanco.class.php';
 class CFDao {// CF -> cfs Futuros
   private $conexao = null;

   public function __construct(){
     $this->conexao = ConexaoBanco::getInstance();
   }

   public function __destruct(){}

   public function cadastrarCF($cf){
     try{
       $stat=$this->conexao->prepare("insert into clientes_futuros
                                    (idcf,nome,sobrenome,celular,indicacao,cpf,datanasci,rua,numero,complemento,bairro)
                                    values(null,?,?,?,?,?,?,?,?,?,?)");
       $stat->bindValue(1, $cf->nome);
       $stat->bindValue(2, $cf->sobrenome);
       $stat->bindValue(3, $cf->celular);
       $stat->bindValue(4, $cf->indicacao);
       $stat->bindValue(5, $cf->cpf);
       $stat->bindValue(6, $cf->datanasci);
       $stat->bindValue(7, $cf->rua);
       $stat->bindValue(8, $cf->numero);
       $stat->bindValue(9, $cf->complemento);
       $stat->bindValue(10, $cf->bairro);
       $stat->execute();
     }catch(PDOException $e){
       echo "Erro ao cadastrar! ".$e;
     }
   }

   public function buscarcf(){
     try{
       $stat = $this->conexao->query("select * from clientes_futuros");
       $array = $stat->fetchAll(PDO::FETCH_CLASS, 'cf');
       return $array;
       echo "Erro ao buscar cfs! ".$e;
     }catch(PDOException $e){
     }
   }

   public function filtrar($pesquisa, $filtro){
     try{
       $query = "";
       switch($filtro){
         case "todos": $query = "";
         break;

         case "id": $query = "where idcf = ".$pesquisa;
         break;

         case "nome": $query = "where nome like '%".$pesquisa."%'";
         break;

         case "sobrenome": $query = "where sobrenome like '%".$pesquisa."%'";
         break;

         case "cpf": $query = "where cpf like '%".$pesquisa."%'";
         break;

         case "bairro": $query = "where bairro like '%".$pesquisa."%'";
         break;

         case "banco": $query = "where indicacao like '%".$pesquisa."%'";
         break;
       }

       $stat = $this->conexao->query("select * from clientes_futuros {$query}");
       $array = $stat->fetchAll(PDO::FETCH_CLASS, 'cf');
       return $array;

     }catch(PDOException $e){
       echo "Erro ao filtrar cfs. ".$e;
     }
   }

   public function alterarcf($cf){
     try{
       $stat = $this->conexao->prepare("update clientes_futuros set nome=?, sorenome=?, celular=?, indicacao=?, cpf=?, datanasci=?, rua=?, numero=?, complemento=?, bairro=? where idcf=?");
       $stat->bindValue(1, $cf->nome);
       $stat->bindValue(2, $cf->sobrenome);
       $stat->bindValue(3, $cf->celular);
       $stat->bindValue(4, $cf->indicacao);
       $stat->bindValue(5, $cf->cpf);
       $stat->bindValue(6, $cf->datanasci);
       $stat->bindValue(7, $cf->rua);
       $stat->bindValue(8, $cf->numero);
       $stat->bindValue(9, $cf->complemento);
       $stat->bindValue(10, $cf->bairro);
       $stat->execute();

     }catch(PDOException $e){
       echo "Erro ao alterar cf! ".$e;
     }
   }

   public function deletarcf($idcf){
     try{
       $stat = $this->conexao->prepare("delete from clientes_futuros where idcf = ?");
       $stat->bindValue(1, $idcf);
       $stat->execute();
     }catch(PDOException $e){
       echo "Erro ao excluir cfs! ".$e;
     }
   }
 }
