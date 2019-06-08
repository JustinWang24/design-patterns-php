<?php
/**
 * The start point of decorators chain
 *
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

namespace Smartbro\impl\decorator;

use Smartbro\contracts\Decorator;

class BasicService implements Decorator
{
    public function go()
    {
        return 'Basic service;';
    }
}