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
        echo json_encode($values['original']);
        echo '<br/><br/>';

        echo 'Mine : <br/>';
        echo json_encode($values['mine']);
        echo '<br/><br/>';
        echo '====================';
        echo '<br/><br/>';
    }

    private static function initialArray(array $array): void
    {
        echo 'Initial array : <br/>';
        echo json_encode($array);
        echo '<br/><br/>';
    }
}
