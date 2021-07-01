<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Wcs\Hello;
use HelloWorld\SayHello;

echo SayHello::world() . '<br>';

$message = new Hello();
echo $message->talk();