<?php

namespace Tests\Unit;

use App\OMDB;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class OMDBTest extends TestCase
{
    /**
     * Initiate the OMDB object from Class.
     *
     * @return void
     */
    public function testOMDBClassInitiated()
    {
        $omdb = new OMDB;
    }

    /**
     * Test OMDB Url address.
     *
     * @return void
     */
    public function testOMDBURL()
    {
        $omdb = new OMDB;
        $result = $omdb->url();
        $this->assertEquals('https://api.themoviedb.org/3/', $result);
    }

    /**
     * A test Search method.
     *
     * @return void
     */
    public function testOMDBSearchMethod()
    {
        $omdb = new OMDB;
        $result = $omdb->searchMethod();
        $this->assertEquals('GET', $result);
    }

    /**
     * A test Search method address.
     *
     * @return void
     */
    public function testOMDBSearchURL()
    {
        $omdb = new OMDB;
        $result = $omdb->searchUrl();
        $this->assertEquals('search/movie', $result);
    }

    /**
     * A test Search method without parameters.
     *
     * @return void
     */
    public function testOMDBSearchConnectionWithoutParameters()
    {
        $omdb = new OMDB;
        $result = $omdb->getSearch();
        $this->assertEquals(422, $result->getStatusCode());
    }

    /**
     * A test Search method with parameters.
     *
     * @return void
     */
    public function testOMDBSearchConnectionWithParameters()
    {
        $omdb = new OMDB;
        $result = $omdb->getSearch('avengers');
        $this->assertEquals(200, $result->getStatusCode());
    }

    /**
     * A test Search no results.
     *
     * @return void
     */
    public function testOMDBSearchResults()
    {
        $omdb = new OMDB;
        $response = $omdb->getSearch('akshfajkahskjf');
        $result = $omdb->getResults($response);
        $this->assertEquals(0, $result->total_results);
    }

    /**
     * Test Search with results.
     *
     * @return void
     */
    public function testOMDBSearchResultsMoreThan0()
    {
        $omdb = new OMDB;
        $response = $omdb->getSearch('avengers');
        $result = $omdb->getResults($response);
        $this->assertGreaterThan(0, $result->total_results);
    }
}
