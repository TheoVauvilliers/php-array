<?php

declare(strict_types=1);

namespace App\DataFixtures;

use App\DataFixtures\AbstractArrayFixtures;

/**
 * Generate a simple array
 */
class SimpleArrayFixtures extends AbstractArrayFixtures
{
    public function load(): array {
        $fixtures = [];
        $entry = $this->faker->numberBetween(self::MIN_ARRAY_ENTRY, self::MAX_ARRAY_ENTRY);

        for ($i = 0; $i < $entry; $i++) {
            $fixtures[] = $this->faker->word();
        }

        return $fixtures;
    }
}
