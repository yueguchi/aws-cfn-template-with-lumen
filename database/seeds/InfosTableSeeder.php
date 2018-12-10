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
          'title' => '日本最大級のLaravelの祭典',
          'description' => "Laravel JP Confferenceは、PHPのフレームワークであるLaravelをメインテーマとした技術カンファレンスです。\n「Laravel JP」を冠したイベントとしては日本初開催となります。",
          'zip' => '108-023',
          'address1' => '東京都 港区芝浦 3丁目4-1',
          'address2' => '田町グランパーク プラザ棟3階・4階',
          'place' => 'グランパークカンファレンス',
          'organizer' => 'Laravel JP Confference実行委員会',
          'hash_tag' => 'laraveljpcon',
          'start_at' => Carbon::parse('2019-02-16 00:00:00'),
          'end_at' => Carbon::parse('2019-02-16 23:59:59')
        ]);
    }
}
