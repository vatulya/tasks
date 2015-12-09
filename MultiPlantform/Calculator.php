<?php

class Calculator
{

    /**
     * @param int|float $param1
     * @param int|float $param2
     *
     * @return int|float
     */
    public function sum($param1, $param2) {
        Logger::log('Start calc. Expression: %s + %s', [$param1, $param2]);

        $result = $param1 + $param2;

        Logger::log('Finish calc. Result: %s', $result);
        return $result;
    }

}