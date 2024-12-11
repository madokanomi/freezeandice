<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freeze And Ice - Bem Vindo</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body style="background-image:url('fundo.png');">
    <span> <?php 
        session_start();
        if (isset($_SESSION['nm_funcionario'])){
            $nome = $_SESSION['nm_funcionario'];
            echo "Olá ".$nome;
        } else{
            echo "<script>alert('Você não está logado!'); history.back() </script>";
        }
        ?></span>
    <img class="imgdaora" src="frezee and ice.png">
    <br>
    <div class="box">
        <div class="img-box">
            <img src="icon.png">
        </div>
        <div class="form-box">
            <center>
            <h2>Bem Vindo!</h2>
            <div class="form">

                <div class="input-group">
                    <a href="cadastrocliente.html">
                    <button type="submit">Cadastro de Clientes</button>
                </a>
                </div>
                <div class="input-group">
                    <a href="cadastrofornecedor.html">
                    <button type="submit">Cadastro de Fornecedores</button>
                </a>
                </div>
                <div class="input-group">
                    <a href="cadastrolancamento.html">
                    <button type="submit">Cadastro de Lançamentos</button>
                </a>
                </div>
                <div class="input-group">
                    <a href="cadastrocategoria.html">
                    <button type="submit">Cadastro de Categorias</button>
                </a>
                </div>
            </center>
</div>
            </form>
        </div>
    </div>
</body>
</html>