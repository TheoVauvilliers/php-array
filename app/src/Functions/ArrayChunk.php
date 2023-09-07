<?php

declare(strict_types=1);

namespace App\Functions;

use App\Interface\RunnableInterface;

class ArrayChunk implements RunnableInterface
{
    public static function run(array $array, array $options = []): array
    {
        $length = $options['length'];
        $preserveKeys = $options['preserve_keys'] ?? false;

        $original = array_chunk($array, $length, $preserveKeys);
        $mine = self::arrayChunk($array, $length, $preserveKeys);

        return [
            'original' => $original,
            'mine' => $mine,
        ];
    }

    // TODO: use $preserve_keys
    private static function arrayChunk(array $array, int $length, bool $preserve_keys = false): array
    {
        $result = [];
        $index = 0;
        $occurence = 0;
        $chunk = 0;

        foreach($array as $key => $value) {
            if ($occurence === $length) {
                $occurence = 0;
                $chunk++;
            }

            $result[$chunk][$occurence] = $value;
            $occurence++;
        }

        return $result;
    }
}
