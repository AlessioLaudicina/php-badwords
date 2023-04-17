<?php 
$stringaA = $_GET['name'];
$stringaB = $_GET['badword'];
$lunghezzastringa = strlen($stringaA);
$censored = str_replace( $stringaB, '***', $stringaA);
echo $stringaA . '  Con una lunghezza complessiva di ' . $lunghezzastringa . '  caratteri';

?>