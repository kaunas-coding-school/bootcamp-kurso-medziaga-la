<?php
namespace App;
use Illuminate\Database\Eloquent\Model;

/**
 *
 */
class FizzBuzz extends Model
{
    public function result($number = 0)
    {
        if ($number % 15 == 0) {
            $number = "FizzBuzz";
        } else if ($number % 5 == 0) {
            $number = "Buzz";
        } else if ($number % 3 == 0) {
            $number = "Fizz";
        }

        return $number;
    }

    public function hundred()
    {
        $results = [];
        for ($i=1; $i <= 100; $i++) {
            array_push($results, $this->result($i));
        }
        return $results;
    }


}
