<?php
ini_set('display_errors', 1);

function autoloader1($item)
{
    $file = __DIR__ . "/classes/{$item}.php";
    if (file_exists($file))
    {
        require_once $file;
    }
}
spl_autoload_register('autoloader1');

spl_autoload_register(function ($item) {
    require_once(__DIR__ . "/interfaces/{$item}.php");
});

echo time() . "<br/>";
$calc1 = new Calculator;
echo StaticCalculator::add(2,3) . "<br/>";
echo $calc1->divide(6,2) . "<br/>";

