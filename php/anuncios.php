<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        def consultarAnuncio(self):
            try:
                sql = "select * from anuncios"
                self.con.execute(sql)
                msg = ""
                
                for(id, cnpj, valor, cidade, uf, cep, telefone, retirada) in self.con:
                    msg = msg + "\nCódigo: {}\nCNPJ: {}\nValor: R$ {}\nCidade: {}\nUF: {}\nCEP: {}\nTelefone: {}\nRetirada: {}".format(id, cnpj, valor, cidade, uf, cep, telefone, retirada)
                return msg
            except Exception as erro:
                return "erro"

        consultarAnuncio();
    </script>
    
        
</body>
</html>