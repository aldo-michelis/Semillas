<?php

	$base=new PDO('mysql:host=localhost; dbname=cmillas', 'root', '');
		
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$base->exec("SET CHARACTER SET utf8");

	$base->query("INSERT INTO pot_taken (
				pot_offer_id,
				business_id,
				customer_id,
				pot_val_ini,
				pot_val_fin
			)

			VALUES (
				'10',
				'1',
				'40',
				'10-5-2018',
				'9-11-2018'			)

			");



?>
