<?php
/**
 * 这个类是适配器类
 *
 * 其实现的重点是，
 * 1: 适配器要实现自己定义的接口
 * 2: 在构造函数中，要传入需要被适配的第三方库的对象
 *
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

namespace Smartbro\impl\adaptor;

class KindleAdaptor implements BookInterface
{
    /**
     * 需要被适配的第三方库对象实例
     * @var eReaderInterface $eReader
     */
    private $eReader;

    /**
     * KindleAdaptor constructor.
     * @param eReaderInterface $eReader
     */
    public function __construct(eReaderInterface $eReader)
    {
        $this->eReader = $eReader;
    }

    public function open()
    {
        return $this->eReader->turnOn();
    }

    public function turnPage()
    {
        return $this->eReader->pressNextButton();
    }
}