<?php 

$valor = 56;
  
  function formatarValor(float $valor): string
  {
    return 'RS '.number_format(($valor ? $valor : 0),2,',','.');
  }

  $numero = 10000;

  function retornarNumeros(int $numero = null): string{
    return 'USD' .number_format(($numero? $numero : 0),2, ',',',');

  }

?>