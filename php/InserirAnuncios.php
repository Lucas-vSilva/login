<?php

    include('Conexao.php');
    include('ValidacaoCnpj.php');
    class InserirAnuncios{
        public function anuncios(
            Conexao $conexao,
            string $cnpjDigitar,
            string $valor,
            string $UF,
            string $cep,
            string $telefone,
            string $retirada)
            {
                try {
                    $cnpj = new ValidacaoCnpj();
                    $valorCnpj = $cnpj->validarCnpj($cnpjDigitar);

                    if($valorCnpj){
                        $conn = $conexao->conectar();
                        $sql = "insert into anuncios(id, cnpj, valor, uf, cep, telefone, retirada) values('', '$cnpjDigitar', '$valor', '$UF', '$cep', '$telefone', '$retirada')";
                        $result = mysqli_query($conn, $sql);

                        if($result){
                            echo "<br>Anúncio cadastrado com sucesso!<br>";
                            return;
                        }else{
                            return "Ops... Algo deu errado, tente novamente!";
                        }//fim do else
                    }//fim do if
                    else{
                        echo "CNPJ Inválido!";
                    }//fim do else
                } catch (Exception $erro) {
                    return $erro;
                }//fim do catch

            }//fim da função

            public function executeCnpj(){
                $conexao = new Conexao();

                if(isset($_POST['submit'])){
                    echo $this->anuncios($conexao, 
                    $_POST['tCnpj'], 
                    $_POST['tValor'],
                    $_POST['tUf'], 
                    $_POST['tCep'],  
                    $_POST['tTelefone'], 
                    $_POST['tRetirada']);
                    return;  
               }//fim do isset 
            }//fim da função
    }//fim da class

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/inseriranuncios.css">
    <title>Inserir Anúncios</title>
</head>

<body>
    <nav>
    <div class="logo">
            <img style="height: 200px; width: 200px; margin-top: -60px;"src="../img/logo.png" alt=""img>
        </div>

        <div class="menu-btn">
            <i class="fa fa-bars fa-2x" onclick="menuShow()"></i>
        </div>

        <ul style="padding-bottom: 20px;">
            <li> <img style="height: 20px;width: 30px;"href="#"src="../img/iconeca.png" alt=""><a href="#" class="active"> Anuncie </a> </li>
            <li> <img style="height: 20px;width: 20px;"href="#"src="../img/customers-icon-3.png" alt=""><a href="#" class="login1"> Login</a> </li>
            <li> <img style="height: 20px;width: 20px;"href="#"src="../img/customers-icon-3.png" alt=""><a href="#" class="login1"> Cadastre-se para Clientes</a> </li>
            <li> <img style="height: 20px;width: 30px;"href="#"src="../img/iconempresa.png" alt=""><a href="#" class="login1"> Cadastre-se para Empresas</a> </li>
        </ul>
        
    </nav>
    <script src="../js/main.js"></script>
</body>

<body>
    
    <label> <div class="container-grid">                    
    <form method="POST">
        <label>CNPJ</label>
        <script src="../js/mascaraCnpj.js"></script>
        <i onclick="mascaraCnpj()"><input type="text" name="tCnpj" maxlength="18"></i><br><br>

        <label>Valor</label>
        <input type="number" name="tValor"><br><br>

        <label>UF</label>
        <input type="text" name="tUf" maxLength="2"><br><br>

        <label>CEP</label>
        <input type="number" name="tCep" maxLength="8"><br><br>

        <label>Telefone</label>
        <input type="number" name="tTelefone" maxLength="10"><br><br>

        <label>Retirada</label>
        <input type="date" name="tRetirada"><br><br>

        <input type="submit" name="submit" value="Enviar" /><br><br>
    </form></label>

    <?php
        $executar = new InserirAnuncios();
        $executar->executeCnpj();

    ?>
</body>
</html>