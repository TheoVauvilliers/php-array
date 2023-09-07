<?php

declare(strict_types=1);

/**
 * This autoload is not used, has been replaced by the composer autoloader
 * Simple autoloader that follow the PHP Standards Recommendation (PSR-4)
 * 
 * Code inspired from PSR-4 Example Implementations
 * @see https://www.php-fig.org/psr/psr-4/examples/
 */
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $baseDir = __DIR__ . DIRECTORY_SEPARATOR;

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relativeClass = substr($class, $len);
    $file = $baseDir . str_replace('\\', DIRECTORY_SEPARATOR, $relativeClass) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});
