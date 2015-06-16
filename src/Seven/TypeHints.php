<?php
/**
 * Created by PhpStorm.
 * User: axhm3a
 * Date: 16.06.15
 * Time: 11:55
 */

namespace Seven;

class TypeHints
{
    private $value;

    public function setInteger(int $value)
    {
        $this->value = $value;
    }

    public function comp(int $value) : int
    {
        return $value <=> 5;
    }
}
