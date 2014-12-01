<?php

function geraPalavra($tip='c',$min=0,$max=1) {// aquideve ser informado TIPO ,VaLOR MINIMO,ValorMaximo

    // JC Neto
	//L -> Letras
	//N -> Numeros
	//C -> Caracter
	//T -> Texto
	//LNC -> complexo
    $CaracteresAceitos = 'abcdefghijklmnopqrstuvxywzABCDEFGHIJKLMNOPQRSTUVXYWZ';
	$CaracteresEspeciais ="!@#$%&*?|";
	$CaracteresEspaco =" ";
	$CaracteresNumericos ='0123456789';
    $tam = strlen($CaracteresAceitos)-1;
    $palavra = NULL;
	if($tip=='c'){
		for($i=$min; $i < $max; $i++) {
			 $palavra .= $CaracteresAceitos{mt_rand(0, $tam)};
		}    
		return $palavra;
	}
	if($tip=='t'){
		$espc=0;//contador p espaço
		for($i=0; $i <= $max; $i++) {
			if($espc>=4){
				$palavra .=$CaracteresEspaco;
				$espc=0;
			}else{
			 $palavra .= $CaracteresAceitos{mt_rand(0, $tam)};
			 $espc++;
			}
		}    
		return $palavra;
	}

}

?>