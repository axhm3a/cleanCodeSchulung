<?php
/**
 * Created by PhpStorm.
 * User: axhm3a
 * Date: 16.06.15
 * Time: 15:27
 */

namespace Katas;


class RomanNumbers
{
    private $lookUp = array(
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I'
    );


    public function convertArabicToRoman($number)
    {
        $result = '';

        foreach ($this->lookUp as $arabicNumber => $romanNumber) {
            while ($number >= $arabicNumber) {
                $number -= $arabicNumber;
                $result .= $romanNumber;
            }
        }

        return $result;
    }
}