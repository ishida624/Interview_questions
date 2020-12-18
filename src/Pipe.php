<?php

namespace App;

class Pipe
{
    function increment($val)
    {
        return $val + 1;
    }
    function pipe($val, ...$args)
    {
        $pipe = new Pipe;
        foreach ($args as $arg) {
            // $val = call_user_func(array('Pipe', $arg), $val);
            $val = $pipe->$arg($val);
        }
        return $val;
    }
}
$pipe = new Pipe;
echo $pipe->pipe(5, 'increment', 'increment', 'increment', 'increment');
echo $pipe->pipe(5, 'increment');
