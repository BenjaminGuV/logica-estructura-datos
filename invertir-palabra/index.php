<?php
  
  $frase = "Cadena a invertir solo una palabra";

  $array_frase      = explode(" ", $frase);
  $contador_frase   = count( $array_frase );

  function invertirFrase( $array_frase, $contador_frase )
  {
    $numero_aleatorio = rand( 0, $contador_frase - 1 );

    if ( !esPalabra( $array_frase[ $numero_aleatorio ] ) ) {
      return invertirFrase( $array_frase, $contador_frase );
    }

    return $numero_aleatorio;

  }

  function esPalabra( $palabra )
  {
    $bandera = false;

    if ( strlen( $palabra ) > 2 ) {
      $bandera = true;
    }

    return $bandera;

  }

  $numero_palabra = invertirFrase( $array_frase, $contador_frase );

  $palabra_derecho = $array_frase[ $numero_palabra ];
  $palabra_reves   = strrev( $palabra_derecho );

  $nueva_frase = str_replace( $palabra_derecho, $palabra_reves, $frase);

  echo "<pre>";
  echo var_dump( $nueva_frase );
  echo "</pre>";

?>
