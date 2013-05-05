<?php

  $valor_1 = 20;
  $valor_2 = 40;
  echo "$valor_1 + $valor_2 = ".($valor_1 + $valor_2);
  echo "<br>";

  $valor_2 = "40";
  echo "$valor_1 + $valor_2 = ".($valor_1 + $valor_2);
  echo "<br>";

// COMPARACIONES
  $valor_2 = "20";

  if( $valor_1 == $valor_2 )
    echo "$valor_1 == $valor_2 = se parecen igualito";
  else
    echo "No se parecen, ni igualito";
  echo "<br>";

  if( $valor_1 === $valor_2 )
    echo "$valor_1 === $valor_2 = se parecen igualito";
  else
    echo "$valor_1 === $valor_2 = No se parecen, ni igualito";
  echo "<br>";
