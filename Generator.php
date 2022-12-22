<?php
function int_gen(int $begin, int $end, int $step = 1) : Generator
{
    if ($end > $begin) 
        for ($i = $begin; $i <= $end; $i += $step) 
            yield $i;
    else 
        for ($i = $begin; $i >= $end; $i += $step) 
            yield $i;    
            
            
}

$gen1 = int_gen(1,10);
    foreach ($gen1 as $el)
        echo $el . " ";
    echo "<hr>";

$gen2 = int_gen(1, 20, 2);
    foreach ($gen2 as $el)
        echo $el . ' ';
    echo "<hr>";

$gen3 = int_gen(100, 50 , -5);
    foreach ($gen3 as $el)
        echo $el . ' ';