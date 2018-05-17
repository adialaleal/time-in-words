<?php

// Complete the timeInWords function below.
function timeInWords($h, $m) {
    //Guardando cada numero por extenso num indice do array.
    $horas = array(1 => 'one',2 => 'two',3 => 'three',4 => 'four',5 => 'five',
    6 => 'six',7 => 'seven',8 => 'eight',9  => 'nine',10 => 'ten',11 => 'eleven',
    12 => 'twelve',13 => 'thirteen',14 => 'fourteen',15 => 'fiveteen',16 => 'sixteen',
    17 => 'seventeen',18 => 'eighteen',19 => 'nineteen',20 => 'twenty',21 => 'twenty one',
    22 => 'twenty two',23 => 'twenty three',24 => 'twenty four',25 => 'twenty five',
    26 => 'twenty six',27 => 'twenty seven',28 => 'twenty eight',29 => 'twenty nine');

    //Início dos testes com as informações inseridas através das variáveis $h e $m.
    if ($m < 30) {
      if ($m == 0){
        $resultado = "$horas[$h] o' clock";
      }elseif ($m == 1) {
        $resultado = "$horas[$m] minute past $horas[$h]";
      }elseif ($m == 15){
        $resultado = "quarter past $horas[$h]";
      }else {
        $resultado = "$horas[$m] minutes past $horas[$h]";
      }
    }
    elseif ($m == 30){
      $resultado = "half past $horas[$h]";
    }
    elseif($m > 30){
      if ($m == 45){
        $h++;
        $resultado = "quarter to $horas[$h]";
      }elseif ($m == 59) {
        $h++;
        $resultado = "$horas[$m] minute to $horas[$h]";
      }else {
        $h++;
        $m = 60-$m;
        $resultado = "$horas[$m] minutes to $horas[$h]";
      }
    }
  //Apresentalção do resultado.
   return $resultado;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $h);

fscanf($stdin, "%d\n", $m);

$result = timeInWords($h, $m);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
