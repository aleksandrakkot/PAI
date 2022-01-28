<?php

class Shift
{
    private $date_shift;
    private $start;
    private $end;

    public function __construct(
        string $date_shift,
        string $start,
        string $end,

    ) {
        $this->date_shift = $date_shift;
        $this->start = $start;
        $this->end = $end;
    }

    public function getDateShift(): string
    {
        return $this->date_shift;
    }

    public function setDateShift(string $date_shift): void
    {
        $this->date_shift = $date_shift;
    }

    public function getStart(): string
    {
        return $this->start;
    }

    public function setStart(string $start): void
    {
        $this->start = $start;
    }

    public function getEnd(): string
    {
        return $this->end;
    }

    public function setEnd(string $end): void
    {
        $this->end = $end;
    }
}


