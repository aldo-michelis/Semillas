<?php

	$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';

	$string = '';
	$max = strlen($characters) - 1;
	for ($i = 0; $i < 6; $i++) {
	$string .= $characters[mt_rand(0, $max)];
 }

 	echo $string;

?>