<?php
    class ValidacaoCnpj{
        public static function validarCnpj($cnpj){

            $cnpj = preg_replace('/[^0-9]/', '', (string) $cnpj);
	
            // Valida tamanho
            if (strlen($cnpj) != 14)
                return false;
    
            // Verifica se todos os digitos são iguais
            if (preg_match('/(\d)\1{13}/', $cnpj))
                return false;	
    
            // Valida primeiro dígito verificador
            for ($i = 0, $j = 5, $soma = 0; $i < 12; $i++)
            {
                $soma += $cnpj[$i] * $j;
                $j = ($j == 2) ? 9 : $j - 1;
            }
    
            $resto = $soma % 11;
    
            if ($cnpj[12] != ($resto < 2 ? 0 : 11 - $resto))
                return false;
    
            // Valida segundo dígito verificador
            for ($i = 0, $j = 6, $soma = 0; $i < 13; $i++)
            {
                $soma += $cnpj[$i] * $j;
                $j = ($j == 2) ? 9 : $j - 1;
            }
    
            $resto = $soma % 11;
    
            return $cnpj[13] == ($resto < 2 ? 0 : 11 - $resto);

        }//fim da função
    }  
            /*$cnpj = preg_replace('/\D/', '', $cnpj);

            if(strlen($cnpj) != 14){
                return false;
            }else{
                $cnpjValidacao = substr($cnpj, 0, 12);
                $cnpjValidacao .=self::calcularDigitadorVerificador($cnpjValidacao);
                $cnpjValidacao .=self::calcularDigitadorVerificador($cnpjValidacao);
            }//fim do else

            if($cnpjValidacao == $cnpj){
                return true;
            }//fim do if
        }//fim da função

        public static function calcularDigitadorVerificador ($base){
            $tamanho = strlen($base);
            $multiplicador = 9;

            $soma = 0;

            for($i = ($tamanho - 1); $i >= 0; $i --){
                $soma += $base[$i] * $multiplicador;
                $multiplicador--;
                $multiplicador = $multiplicador < 2 ? 9 : $multiplicador;

                return $soma % 11;
            }//fim do for
        }//fim da função*/


?>