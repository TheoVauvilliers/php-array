<?php

declare(strict_types=1);

namespace App\Functions;

use App\Interface\RunnableInterface;

class ArraySearch implements RunnableInterface
{
    public static function run(array $array, array $options = []): array
    {
        $needle = $options['needle'];
        $strict = $options['strict'] ?? false;

        $original = array_search($needle, $array, $strict);
        $mine = self::arraySearch($needle, $array, $strict);

        return [
            'original' => $original,
            'mine' => $mine,
        ];
    }

    private static function arraySearch(mixed $needle, array $haystack, bool $strict = false): int|string|false
    {
        $result = false;

        foreach ($haystack as $key => $value) {
            if ($needle === $value && $strict) {
                return $key;
            } elseif ($needle == $value && !$strict) {
                return $key;
            }
        }

        return $result;
    }
}
