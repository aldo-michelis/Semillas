<?php
class MyClass {
    const CONST_VALUE = 'Un valor constante';
}

$classname = 'MyClass';
echo $classname; // A partir de PHP 5.3.0
echo $classname::CONST_VALUE; // A partir de PHP 5.3.0
echo $classname; // A partir de PHP 5.3.0


echo MyClass::CONST_VALUE;
?>