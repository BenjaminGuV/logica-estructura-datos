<?php
 
  function burbuja($A)
  {

    $n = sizeof($A);

    for($i=1;$i<$n;$i++)
    {
      for($j=0;$j<$n-$i;$j++)
      {
        if( $A[$j] > $A[$j+1] ){
          $k       = $A[$j+1]; 
          $A[$j+1] = $A[$j]; 
          $A[$j]   = $k;
        }
      }
    }

    return $A;
  }
 
  $VectorA = array( -10, -2, 3, -2, 0, 5, -15 );

  $VectorB = burbuja( $VectorA );

  for( $i = 0; $i < sizeof( $VectorB ); $i++ ){
    echo $VectorB[$i] . "\n";
  }
  
?>
