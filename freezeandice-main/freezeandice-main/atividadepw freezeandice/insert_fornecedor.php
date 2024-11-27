<?php
 
$nome = ['nm_fornecedor'];
$contato = ['ctt_fornecedor'];
$email = ['nm_email'];
$telefone = ['nr_telefone'];
$endereco = ['nm_endereco'];
 
include 'conexao.php';
 
$insert_for = "INSERT INTO tb_fornecedor VALUES
            (null, '$nome', '$contato', '$email', '$telefone', '$endereco')";
 
$test = $conexao->query($insert_fun);
 
if($test){
    echo "<script>alert('inserido com sucesso'); history.back() </script>";
}
 
?>