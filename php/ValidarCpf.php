<?php
    class ValidarCpf{
        public static function validar($cpf){
            $cpf = preg_replace('/\D/', '', $cpf);

            if(strlen($cpf) != 11){
                return false;
            }else{
                $cpfValidacao = substr($cpf, 0, 9);
                $cpfValidacao .=self::calcularDigitadorVerificador($cpfValidacao);
                $cpfValidacao .=self::calcularDigitadorVerificador($cpfValidacao);
            }//fim do else

            if($cpfValidacao == $cpf){
                return true;
            }//fim do if          
        }//fim da função


        public static function calcularDigitadorVerificador($base){
            $tamanho = strlen($base);
            $multiplicador = $tamanho + 1;

            $soma = 0;

            for($i =0; $i < $tamanho; $i++){
               $soma += $base[$i] * $multiplicador; 
               $multiplicador --;
            }//fim do for

            $resto = $soma % 11;

            return $resto > 1 ? 11 - $resto : 0;

        }//fim da função

    

    }//fim da class


?>