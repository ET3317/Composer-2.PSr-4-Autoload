<?php

require_once __DIR__ . '/../src/Hello.php';

use App\Hello;

$hello = new Hello();
echo $hello->talk();

