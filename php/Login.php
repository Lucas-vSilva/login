<?php
    include('Conexao.php');
    include('Consultar.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>BM</title>
</head>
    <body>
        <nav>

    <div class="logo">
            <img style="height: 200px; width: 200px; margin-top: -60px;"src="../img/logo.png" alt=""img>
        </div>

        <div class="menu-btn">
            <i class="fa fa-bars fa-2x" onclick="menuShow()"></i>
        </div>

        <ul style="margin-left: 10px;padding-bottom: 20px;">
            <li> <img style="height: 20px;width: 30px; "href="#"src="../img/iconeca.png" alt=""><a href="#" class="active"> Anuncie </a> </li>
            <ul style="padding-bottom: 20px;">
            <li> <img style="height: 16px;width: 20px;"href="#"src="../img/iconsair.png" alt=""><a href="index.php">Sair</a> </li>
        </ul>
        </ul>
    </nav>
    <script src="../js/main.js">
    </script>
        <script>
            function openTab(evt, tabName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length;  i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            evt.currentTarget.className += " active";}
        </script>


    <style>
    .tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    display: flex;
    }
    html{
        color: #ccc;
    }
    .tab button {
    background-color: inherit;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    flex-grow: 1;
    font-size: 18px;
    transition: background-color 0.3s;
    }

    .tab button:hover {
    background-color:#3a8dc488;
    }

    .tab button.active {
    background-color:  #04273f;
    }

    .tabcontent {
    display: none;
    padding: 6px 12px;

    border-top: none;
    }
    </style>
<div class="tab" style="margin-left: 400px; margin-right: 400px;">
    <button class="tablinks active" style="box-shadow: 5px 5px 4px #03243a, -5px -5px 4px #05446e; height: 100px; width: 100px;" onclick="openTab(event, 'tab1')">Cliente</button>
    <button class="tablinks" style="box-shadow: 5px 5px 4px #03243a, -5px -5px 4px #05446e; height: 100px; width: 100px;" onclick="openTab(event, 'tab2')">Empresa</button>
</div>
<div id="tab1" class="tabcontent" style="margin-left: 400px;">
    <div class="container">
        <label style="color: white;">CPF:</label><br>
        <input class="input is-large" type="number" name="tCPF" placeholder="Insira o CPF" autofocus="" style="border-radius: 8px; height: 35px; width: 400px;"><br><br>
        <label style="color: white;">SENHA:</label><br>
        <input class="input is-large" type="password" name="tSenha1" placeholder="" autofocus="" style="border-radius: 8px; height: 35px; width: 400px;"><br><br>
        <button class="btn"type="submit" >Login</button>
    </div>
</div>
<div id="tab2" class="tabcontent" style="margin-left: 400px;">
    <div style="padding-bottom: 100px; "class="container">
        <label style="color: white;">CNPJ:</label><br>
        <input class="input is-large" type="number" name="tCNPJ" placeholder="Insira o CNPJ" autofocus="" style="border-radius: 8px; height: 35px; width: 400px;"><br><br>
        <label style="color: white;">SENHA:</label><br>
        <input class="input is-large" type="password" name="tSenha" placeholder="" autofocus="" style="border-radius: 8px; height: 35px; width: 400px;"><br><br>
        <button class="btn"type="submit" >Login</button>
    </div>
</div> 
</body>
</html> 


      
<?php
if(isset($_POST['submit']))
{
    if($_POST['tCpf'] != "" && $_POST['tSenha'] != ""){
        $conn = new Conexao;
        $conn->conectar();
        $inser = new Consultar;
    
        setcookie('user', $_POST['tCpf'], $_POST['tSenha']);
        $inser->logarCliente($conn, $_POST['tCpf'], $_POST['tSenha']);
    }else{
        return "CPF ou Senha não encontrado!";
    }//fim do else
}//fim do isset



if(isset($_POST['submit'])){
    if($_POST['tCnpj'] != "" && $_POST['tSenha'] != ""){
        $conn = new Conexao;
        $conn->conectar();
        $inser = new Consultar;
    
        setcookie('user', $_POST['tCnpj'], $_POST['tSenha']);
        $inser->logarEmpresa($conn, $_POST['tCnpj'], $_POST['tSenha']);
    }else{
        return "CPF ou Senha não encontrado!";
    }//fim do else
}//fim do isset
?>
    

	

