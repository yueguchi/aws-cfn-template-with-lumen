<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class InfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->delete();
        DB::table('infos')->insert([
          'title' => '',
          'description' => '',
          'zip' => '',
          'address1' => '',
          'address2' => '',
          'place' => '',
          'organizer' => '',
          'hash_tag' => '',
          'start_at' => Carbon::parse('2019-02-16 00:00:00'),
          'end_at' => Carbon::parse('2019-02-16 23:59:59')
        ]);
    }
}
