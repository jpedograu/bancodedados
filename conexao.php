<?php
$host ='localhost';
$user ='root';
$senha='';
$banco = 'provainfo';

$conexao = new mysqli($host,$user,$senha,$banco);
 if (!$conexao){
  //  echo'erro ao se comunicar como banco de dados'.mysqli_connect_errno();
 }
 else{
 //   echo 'deu certo a conexao';
 }
?>
