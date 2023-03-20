<?php

    class Consultar{
        public function logarCliente(Conexao $conexao, string $cpf, string $senha){
            try{
                $conn = $conexao->conectar();
                $sql  = "select * from cliente where cpf = '$cpf' and senha = '$senha'";
                $result = mysqli_query($conn, $sql);
                $verefic = mysqli_num_rows($result);

                if($verefic == 0){
                    echo "Ops... CPF ou Senha não encontrado!";
                    return;
                }else{
                    header("location: index.php");
                    exit();

                }//fim do else

            }//fim do try
            catch(Excepetion $erro){
                return $erro;
            }//fim do catch
        }//fim da função

        public function logarEmpresa(Conexao $conexao, string $cnpj, string $senha){
            try{
                $conn = $conexao->conectar();
                $sql  = "select * from empresa where cnpj = '$cnpj' and senha = '$senha'";
                $result = mysqli_query($conn, $sql);
                $verefic = mysqli_num_rows($result);

                if($verefic == 0){
                    echo "Ops... CNPJ ou Senha não encontrado!";
                    return;
                }else{
                    header("location: index.php");
                    exit();

                }//fim do else

            }//fim do try
            catch(Excepetion $erro){
                return $erro;
            }//fim do catch
        }//fim da função

    }//fim da class


?>