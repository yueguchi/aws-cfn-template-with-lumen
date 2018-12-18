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
            $id = $timeTable['id'];
            $like = new Like();
            $like->timetable_id = $id;
            $like->count = 0;
            $like->save();
        }, TimeTable::get(['id'])->toArray());
    }
}
