<?php

namespace Spear\Silex\Persistence\Fields;

use Spear\Silex\Persistence\Field;

abstract class AbstractFieldTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider providerTestConvert
     */
    public function testConvert(Field $field, $value, $expected)
    {
        $convertedValue = $field->convert($value);
        $this->assertSame($expected, $convertedValue);
    }

    /**
     * @dataProvider providerTestConvertWithExceptions
     * @expectedException \Spear\Silex\Persistence\Exceptions\InvalidDataException
     */
    public function testConvertWithExceptions(Field $field, $value)
    {
        $field->convert($value);
    }

    abstract public function providerTestConvert();

    abstract public function providerTestConvertWithExceptions();
}
