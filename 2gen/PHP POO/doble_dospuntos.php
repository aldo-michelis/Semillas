<?php


class MyClass {
	const VALOR_COSNSTANTE = 'Un valor constante';
}

$classname = 'MyClass';
echo $classname::VALOR_COSNSTANTE;

echo MyClass::VALOR_COSNSTANTE;

class OtherClass exteds MyClass{

	public static $my_static = 'variable estática';
		echo parent::VALOR_COSNSTANTE . "<br>";
		echo self::$my_static . "<br>";


}


?>