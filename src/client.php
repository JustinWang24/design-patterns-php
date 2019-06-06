<?php
/**
 * Client/entry point
 *
 * Demonstrate how to use "Decorator" pattern in the real world.
 * Run: php client.php
 * You should see: Basic service; Add Oil; Clean window;
 *
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */
require '../vendor/autoload.php';

use Smartbro\impl\BasicService;
use Smartbro\impl\AddOil;
use Smartbro\impl\CleanWindow;

/**
 * @var array[string] $decorators
 */
$decorators = [];
/**
 * @var \Smartbro\contracts\Decorator $final
 */
$final = null;

$startPoint = new BasicService();
$decorators[] = AddOil::class;
$decorators[] = CleanWindow::class;

foreach ($decorators as $key => $decoratorClassName) {
    if($key === 0){
        $final = new $decoratorClassName($startPoint);
    }
    else{
        $final = new $decoratorClassName($final);
    }
}

echo $final->go() . PHP_EOL;
