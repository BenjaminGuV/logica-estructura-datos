<?php 
  
  $numero_convertir = 10;
  $contador         = 0;
  $datos            = [];

  $numero_bit = decbin( $numero_convertir );

  echo "<pre>";
  echo var_dump( $numero_bit );
  echo "</pre>";

  $cadena     = (string)$numero_bit;
  $num_cadena = strlen( $cadena );

  if ( $num_cadena > 0 ) {
    for ($i=0; $i < $num_cadena; $i++) {

      if ( $cadena[ $i ] == 1 || $cadena[ $i ] == "1" ) {
        $datos[]  = $contador;
        $contador = 0;
      } else {
        $contador++;
      }

      if ( $i == ( $num_cadena - 1 ) && ( $cadena[ $i ] == 0 || $cadena[ $i ] == "0" ) ) {
        $datos[] = $contador;
      }
    }
  }

  echo "<pre>";
  echo var_dump( $datos );
  echo "</pre>";

?>