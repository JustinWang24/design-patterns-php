<?php
/**
 * 注意 这个类其实代表的是某个第三方编写的库 不是自己写的 它提供的方法 一般不是我们自己预定义好的
 *
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

namespace Smartbro\impl\adaptor;


class Kindle implements eReaderInterface
{

    public function turnOn(){
        var_dump('Turn the Kindle on');
    }

    public function pressNextButton(){
        var_dump('Press the next button on the Kindle');
    }
}