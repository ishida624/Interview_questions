<?php

use PHPUnit\Framework\TestCase;
use App\Pipe;

class PipeFunctionTest extends TestCase
{
    public function test_one_function_as_parameter(): void
    {
        $pipe = new Pipe;
        $this->assertEquals(6, $pipe->pipe(5, 'increment'));
    }
    public function test_multiple_function_as_parameter(): void
    {
        $pipe = new Pipe;
        $this->assertEquals(8, $pipe->pipe(5, 'increment', 'increment', 'increment'));
    }
}
