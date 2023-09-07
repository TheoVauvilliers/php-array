<?php

declare(strict_types=1);

namespace App\DataFixtures;

use Faker\Generator;

abstract class AbstractArrayFixtures
{
    protected const MIN_ARRAY_ENTRY = 10;
    protected const MAX_ARRAY_ENTRY = 50;

    protected readonly Generator $faker;

    public function __construct() {
        $this->faker = \Faker\Factory::create();
    }

    abstract public function load(): array;
}
