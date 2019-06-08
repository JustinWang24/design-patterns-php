<?php
/**
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

namespace Smartbro\impl\adaptor;

class Book implements BookInterface
{
    public function open()
    {
        var_dump('Open the book.');
    }

    public function turnPage()
    {
        var_dump('Turn the page.');
    }

}