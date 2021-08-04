<?php
//exercicio de estudo sobre orientada a objeto onde eu faço portas lógicas
//algumas coisas feitas apenas para testar o funcionamento 
class porta
{
	public $e1 = false;
	public $s1 = false;
	function porta($e1)
	{
		$this->e1= $e1;
	}
}

class portanot extends porta
{
 
	public function portanot($e1)
	{
		$this->s1=!$e1;
		echo $this->s1."\n";
	}	
}

class portaand extends porta
{ 
	public $e2 = false;
	public function portaand($e1,$e2)
	{
		$this->e1=$e1;
		$this->e2=$e2;
		$this->s1= ($this->e1&&$this->e2);
		echo $this->s1."\n";
	}
}

class portaor extends porta
{	
	public $e2= false;
	public function portaor($e1,$e2)
	{
	$this->s1=($e1||$e2);
	echo $this->s1."<br/>\n";
	}


}



$teste = new portanot(false); //retorna !false (verdadeiro) 
$teste1 = new portaand(true,true); //retorna true&&true (verdadeiro)
$teste2 = new portaor(true,false); //retorna true||false (verdadeiro) 

?>
