<?php

declare(strict_types=1);

namespace App\Functions;

use App\Interface\RunnableInterface;

class ArrayKeys implements RunnableInterface
{
    public static function run(array $array, array $options = []): array
    {
        $original = array_keys($array);
        $mine = self::arrayKeys($array);

        return [
            'original' => $original,
            'mine' => $mine,
        ];
    }

    private static function arrayKeys(array $array): array
    {
        $result = [];

        foreach($array as $key => $value) {
            $result[] = $key;
        }

        return $result;
    }
}
