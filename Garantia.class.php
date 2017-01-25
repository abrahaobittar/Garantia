<?php
/**
* - Opção de fazer tudo em uma função.
* - pesquisar radio button no bootstrap
* - fazer a captura dos formularios para fazer o calculo
*
*
**/

class Garantia {
	
	public $produto;
	public $loja;
	public $valor;
	public $garantiaVendador;
	public $garantiaFabrica;
	public $dataCompra;
	public $tempo;
	public $dia;
	public $mes;
	public $ano;
	
	private function tempoGarantia($a){
		$data = new DateTime($a);
		$data2 = new DateTime($b);
		$intervalo = $data-> diff($data2);
		//echo "Intervalo é de {$intervalo->y} anos, {$intervalo->m} meses e {$intervalo->d} dias";
	}
	
//	function calcAno($anos){
//		$dias;
//		if(date('L')== 1) {
//			$dias = 366;
//			//echo 'bissexto ';
//		} else {
//			$dias = 365;
//			//echo 'não bissexto ';
//		}
//		$total = ($anos*$dias);
//		echo $total;
//		//return $anos*365;
//	}
	
	function calcAno2($ano) { 
		$numAno = date('Y');
		$this->ano = $numAno+$ano;
		return $this->ano;
	}

	function calcMes($mes){
		$numMes = date('n');
		$this->mes = $numMes+$mes;
		return $this->mes;
		
		//Para depuração	
		//echo $numMes+$mes;
		//echo '<br>';
		//echo $this->mes;
	}
	
	function retornaData() {
		$this->dia = date('d');
		if($this->ano == ''){
			$this->ano = date('Y');
		}
		$aux = $this->dia.'/'.$this->mes.'/'.$this->ano;
		return $aux;
	}

	function teste() {
		echo 'ok';
	}
}
?>