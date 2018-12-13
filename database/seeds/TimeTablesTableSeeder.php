<?php

use App\Models\Sponsor;
use Webpatser\Uuid\Uuid;
use Illuminate\Database\Seeder;

class TimeTablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('timetables')->delete();
        // gradeの値のみを抽出
        // TODO 採択されたら、精査して正確なデータを入れる
        $inserts = [];
        array_map(function ($s) use (&$inserts) {
            switch ($s['grade']) {
                case 'Gold':
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => 'PHPerのためのXP入門',
                      'description' => <<< 'EOT'
みなさん、アジャイルは好きですか？
アジャイル＝スクラムだと思っていませんか？
アジャイルの方法には、エクストリームプログラミングという、プログラマに寄り添ったアジャイル手法が存在します。
どのようにすればキレイなコードを保てるか？
どのようにすればムダを無くせるか？
普段の開発を見直してみませんか？
EOT
                        ,
                      'speaker' => '前田 和人',
                      'twitter' => 'chiroruxxxx',
                      'place' => '3F',
                      'hash_tag' => '#larajpconf3F',
                      'start_at' => '2019-02-16 10:30',
                      'end_at' => '2019-02-16 11:00',
                      'sponsor_id' => $s['id']
                    ]);
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => 'Laravelerの僕が半年Goで開発した知見を公開する',
                      'description' => <<< 'EOT'
Laravel使いだった私はGo言語を始めて1年、業務では半年開発をしています。
Goをどのように学習するのが良いか、Goコミュニティや文化の話、Goのメリット、PHPとの違い、開発時に注意するtips、
Go製ライブラリやなぜMicroserviceで利用される事が多いのか？などを分かりやすくお話します
EOT
                        ,
                      'speaker' => 'k-kurikuri',
                      'twitter' => 'k_kurikuri2',
                      'place' => '4F',
                      'hash_tag' => '#larajpconf4F',
                      'start_at' => '2019-02-16 11:00',
                      'end_at' => '2019-02-16 11:30',
                      'sponsor_id' => $s['id']
                    ]);
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => 'Moving from Laravel to Hack in Building microservices',
                      'description' => <<< 'EOT'
Laravelを用いることで多種多様なアプリケーションチームが可能ですが、
必ずしも全てのケースで有用というわけではなく、
手軽さが重視されるわけではありません。
マイクロサービスアーキテクチャ実践する上で、
複数の実装パターン、データ処理フロー、サービス分割方法を交えながら
Laravelを使う場合に注意しなければならない点、
課題解決としてHackに置き換える実例と運用方法軸にお話しします。
EOT
                        ,
                      'speaker' => 'ytake',
                      'twitter' => 'ex_takezawa',
                      'place' => '4F',
                      'hash_tag' => '#larajpconf4F',
                      'start_at' => '2019-02-16 11:30',
                      'end_at' => '2019-02-16 12:00',
                      'sponsor_id' => $s['id']
                    ]);
                    break;
                case 'Silver':
                    break;
                case 'Bronze':
                    break;
                case 'Lunch':
                    break;
                case 'Drink':
                    break;
                case 'Echobag':
                    break;
                case 'Design':
                    break;
                case 'Special':
                    break;
                case 'Etc':
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => 'オープニング',
                      'description' => <<< 'EOT'
オープニングです。
よろしくお願いします。
EOT
                        ,
                      'speaker' => 'ytake',
                      'twitter' => 'ex_takezawa',
                      'place' => '3F',
                      'hash_tag' => '#larajpconf',
                      'start_at' => '2019-02-16 10:00',
                      'end_at' => '2019-02-16 10:15',
                      'sponsor_id' => $s['id']
                    ]);
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => 'test',
                      'description' => <<< 'EOT'
て
す
と
EOT
                        ,
                      'speaker' => 'test',
                      'twitter' => 'test',
                      'place' => '3F',
                      'hash_tag' => '#larajpconf3F',
                      'start_at' => '2019-02-16 13:00',
                      'end_at' => '2019-02-16 13:05',
                      'sponsor_id' => $s['id']
                    ]);
                    break;
            }
        }, Sponsor::get(['grade', 'id'])->toArray());
        DB::table('timetables')->insert($inserts);
    }
}
