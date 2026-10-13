<?php

use ScssPhp\ScssPhp\Compiler;
use ScssPhp\ScssPhp\OutputStyle;

require __DIR__ . '/../../vendor/autoload.php';

$compiler = new Compiler();
$compiler->setOutputStyle(OutputStyle::COMPRESSED);

$css = $compiler->compileString(file_get_contents(__DIR__ . '/../scss/main.scss'))->getCss();
file_put_contents(__DIR__ . '/../web/css/main.css', $css);
