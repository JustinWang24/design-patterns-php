<?php
/**
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

namespace Smartbro\impl\decorator;


use Smartbro\contracts\Decorator;

class CleanWindow implements Decorator
{
    public $decorator;

    public function __construct(Decorator $decorator)
    {
        $this->decorator = $decorator;
    }

    public function go()
    {
        return $this->decorator->go() . ' Clean window;';
    }
}