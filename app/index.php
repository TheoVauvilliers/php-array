<?php

declare(strict_types=1);

namespace App;

use App\DataFixtures\SimpleArrayFixtures;
use App\Functions\ArrayChunk;
use App\Functions\ArrayKeys;
use App\Functions\ArrayMerge;
use App\Functions\ArraySearch;
use App\Service\Speaker;

require_once 'vendor/autoload.php';

$simpleArrayFixtures = new SimpleArrayFixtures();
$simpleArray = $simpleArrayFixtures->load();

$array = ['test', 'toto', 'tata', 'titi'];

Speaker::execute(new ArraySearch(), $simpleArray, ['needle' =>  'qui', 'strict' => true]);
Speaker::execute(new ArrayKeys(), $simpleArray);
Speaker::execute(new ArrayMerge(), $simpleArray, ['array' => ['tutu', 'titi', 'two'  => 'tata', 'test']]);
Speaker::execute(new ArrayChunk(), $simpleArray,  ['length' => 5, 'preserve_keys' => false]);
