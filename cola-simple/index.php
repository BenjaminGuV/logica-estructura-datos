<?php
  class Cola{

    function Cola () {
    }

    function encolar(&$cola,$elemento) {
      array_push($cola,$elemento);
    }

    function desencolar(&$cola,&$elemento) {
      $elemento = array_shift($cola);
    }   

    function numElementos(&$cola) {
      return count($cola);
    }

    function listarCola(&$cola) {
      $elemento;
      if (!$this->vacia($cola)) {
        $this->desencolar($cola,$elemento);
        echo $elemento."|";
        $this->listarCola($cola);
        $this->encolar($cola,$elemento);
      }
    }


    function vacia(&$cola) {
      if (count($cola)==0)
        return 1;
      else
        return 0;
    }
  }

  $elementos = array( 1, 2, 4, 6, 23, 64 );

  $nuevo = new Cola();
  $nuevo->encolar( $elementos, 12 );
  $nuevo->encolar( $elementos, 15 );

  echo "<pre>";
  echo var_dump( $elementos );
  echo "</pre>";

?>
