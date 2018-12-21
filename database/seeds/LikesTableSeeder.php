<?php

use App\Models\TimeTable;
use Illuminate\Database\Seeder;

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
        $timeTables = TimeTable::get(['id']);
        foreach ($timeTables as $timeTable) {
            DB::table('likes')->insert([
              'timetable_id' => $timeTable->getAttribute('id'),
              'count' => 0
            ]);
        }
    }
}
