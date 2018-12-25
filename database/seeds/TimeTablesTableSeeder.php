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
                      'avatar' => '',
                      'place' => '3F会議室',
                      'hash_tag' => 'laraveljpcon3F',
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
                      'avatar' => '',
                      'place' => '4F会議室',
                      'hash_tag' => 'laraveljpcon4F',
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
                      'avatar' => '',
                      'place' => '4F会議室',
                      'hash_tag' => 'laraveljpcon4F',
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
                      'avatar' => '',
                      'place' => '3F会議室',
                      'hash_tag' => 'laraveljpcon',
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
                      'avatar' => '',
                      'place' => '3F会議室',
                      'hash_tag' => 'laraveljpcon3F',
                      'start_at' => '2019-02-16 13:00',
                      'end_at' => '2019-02-16 13:05',
                      'sponsor_id' => $s['id']
                    ]);
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => 'test',
                      'description' => <<< 'EOT'
同じ時間帯のて
す
と
EOT
                        ,
                      'speaker' => 'test',
                      'twitter' => 'test',
                      'avatar' => '',
                      'place' => '4F会議室',
                      'hash_tag' => 'laraveljpcon4F',
                      'start_at' => '2019-02-16 13:00',
                      'end_at' => '2019-02-16 13:30',
                      'sponsor_id' => $s['id']
                    ]);
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => 'test',
                      'description' => <<< 'EOT'
LocalPushのスケジューリングテスト1
EOT
                        ,
                      'speaker' => 'test-push',
                      'twitter' => 'test',
                      'avatar' => '',
                      'place' => '4F会議室',
                      'hash_tag' => 'laraveljpcon4F',
                      'start_at' => '2018-12-25 14:30',
                      'end_at' => '2018-12-25 15:00',
                      'sponsor_id' => $s['id']
                    ]);
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => 'test',
                      'description' => <<< 'EOT'
LocalPushのスケジューリングテスト2
EOT
                        ,
                      'speaker' => 'test-push',
                      'twitter' => 'test',
                      'avatar' => '',
                      'place' => '4F会議室',
                      'hash_tag' => 'laraveljpcon4F',
                      'start_at' => '2018-12-25 15:00',
                      'end_at' => '2018-12-25 15:30',
                      'sponsor_id' => $s['id']
                    ]);
                    // LT
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => 'LT大会',
                      'description' => <<< 'EOT'
柴山健吾 Lighthouseを使って認証必須のGraphQL APIを開発する
maki Laravel Zeroで楽して情報収集する？
Kazuya Takei 今だからこそ作る、Laravel上で動くアクセスカウンター
k-kurikuri  LaravelSparkでサービス開発に注力する
平田智子 Laravel Telescopeにアプリのモニタリングをお任せしてみた
加納悠史 電撃：Laravel API クイズ
株式会社Nextat 西澤裕也 Laravelの公式には載っていないBuilderの使い方
ヤマシタ 未経験者研修で社内研修用システムをざっくり作った話
ハトヨウコ LaravelとVue.jsに出会った私がレガシーな管理サイトを半SPAにするまでの歩み
bmf_san Laravelで始めるテスト生活
EOT
                        ,
                      'speaker' => '',
                      'twitter' => '',
                      'avatar' => '',
                      'place' => '3F会議室',
                      'hash_tag' => 'laraveljpcon3F',
                      'start_at' => '2019-02-16 16:15',
                      'end_at' => '2019-02-16 17:15',
                      'sponsor_id' => $s['id']
                    ]);
                    break;
            }
        }, Sponsor::get(['grade', 'id'])->toArray());
        DB::table('timetables')->insert($inserts);
    }
}
