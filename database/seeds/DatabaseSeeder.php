<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call('InfosTableSeeder');
        $this->call('SponsorsTableSeeder');
        $this->call('TimeTablesTableSeeder');
        $this->call('LikeTableSeeder');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
