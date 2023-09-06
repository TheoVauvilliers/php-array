<?php

declare(strict_types=1);

namespace App\Interface;

interface RunnableInterface
{
    public static function run(array $array, array $options = []): array;
}
