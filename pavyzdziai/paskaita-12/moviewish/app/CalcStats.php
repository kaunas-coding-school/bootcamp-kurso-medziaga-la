<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalcStats extends Model
{
    public function minArray($numbers = NULL, $numbers2 = NULL) {

        if (gettype($numbers) == "integer") {
            if ($numbers < $numbers2 || !$numbers2) {
                return $numbers;
            } else {
                return $numbers2;
            }
        }

        $min = $numbers[0];
        $elements = $this->countArray($numbers);

        for ($i=0; $i < $elements; $i++) {
            if ($numbers[$i] < $min) {
                $min = $numbers[$i];
            }
        }

        return $min;
    }

    public function maxArray($numbers) {

        return max($numbers);
    }

    public function countArray($numbers)
    {
        return sizeof($numbers);
    }

    public function averageArray($numbers)
    {

        if (gettype($numbers) == "integer") {
            return $numbers;
        }

        $elements = $this->countArray($numbers);

        $sum = 0;

        for ($i=0; $i < $elements; $i++) {
            $sum += $numbers[$i];
        }

        $average = $sum / $elements;

        return round($average, 3);
    }

    public function allStats($numbers)
    {
        $min = $this->minArray($numbers);
        $max = $this->maxArray($numbers);
        $count = $this->countArray($numbers);
        $average = $this->averageArray($numbers);

        return $all = [$min, $max, $count, $average];
    }
}
