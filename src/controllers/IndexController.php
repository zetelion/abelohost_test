<?php

namespace app\controllers;

use Smarty\Smarty;

class IndexController
{
    public function indexAction(): string {
        $smarty = new Smarty();
        $smarty->setTemplateDir(__DIR__ . '/../templates');
        $smarty->setCompileDir(__DIR__ . '/../runtime/templates_c');

        return $smarty->fetch('index/index.tpl');
    }
}
