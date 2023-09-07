<?php

declare(strict_types=1);

namespace App\Functions;

use App\Interface\RunnableInterface;

class ArrayMerge implements RunnableInterface
{
    public static function run(array $array, array $options = []): array
    {
        $anotherArray = $options['array'];

        $original = array_merge($array, $anotherArray);
        $mine = self::arrayMerge($array, $anotherArray);

        return [
            'original' => $original,
            'mine' => $mine,
        ];
    }

    private static function arrayMerge(array ...$arrays): array
    {
        $result = [];
        $index = 0;

        foreach ($arrays as $array) {
            foreach ($array as $key => $value) {
                if (is_string($key)) {
                    $result[$key] = $value;
                } else {
                    $result[$index] = $value;
                    $index++;
                }
            }
        }

        return $result;
    }
}
