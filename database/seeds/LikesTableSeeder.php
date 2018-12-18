<?php

use App\Models\TimeTable;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('likes')->delete();
        array_map(function ($timeTable) {
            DB::table('likes')->insert([
              'timetable_id' => $timeTable['id'],
              'count' => 0
            ]);
        }, TimeTable::get(['id'])->toArray());
    }
}
