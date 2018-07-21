<?php
class Foo
{
    public static $mi_static = 'foo';

    public function valorStatic() {
        return self::$mi_static;
    }
}

class Bar extends Foo
{
    public function fooStatic() {
        return parent::$mi_static;
    }
}


print Foo::$mi_static . "<br>";

$foo = new Foo();
print $foo->valorStatic() . "<br>";
print $foo->mi_static . "<br>";      // "Propiedad" mi_static no definida

print $foo::$mi_static . "<br>";
$nombreClase = 'Foo';
print $nombreClase::$mi_static . "<br>"; // A partir de PHP 5.3.0

print Bar::$mi_static . "<br>";
$bar = new Bar();
print $bar->fooStatic() . "<br>";
?>