<?php
/**
 * This is the mock interface which all decorators must be implemented
 *
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

namespace Smartbro\contracts;


interface Decorator
{
    /**
     * Demo function. It represents the action which the decorator will do
     *
     * @return mixed
     */
    public function go();

    // Todo: You could keep adding more function definitions based on your requirements
}