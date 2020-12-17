<?php

use App\MarkComma;
use PHPUnit\Framework\TestCase;

class MarkCommaTest extends TestCase
{
    public function testMarkComma_input_integer()
    {
        $markComma = new MarkComma;
        $string = $markComma->MarkComma(123456789);
        $this->assertEquals('123,456,789', $string);
    }
    public function testMarkComma_input_float()
    {
        $markComma = new MarkComma;
        $string = $markComma->MarkComma(123456789.123);
        $this->assertEquals('123,456,789.123', $string);
    }
    public function testMarkComma_input_not_integer_or_float()
    {
        $markComma = new MarkComma;
        $string = $markComma->MarkComma('hello');
        $this->assertEquals('type is wrong', $string);
    }
}
