<?php
/**
 * Created by PhpStorm.
 * User: axhm3a
 * Date: 16.06.15
 * Time: 12:06
 */

class TestTypeHints  extends \PHPUnit_Framework_TestCase
{
    public function testSetInteger()
    {
        $typeHints = new \Seven\TypeHints();
        $this->assertEquals(0, $typeHints->comp(5));
        $this->assertEquals(-1, $typeHints->comp(4));
        $this->assertEquals(1, $typeHints->comp(6));
    }
}