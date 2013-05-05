<?php
  /* MALAS VARIABLES */
  $u = "Usuario 1";
  $d = "Registrado el dia X";
  $e = "24";

  echo "$u $d tiene $e";
  echo "<br>";
  /* Mejor uso*/
  $usuario = "Usuario 1";
  $diaDeRegistro = "Registrado el dia X";
  $edad = "24";

  echo "$usuario $diaDeRegistro tiene $edad";
  echo "<br>";

  /* MALISIMA PRACTICA */
  $arreglo_variables = array('usuario','registro','tiempo','otra');
  $$arreglo_variables[0] = 'Pedro';
  $$arreglo_variables[1] = "2";
  echo $usuario;
  echo $registro;

  $$usuario = 30;
  echo "$Pedro";

