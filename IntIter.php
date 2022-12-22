<?php

class IntIter implements Iterator, Countable
{
    private $begin = 0;
    private $end = 0;
    private $step = 0;
    private $current_index = 0;
    private $current_value = 0;

    function __construct(int $begin, int $end, int $step = 1) {
        $this->begin = $begin;
        $this->end = $end;
        $this->step = $step;
        $this->rewind();
    }

    function current()
    {
        return $this->current_value;
    }

    function key()
    {
        return $this->current_index;
    }

    function next()
    {
        $this->current_index = 0;
        $this->current_value += $this->step;
    }

    function rewind()
    {
        $this->current_index = 0;
        $this->current_value = $this->begin;
    }

    function valid()
    {
        if ($this->end > $this->begin)
            return ($this->current_value >=$this->begin && $this->current_value <=$this->end);
        else
            return ($this->current_value <=$this->begin && $this->current_value >=$this->end);
    }

    public function count()
    {
       return abs(intdiv($this->end - $this->begin, $this->step)) + 1;
    }
}
$iter1 = new IntIter(1, 10);
echo count($iter1);
echo "<hr/>";

foreach ($iter1 as $iter)
    echo $iter . " ";
echo "<hr/>";

$iter2 = new IntIter(100, 10, -7);
echo count($iter2);
echo "<hr/>";

foreach ($iter2 as $iter)
    echo $iter . " ";
echo "<hr/>";