<?php
/**
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */
use PHPUnit\Framework\TestCase;

use Smartbro\impl\adaptor\BookInterface;
use Smartbro\impl\adaptor\Book;
use Smartbro\impl\adaptor\KindleAdaptor;
use Smartbro\impl\adaptor\Kindle;
use Smartbro\impl\adaptor\Nook;

class Person{
    /**
     * 这个方法作为消费者 是不需要修改的。而达到此效果，是因为KindleAdaptor类
     *
     * @param BookInterface $book
     * @return bool
     */
    public function read(BookInterface $book){
        echo PHP_EOL;
        $book->open();
        echo PHP_EOL;
        $book->turnPage();
        return true;
    }
}

class AdaptorTest extends TestCase
{

    public function testAdaptor(){
        $p = new Person();

        $done = $p->read(new Book());

        $this->assertTrue($done);

        // Use Adaptor
        $done = $p->read(new KindleAdaptor(new Kindle()));
        $this->assertTrue($done);

        $done = $p->read(new KindleAdaptor(new Nook()));
        $this->assertTrue($done);
    }
}