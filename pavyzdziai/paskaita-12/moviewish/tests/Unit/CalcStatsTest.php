<?php

namespace Tests\Unit;

use App\CalcStats;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CalcStatsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCalcStatsClassInitiations()
    {
        $cs = new CalcStats;
    }

    public function testCalcStatsMethodMinimum()
    {
        $cs = new CalcStats;
        $cs->minArray();
    }

    public function testCalcStatsMinimum3()
    {
        $cs = new CalcStats;
        $result = $cs->minArray(3);
        $this->assertEquals(3, $result);
    }

    public function testCalcStatsMinimumTwoValues()
    {
        $cs = new CalcStats;
        $result = $cs->minArray(3, 2);
        $this->assertEquals(2, $result);
    }

    public function testCalcStatsMinimumTwoValuesArray()
    {
        $cs = new CalcStats;
        $result = $cs->minArray([3, 2]);
        $this->assertEquals(2, $result);
    }

    public function testCalcStatsMinimumFiveValuesArray()
    {
        $cs = new CalcStats;
        $result = $cs->minArray([3, 2, 100, -10, 0]);
        $this->assertEquals(-10, $result);
    }

    public function testCalcStatsMaximum()
    {
        $cs = new CalcStats;
        $result = $cs->maxArray([3, 2, 90, -10, 0]);
        $this->assertEquals(90, $result);
    }

    public function testCalcStatsElementsInEmptyArray()
    {
        $cs = new CalcStats;
        $result = $cs->countArray([]);
        $this->assertEquals(0, $result);
    }

    public function testCalcStatsElementsInArray()
    {
        $cs = new CalcStats;
        $result = $cs->countArray([3, 2, 90, -10, 0]);
        $this->assertEquals(5, $result);
    }

    public function testCalcStatsAverageSingle()
    {
        $cs = new CalcStats;
        $result = $cs->averageArray(3);
        $this->assertEquals(3, $result);
    }
    public function testCalcStatsAverageDoubleArray() {
        $cs = new CalcStats;
        $results = $cs->averageArray([2, 4]);
        $this->assertEquals(3, $results);
    }

    public function testCalcStatsAverageFloatArray() {
        $cs = new CalcStats;
        $results = $cs->averageArray([2, 4, 4]);
        $this->assertEquals(3.333, $results);
    }


    function testCalcStatsAllStatsArrayCount() {
        $cs = new CalcStats;
        $results = $cs->allStats([2, 4]);
        $this->assertCount(4, $results);
    }

    function testCalcStatsAllStatsArray() {
        $cs = new CalcStats;
        $results = $cs->allStats([2, 4, 4]);
        $this->assertEquals(2, $results[0]);
        $this->assertEquals(4, $results[1]);
        $this->assertEquals(3, $results[2]);
        $this->assertEquals(3.333, $results[3]);
    }
}
