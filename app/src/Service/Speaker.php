<?php

declare(strict_types=1);

namespace App\Service;

use App\Interface\RunnableInterface;

class Speaker
{
    public static function execute(RunnableInterface $class, array $array, array $options = []): void
    {
        $values = $class::run($array, $options);

        echo $class::class . '<br/>';

        self::initialArray($array);

        echo 'Original : <br/>';
        var_dump($values['original']);
        echo '<br/><br/>';

        echo 'Mine : <br/>';
        var_dump($values['mine']);
        echo '<br/><br/>';
        echo '====================';
        echo '<br/><br/>';
    }

    private static function initialArray(array $array): void
    {
        echo 'Initial array : <br/>';
        var_dump($array);
        echo '<br/><br/>';
    }
}
