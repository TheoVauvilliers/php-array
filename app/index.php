<?php

declare(strict_types=1);

namespace App;

use App\DataFixtures\MultidimensionalArrayFixtures;
use App\DataFixtures\MultidimensionalAssociativeArrayFixtures;
use App\DataFixtures\SimpleArrayFixtures;
use App\DataFixtures\SimpleAssociativeArrayFixtures;
use App\Functions\ArrayChunk;
use App\Functions\ArrayKeys;
use App\Functions\ArrayMerge;
use App\Functions\ArraySearch;
use App\Service\Speaker;

require_once 'vendor/autoload.php';

$array = (new SimpleAssociativeArrayFixtures())->load();

Speaker::execute(new ArraySearch(), $array, ['needle' =>  'qui', 'strict' => true]);
Speaker::execute(new ArrayKeys(), $array);
Speaker::execute(new ArrayMerge(), $array, ['array' => (new SimpleArrayFixtures)->load()]);
Speaker::execute(new ArrayChunk(), $array,  ['length' => 5, 'preserve_keys' => false]);

