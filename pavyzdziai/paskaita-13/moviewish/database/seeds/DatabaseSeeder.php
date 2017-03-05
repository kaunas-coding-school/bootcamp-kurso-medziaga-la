<?php

use Illuminate\Database\Seeder;
use App\Movie;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(MoviesSeeder::class);
    }
}

/**
 * Sukuriam testinius duomenis su filmu informacija
 */
class MoviesSeeder extends Seeder
{

    public function run()
    {
        DB::table('movies')->delete();

        $avengersMovie = Movie::create(array(
            'title' => 'The Avengers',
            'release_date' => '2014-05-12'
        ));

        $fightclubMovie = Movie::create(array(
            'title' => 'Fight Club',
            'release_date' => '2004-02-10'
        ));
    }
}
