<?php
 
$nome = ['nm_cliente'];
$sobrenome = ['nm_sobrenome'];
$email = ['nm_email'];
$telefone = ['nr_telefone'];
$endereco = ['nm_endereco'];
 
include 'conexao.php';
 
$insert_cli = "INSERT INTO tb_cliente VALUES
            (null, '$nome', '$sobrenome', '$email', '$telefone', '$endereco')";
 
$test = $conexao->query($insert_fun);
 
if($test){
    echo "<script>alert('inserido com sucesso'); history.back() </script>";
}
 
?>