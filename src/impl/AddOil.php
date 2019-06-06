<?php
/**
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

namespace Smartbro\impl;

use Smartbro\contracts\Decorator;

class AddOil implements Decorator
{
    public $decorator;

    public function __construct(Decorator $decorator)
    {
        $this->decorator = $decorator;
    }

    public function go()
    {
        return $this->decorator->go().' Add Oil;';
    }
}