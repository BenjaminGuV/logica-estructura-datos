<?php
  $bandera = false;

  $limite = 10;

  for ($i=0; $i < $limite; $i++) { 
    if ( $i % 5 == 0 ) {
      $bandera = true;
      echo "ping pong";
    }

    if ( !$bandera ) {
      if ( $i % 2 == 0 ) {
        echo "ping";
      } else {
        echo "pong";
      }
    }
    
    echo "<br />";
    $bandera = false;
  }

?>