<?php
require 'conexaobanco.class.php';
 class AlunoDAO {
   private $conexao = null;

   public function __construct(){
     $this->conexao = ConexaoBanco::getInstance();
   }

   public function __destruct(){}

   public function cadastrarAluno($aluno){
     try{
       $stat=$this->conexao->prepare("insert into aluno
                                    (matricula,nome,curso,campus,periodo,responsavel,cpfresponsavel,cpfaluno,semestre,status)
                                    values(null,?,?,?,?,?,?,?,?,?)");
       $stat->bindValue(1, $aluno->nome);
       $stat->bindValue(2, $aluno->curso);
       $stat->bindValue(3, $aluno->campus);
       $stat->bindValue(4, $aluno->periodo);
       $stat->bindValue(5, $aluno->responsavel);
       $stat->bindValue(6, $aluno->datanasci);
       $stat->bindValue(7, $aluno->cpfresponsavel);
       $stat->bindValue(8, $aluno->cpfaluno);
       $stat->bindValue(9, $aluno->semestre);
       $stat->bindValue(10, $aluno->status);
       $stat->execute();
     }catch(PDOException $e){
       echo "Erro ao cadastrar! ".$e;
     }
   }

   public function alterarAluno($aluno){
     try{
       $stat = $this->conexao->prepare("update aluno set nome=?, curso=?, campus=?, periodo=?, responsavel=?, cpfresponsavel=?, cpfaluno=?, semestre=?, status=? where idAluno=?");
       $stat->bindValue(1, $aluno->nome);
       $stat->bindValue(2, $aluno->curso);
       $stat->bindValue(3, $aluno->campus);
       $stat->bindValue(4, $aluno->periodo);
       $stat->bindValue(5, $aluno->responsavel);
       $stat->bindValue(6, $aluno->datanasci);
       $stat->bindValue(7, $aluno->cpfresponsavel);
       $stat->bindValue(8, $aluno->cpfaluno);
       $stat->bindValue(9, $aluno->semestre);
       $stat->bindValue(10, $aluno->status);
       $stat->execute();

     }catch(PDOException $e){
       echo "Erro ao alterar Aluno! ".$e;
     }
   }

   public function deletarAluno($idAluno){
     try{
       $stat = $this->conexao->prepare("delete from aluno where idAluno = ?");
       $stat->bindValue(1, $idAluno);
       $stat->execute();
     }catch(PDOException $e){
       echo "Erro ao excluir o Aluno! ".$e;
     }
   }
 }
