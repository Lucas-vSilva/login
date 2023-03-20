<?php
    class Conexao{
        public function conectar(){
            try{
                $conn = mysqli_connect('localhost','root','','BestModal');
                if($conn){
                        //echo "\nConectado com sucesso!";
                    return $conn;
                }
            }catch(Except $erro){
                    echo $erro;

            }//fim do catch
        }//fim do conectar
    }//fim da classe

?>