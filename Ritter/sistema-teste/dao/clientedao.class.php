<?php
require 'conexaobanco.class.php';
 class ClienteDAO {
   private $conexao = null;

   public function __construct(){
     $this->conexao = ConexaoBanco::getInstance();
   }

   public function __destruct(){}

   public function cadastrarCliente($cliente){
     try{
       $stat=$this->conexao->prepare("insert into cliente
                                    (idCliente,nome,sobrenome,celular,email,cpf,datanasci,rua,numero,complemento,bairro,banco,agencia,conta,operacao,selftipo,socio)
                                    values(null,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
       $stat->bindValue(1, $cliente->nome);
       $stat->bindValue(2, $cliente->sobrenome);
       $stat->bindValue(3, $cliente->celular);
       $stat->bindValue(4, $cliente->email);
       $stat->bindValue(5, $cliente->cpf);
       $stat->bindValue(6, $cliente->datanasci);
       $stat->bindValue(7, $cliente->rua);
       $stat->bindValue(8, $cliente->numero);
       $stat->bindValue(9, $cliente->complemento);
       $stat->bindValue(10, $cliente->bairro);
       $stat->bindValue(11, $cliente->banco);
       $stat->bindValue(12, $cliente->agencia);
       $stat->bindValue(13, $cliente->conta);
       $stat->bindValue(14, $cliente->operacao);
       $stat->bindValue(15, $cliente->selftipo);
       $stat->bindValue(16, $cliente->socio);
       $stat->execute();
     }catch(PDOException $e){
       echo "Erro ao cadastrar! ".$e;
     }
   }

   public function buscarCliente(){
     try{
       $stat = $this->conexao->query("select * from cliente");
       $array = $stat->fetchAll(PDO::FETCH_CLASS, 'Cliente');
       return $array;
       echo "Erro ao buscar Clientes! ".$e;
     }catch(PDOException $e){
     }
   }

   public function filtrar($pesquisa, $filtro){
     try{
       $query = "";
       switch($filtro){
         case "todos": $query = "";
         break;

         case "id": $query = "where idCliente = ".$pesquisa;
         break;

         case "nome": $query = "where nome like '%".$pesquisa."%'";
         break;

         case "sobrenome": $query = "where sobrenome like '%".$pesquisa."%'";
         break;

         case "cpf": $query = "where cpf like '%".$pesquisa."%'";
         break;

         case "bairro": $query = "where bairro like '%".$pesquisa."%'";
         break;

         case "socio": $query = "where socio like '%".$pesquisa."%'";
         break;
       }

       $stat = $this->conexao->query("select * from cliente {$query}");
       $array = $stat->fetchAll(PDO::FETCH_CLASS, 'cliente');
       return $array;

     }catch(PDOException $e){
       echo "Erro ao filtrar clientes. ".$e;
     }
   }

   public function alterarCliente($cliente){
     try{
       $stat = $this->conexao->prepare("update cliente set nome=?, sorenome=?, celular=?, email=?, cpf=?, datanasci=?, rua=?, numero=?, complemento=?, bairro=?, banco=?, agencia=?, conta=?, operacao=?, selftipo=? socio=?  where idCliente=?");
       $stat->bindValue(1, $cliente->nome);
       $stat->bindValue(2, $cliente->sobrenome);
       $stat->bindValue(3, $cliente->celular);
       $stat->bindValue(4, $cliente->email);
       $stat->bindValue(5, $cliente->cpf);
       $stat->bindValue(6, $cliente->datanasci);
       $stat->bindValue(7, $cliente->rua);
       $stat->bindValue(8, $cliente->numero);
       $stat->bindValue(9, $cliente->complemento);
       $stat->bindValue(10, $cliente->bairro);
       $stat->bindValue(11, $cliente->banco);
       $stat->bindValue(13, $cliente->agencia);
       $stat->bindValue(13, $cliente->conta);
       $stat->bindValue(14, $cliente->operacao);
       $stat->bindValue(15, $cliente->selftipo);
       $stat->bindValue(15, $cliente->socio);
       $stat->execute();

     }catch(PDOException $e){
       echo "Erro ao alterar Cliente! ".$e;
     }
   }

   public function deletarCliente($idCliente){
     try{
       $stat = $this->conexao->prepare("delete from cliente where idCliente = ?");
       $stat->bindValue(1, $idCliente);
       $stat->execute();
     }catch(PDOException $e){
       echo "Erro ao excluir Clientes! ".$e;
     }
   }
 }
