<?php

namespace app\lib;

use app\controllers\IndexController;

class App
{
    public static array $config = [];

    public static function run(): void {
        require __DIR__ . '/../../vendor/autoload.php';

        spl_autoload_register(function (string $class): void {
            require __DIR__ . '/../' . str_replace('\\', '/', substr($class, strlen('app\\'))) . '.php';
        });

        self::$config = require __DIR__ . '/../config/config.php';

        echo (new IndexController())->indexAction();
    }
}
