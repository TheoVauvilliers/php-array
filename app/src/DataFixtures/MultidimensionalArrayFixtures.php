<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\DataFixtures\AbstractArrayFixtures;

/**
 * Generate a multidimensional array
 */
class MultidimensionalArrayFixtures extends AbstractArrayFixtures
{
    public function load(): array {
        $fixtures = [];
        
        $multidimensional = $this->faker->numberBetween(self::MIN_MULTIDIMENSIONAL, self::MAX_MULTIDIMENSIONAL);
        $entry = $this->faker->numberBetween(self::MIN_ARRAY_ENTRY, self::MAX_ARRAY_ENTRY);

        for ($y = 0; $y < $multidimensional; $y++) {
            for ($i = 0; $i < $entry; $i++) {
                $fixtures[$y][$i] = $this->faker->word();
            }
        }

        return $fixtures;
    }
}
