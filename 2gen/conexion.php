<?php


try {
	
	$base = new PDO('mysql:host=localhost; dbname=cmillas', 'root', '');

	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$base->exec("SET CHARACTER SET UTF8");



} catch (Exception $e) {
	echo "Error en la línea: " . $e->getLine() . "<br>";
	die('Hubo error: ' . $e->getMessage());
}


/*	require ("config.php");
	
	class Conexion{
		
		protected $conexion_db;
		
		public function Conexion(){

	// ---------------------------------------
	// PDO	
	
			try{
				
				$this->conexion_db= new PDO('mysql:host=localhost; dbname=cmillas', 'root', '');
				
				$this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
				$this->conexion_db->exec("SET CHARACTER SET utf8");
				
				return $this->conexion_db;
				
			}catch(Exception $e){
				
				echo "la línea de error es: " . $e->getLine();
				
					
				
			}			
			
	// ---------------------------------------
	// POO
				$this->conexion_db=new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);
				
				if($this->conexion_db->connect_errno){
					
						echo "Fallo al conectar a Mysql: " . $this->conexion_db->connect_error;
						
						return;						
							
				}
				
				$this->conexion_db->set_charset(DB_CHARSET);
		}
		
	}


?>

*/