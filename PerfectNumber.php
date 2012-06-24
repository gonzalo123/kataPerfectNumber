<?php
class PerfectNumber
{
    public function getHigherThan($number)
    {
        foreach (range($number, 1) as $i) {
            if ($this->isPerfect($i)) {
                return $i;
            }
        }
        return null;
    }

    private function __invoke($number)
    {
        return $this->getHigherThan($number);
    }

    private function isPerfect($number)
    {
        return array_sum($this->getDivisors($number)) == $number;
    }

    private function getDivisors($number)
    {
        $divisors = array();
        foreach (range(1, $number) as $i) {
            if ($number != $i && $number % $i == 0) {
                $divisors[] = $i;
            }
        }
        return $divisors;
    }
}