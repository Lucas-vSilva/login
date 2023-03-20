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

        <ul style="padding-bottom: 20px;">
            <li> <img style="height: 20px;width: 30px;"href="#"src="../img/iconeca.png" alt=""><a href="#" class="active"> Anuncie </a> </li>
            <li> <img style="height: 20px;width: 20px;"href="#"src="../img/customers-icon-3.png" alt=""><a href="#" class="login1"> Login</a> </li>
            <li> <img style="height: 20px;width: 20px;"href="#"src="../img/customers-icon-3.png" alt=""><a href="#" class="login1"> Cadastre-se para Clientes</a> </li>
            <li> <img style="height: 20px;width: 30px;"href="#"src="../img/iconempresa.png" alt=""><a href="#" class="login1"> Cadastre-se para Empresas</a> </li>
        </ul>
        
    </nav>
    <script src="../js/main.js"></script>
</body>
    <div class="container-grid">
        <label> <div class="container">                    
            <h3 style="color: white;"class="title has-text-grey">ANUNCIE</h3>
            <form action="index.php" method="POST">
                <div class="field">
                    <div class="control">
                        <label style="color: white;">Ponto de Partida:</label><br>
                        <input style="border-radius:  8px 8px 8px 8px;height: 35px; width: 400px;"type="text"name="email" name="text" class="input is-large" 
                        placeholder="Endereço de Origem" autofocus=""><br><br>
                        <label style="color: white;">Objetivo:</label><br>
                        <input style="border-radius:  8px 8px 8px 8px;height: 35px; width: 400px;"type="text"name="email" name="text" class="input is-large" 
                        placeholder="Endereço Final" autofocus=""><br><br>
                        <label style="color: white;">Retirada:</label>
                        <input style="border-radius:  8px 8px 8px 8px;height: 35px; width: 100px;"type="date"name="email" name="text" class="input is-large" 
                        placeholder="" autofocus="">
                        <label style="color: white;">Entrega:</label>
                        <input style="border-radius:  8px 8px 8px 8px;height: 35px; width: 100px;"type="date"name="email" name="text" class="input is-large" 
                        placeholder="" autofocus=""><br><br>
                        <label style="color: white;">Tipo de Carga:</label><br>
                        <select style="border-radius:  8px 8px 8px 8px;height: 35px; width: 400px;"type="text"name="email" name="text" 
                        class="input is-large" placeholder="Tipo de Carga" autofocus=""> 
                            <option value="1">Um</option>
                            <option value="2">Dois</option>
                            <option value="3">Três</option> </select><br><br>

                        <label style="color: white;">Peso:</label><br>
                        <input style="border-radius:  8px 8px 8px 8px;height: 35px; width: 400px;"type="number"name="email" name="text" 
                        class="input is-large" placeholder="Peso" autofocus=""><br><br>
                        <label style="color: white;">Volume:</label><br>
                        <input style="border-radius:  8px 8px 8px 8px;height: 35px; width: 400px;"type="number"name="email" name="text" 
                        class="input is-large" placeholder="Volume" autofocus=""><br><br>
                        <label style="color: white;">Modal:</label><br>
                        <select style="border-radius:  8px 8px 8px 8px;height: 35px; width: 400px;"type="text"name="email" name="text" 
                        class="input is-large" placeholder="Modal" autofocus="">
                            <option value="1">Um</option>
                            <option value="2">Dois</option>
                            <option value="3">Três</option></select><br><br>
                            <button style="color: #f2f2f2;
                        text-decoration: none;
                        font-size: 15px;
                        font-weight: 500;
                        padding: 8px 15px;
                        margin-top: -15px;
                        border-radius: 5px;
                        letter-spacing: 1px;
                        background-color: #043454;"type="submit" href="../img/consultar.html">Pesquisar</button>
                        <h1 style="color: white;text-align: left;padding-left: 100px; margin-top: -400px;margin-right: -500px ;margin-left: 600px;" 
                        id="item-1">Encontre o meio de<br>transporte,<br>com a qualidade e velocidade que você merece.</h1>

                    </div>
                </div></label> </div>
    <footer style="margin-top: 100px;margin-left: 1400px;"id="footer">
        <a style=""href="#" ><img height="45" width="40" src="../img/iconeig.png" alt=""></a>
        <a style="margin-top: 100px;"href="#" ><img height="45" width="40" src="../img/VEKTOR ICON7.png" alt=""></a>
        <a style=""href="#" ><img height="45" width="40" src="../img/iconezap.png" alt=""></a>
    </footer>
</html>