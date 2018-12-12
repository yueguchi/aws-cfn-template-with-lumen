<?php

use Illuminate\Database\Seeder;

class SponsorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sponsors')->delete();
        DB::table('sponsors')->insert([
          ['grade' => 'Gold'],
          ['grade' => 'Silver'],
          ['grade' => 'Bronze'],
          ['grade' => 'Lunch'],
          ['grade' => 'Drink'],
          ['grade' => 'Echobag'],
          ['grade' => 'Design'],
          ['grade' => 'Special'],
          ['grade' => 'Etc']
        ]);
    }
}
