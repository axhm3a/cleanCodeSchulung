<?php
/**
 * Created by PhpStorm.
 * User: axhm3a
 * Date: 16.06.15
 * Time: 15:20
 */

namespace Katas;


class RomanNumbersTest extends \PHPUnit_Framework_TestCase
{
    private $romanNumbers;

    protected function setUp()
    {
        $this->romanNumbers = new RomanNumbers();
    }


    public function testRomanNumbersExists()
    {
        $this->assertInstanceOf(RomanNumbers::class, $this->romanNumbers);
    }

    /**
     * @dataProvider arabicAndEqualRomanNumbers
     */
    public function testItShouldConvertArabivToRomanNumber($arabicNumber, $romanNumber)
    {
        $this->assertEquals($romanNumber, $this->romanNumbers->convertArabicToRoman($arabicNumber));
    }



    public function arabicAndEqualRomanNumbers()
    {
        return array(
            array(1, 'I'),
            array(2, 'II'),
            array(3, 'III'),
            array(4, 'IV'),
            array(5, 'V'),
            array(6, 'VI'),
            array(7, 'VII'),
            array(8, 'VIII'),
            array(9, 'IX'),
            array(10, 'X'),
            array(11, 'XI'),
            array(30, 'XXX'),
            array(40, 'XL'),
            array(50, 'L'),
            array(80, 'LXXX'),
            array(90, 'XC'),
            array(100, 'C'),
            array(400, 'CD'),
            array(500, 'D'),
            array(900, 'CM'),
            array(1000, 'M'),
            array(1236, 'MCCXXXVI')
        );
    }
}