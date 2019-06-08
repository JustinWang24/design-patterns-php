<?php
/**
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

use PHPUnit\Framework\TestCase;
use Smartbro\impl\decorator\BasicService;
use Smartbro\impl\decorator\AddOil;
use Smartbro\impl\decorator\CleanWindow;

class DecoratorsTest extends TestCase
{
    /**
     * Test: simple way to use
     */
    public function testSimple(){
        $startPoint = new BasicService();

        $result = (new AddOil(new CleanWindow($startPoint)))->go();

        echo PHP_EOL . $this->echoInRed('Final result is: ') . $result;

        $this->assertTrue(
            'Basic service; Clean window; Add Oil;' === $result
        );
    }

    /**
     * Test decorators chain
     */
    public function testChaining(){
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

        $result = $final->go();

        echo PHP_EOL . $this->echoInRed('Final result is: ') . $result;

        $this->assertTrue(
            'Basic service; Add Oil; Clean window;' === $result
        );
    }

    /**
     * Output red text in CLI
     *
     * @param $str
     * @return string
     */
    private function echoInRed($str){
        return "\e[0;31;m$str \e[0m";
    }
}