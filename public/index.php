<?php

require '../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;

$salut = new Hello();
echo $salut->talk(). '<br>';
$salutMonde = new SayHello();

echo $salutMonde->world();

?>