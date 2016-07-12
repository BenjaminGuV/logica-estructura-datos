<?php 
  
  $numero_convertir = 156234;

  $numero_bit = decbin( $numero_convertir );

  echo "<pre>";
  echo var_dump( $numero_bit );
  echo "</pre>";

  $cadena  = (string)$numero_bit;
  $activos = substr_count( $cadena, "1" );

  echo "<pre>";
  echo var_dump( $activos );
  echo "</pre>";

?>
