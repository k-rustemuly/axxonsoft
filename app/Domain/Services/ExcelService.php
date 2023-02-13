<?php

namespace App\Domain\Services;

class ExcelService
{
    public function calculateCoordinate($index = 10)
    {
        $letters = ' ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $coordinate = '';
        while($index > 0) {
            $charVal = ($index % 26) ?: 26;
            $index = ($index - $charVal) / 26;
            $coordinate = $letters[$charVal].$coordinate;
        }
        return $coordinate;
    }

}
