<?php

namespace Tests\Unit;

use App\FizzBuzz;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FizzBuzzTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testFizzBuzzClassInitiation()
    {
        $fb = new FizzBuzz;
    }

    public function testFizzBuzzMethodResult()
    {
        $fb = new FizzBuzz;
        $fb->result();
    }

    public function testFizzBuzzResult2()
    {
        $fb = new FizzBuzz;
        $result = $fb->result(2);
        $this->assertEquals(2, $result); // 2==2
    }

    public function testFizzBuzzResult4()
    {
        $fb = new FizzBuzz;
        $result = $fb->result(4);
        $this->assertEquals(4, $result); // 2==2
    }

    public function testFizzBuzzResult3()
    {
        $fb = new FizzBuzz;
        $result = $fb->result(3);
        $this->assertEquals("Fizz", $result); // 2==2
    }

    public function testFizzBuzzResult5()
    {
        $fb = new FizzBuzz;
        $result = $fb->result(5);
        $this->assertEquals("Buzz", $result); // 2==2
    }

    public function testFizzBuzzResult15()
    {
        $fb = new FizzBuzz;
        $result = $fb->result(15);
        $this->assertEquals("FizzBuzz", $result); // 2== 
    }
    public function testFizzBuzzResult6()
    {
        $fb = new FizzBuzz;
        $result = $fb->result(6);
        $this->assertEquals("Fizz", $result); // 2==2
    }

    public function testFizzBuzzReturnsHundredNumbers()
    {
        $fb = new FizzBuzz;
        $result = $fb->hundred();
        $this->assertCount(100, $result);
    }

    public function testFizzBuzzArrayFirst()
    {
        $fb = new FizzBuzz;
        $result = $fb->hundred();
        $this->assertEquals(1, $result[0]);
    }

    public function testFizzBuzzArray90()
    {
        $fb = new FizzBuzz;
        $result = $fb->hundred();
        $this->assertEquals("FizzBuzz", $result[89]);
    }

    public function testFizzBuzzArray99()
    {
        $fb = new FizzBuzz;
        $result = $fb->hundred();
        $this->assertEquals("Fizz", $result[98]);
    }


}
