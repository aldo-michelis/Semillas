<?php

	require ("config_no_fconstructor.php");
	
	class Conexion{
		
		protected $conexion_db;
		
		public function Conexion(){


			try{
				
					$base=new PDO('mysql:host=localhost; dbname=pruebas', 'root', '');
					
					$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					
					$base->exec("SET CHARACTER SET UTF8");

			}catch(Exception $e){
				
				die(Error . $e->getMesagge());
				echo "línea del error: " . $e->getLine();
			
			}
			
		}
		
	}

?>

















