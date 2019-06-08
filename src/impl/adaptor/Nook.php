<?php
/**
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

namespace Smartbro\impl\adaptor;


class Nook implements eReaderInterface
{
    public function turnOn()
    {
        var_dump('Turn the Nook on');
    }

    public function pressNextButton()
    {
        var_dump('Press the next button on the Nook');
    }
}