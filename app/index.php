<?php

declare(strict_types=1);

namespace App;

use App\Function\ArraySearch;
use App\Service\Speaker;

require_once 'vendor/autoload.php';

$array = [
    0 => 'test',
    'two' => 'second',
    'third',
    '4' => 99,
];

Speaker::execute(new ArraySearch(), $array, ['needle' =>  '99', 'strict' => true]);
