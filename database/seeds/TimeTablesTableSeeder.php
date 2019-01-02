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
                      'title' => 'LaravelでのAPI開発を爆速にするためにやっていること',
                      'description' => <<< 'EOT'
SCOUTERでLaravelでのAPI開発を高速にするためにやっていることを話します。
パッケージ開発や自作OSSをもちいた開発など、開発フローの効率化をお話させていただきます。
EOT
                        ,
                      'speaker' => '松本 宏太',
                      'twitter' => '',
                      'avatar' => '',
                      'place' => '3F',
                      'hash_tag' => 'laraveljpcon3F',
                      'start_at' => '2019-02-16 13:00',
                      'end_at' => '2019-02-16 13:30',
                      'sponsor_id' => $s['id']
                    ]);
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => 'リリース直前にLumenからLaravelに移行した話',
                      'description' => <<< 'EOT'
Lumenは2015年にLaravel5.0をベースに作られたマイクロフレームワークです。
GameWithの新サービスは、開発当初はLumenで開発をしていました。

しかし、独自でDBコネクションを作成し管理していたため、DBスレーブ環境を構築する際に独自でスレーブの処理を実装する必要がでてきました。
そのため、リリース直前でしたがLaravelに移行するのを決心しました。

本セッションではLumenでの開発、Laravelへの移行した事例を紹介します。
EOT
                        ,
                      'speaker' => '田口 航',
                      'twitter' => '',
                      'avatar' => '',
                      'place' => '4F',
                      'hash_tag' => 'laraveljpcon4F',
                      'start_at' => '2019-02-16 13:50',
                      'end_at' => '2019-02-16 14:20',
                      'sponsor_id' => $s['id']
                    ]);

                    break;
                case 'Silver':
                    break;
                case 'Bronze':
                    break;
                case 'Lunch':
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => 'エキテンとLaravelと私',
                      'description' => <<< 'EOT'
現在マイクロサービス化を進めているエキテン。
マイクロサービスの１コンポーネントに採用したLaravelのことや、
現場にいる新卒の目を通じて、その光と闇について。
EOT
                        ,
                      'speaker' => 'ブライソン イアン',
                      'twitter' => '',
                      'avatar' => '',
                      'place' => '3F',
                      'hash_tag' => 'laraveljpcon3F',
                      'start_at' => '2019-02-16 12:10',
                      'end_at' => '2019-02-16 12:40',
                      'sponsor_id' => $s['id']
                    ]);
    
                    break;
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
                      'title' => 'Opening Talk',
                      'description' => <<< 'EOT'
Laravel JP Conferenceは PHPのフレームワークであるLaravelをメインテーマとした技術カンファレンスです。「Laravel JP」を冠したイベントとしては日本初開催となります。


Laravelとは
2011年6月に初版が公開されたPHPによるオープンソースなWebアプリケーションフレームワーク。PHPのフレームワークの中でもGithub stars数は一番多く、Google Trendsによる人気の動向でも日本でもっとも注目を集めています。(2018年9月現在)


本イベントでは主に一般公募から参加していただくスピーカーによるトークセッションと、スポンサー様から参加していただくスピーカーのトークセッション他、懇親会や参加者同士で意見交換などができる場の提供を予定しています。

EOT
                        ,
                      'speaker' => 'ytake',
                      'twitter' => 'ex_takezawa',
                      'avatar' => 'https://fortee.jp/files/laravel-jp-conference-2019/speaker/67996846-780f-40d5-ab26-5df25f363a4a.jpg',
                      'place' => '3F',
                      'hash_tag' => 'laraveljpcon',
                      'start_at' => '2019-02-16 10:00',
                      'end_at' => '2019-02-16 10:20',
                      'sponsor_id' => $s['id']
                    ]);
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => 'ServiceProvider, ServiceContainer入門',
                      'description' => <<< 'EOT'
Laravel入門者にとって、サービスプロバイダ, サービスコンテナは鬼門です。
これらはDIなどのテクニックが背景にありますが、そもそもDIという概念がとても難しいですよね。
本セッションでは、サービスプロバイダ, サービスコンテナを実例を交えて説明します。
また、実践を踏まえてregisterメソッドとbootメソッドの違いなども解説します。
EOT
                        ,
                      'speaker' => '前田 和人',
                      'twitter' => 'chiroruxxxx',
                      'avatar' => 'https://fortee.jp/files/laravel-jp-conference-2019/speaker/9125af45-552c-4bcf-a7c6-3bbb40537f64.jpeg',
                      'place' => '3F',
                      'hash_tag' => 'laraveljpcon3F',
                      'start_at' => '2019-02-16 10:30',
                      'end_at' => '2019-02-16 11:00',
                      'sponsor_id' => $s['id']
                    ]);
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => 'フレームワークとの付き合い方',
                      'description' => <<< 'EOT'
PHP で Web アプリケーションを開発するのにフレームワークを利用するのは当たり前となっています。
Laravelをはじめとするフレームワークは有用なものですが、それだけあれば我々が望むアプリケーションができるわけではありません。
アプリケーションを開発、運用していく上で、より主体的にフレームワークを活用するための付き合い方をご紹介します。
EOT
                        ,
                      'speaker' => '新原雅司',
                      'twitter' => 'shin1x1',
                      'avatar' => 'https://pbs.twimg.com/profile_images/1118038428/be5c756e-ae2f-49b6-8c7b-bd8508b6dc93_400x400.png',
                      'place' => '4F',
                      'hash_tag' => 'laraveljpcon4F',
                      'start_at' => '2019-02-16 10:30',
                      'end_at' => '2019-02-16 11:00',
                      'sponsor_id' => $s['id']
                    ]);
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => 'laravelでパッケージ開発',
                      'description' => <<< 'EOT'
laravelのパッケージ機能はライブラリを作成するためのものだけではありません。

laravelのパッケージ開発を利用して、複雑なシステムを機能分離する手法を紹介します。
EOT
                        ,
                      'speaker' => '後藤知宏',
                      'twitter' => '_mikakane',
                      'avatar' => 'https://fortee.jp/files/laravel-jp-conference-2019/speaker/39dbffeb-d626-4333-aa6d-8a08709f1747.jpg',
                      'place' => '3F',
                      'hash_tag' => 'laraveljpcon3F',
                      'start_at' => '2019-02-16 11:20',
                      'end_at' => '2019-02-16 11:50',
                      'sponsor_id' => $s['id']
                    ]);
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => 'Webアプリケーションが今こそ知るべき、RDBMSのパフィーマンスチューニングの勘所 ～ 未踏の速度を目指して～',
                      'description' => <<< 'EOT'
昨今、Webアプリケーションにおいて、速度はとても重要な要素です。
せっかく開発速度はLaravelで超速になったのに、アプリケーションの実行速度はどうですか？
例えばRDBMSが理由でパフォーマンスが劣化したり、チューニングに四苦八苦した経験はありませんか？

キャッシュを利かせたいけど動的ページで困った
夜間の集計batchが終わらない
管理画面の特定のページがめちゃめちゃ重い
これはORMのせいでもPHPのせいでもありません。
Laravelに限らず、データの本質と向き合い、より良い設計と設定を行えばRDBMSは答えてくれます。

今回はそんなRDBMSのパフォーマンスチューニングについてお話します。
EOT
                        ,
                      'speaker' => 'そーだい',
                      'twitter' => 'soudai1025',
                      'avatar' => 'https://pbs.twimg.com/profile_images/2825277737/b1a1a8ab4065e76afc31f17695db1ac2_400x400.png',
                      'place' => '4F',
                      'hash_tag' => 'laraveljpcon4F',
                      'start_at' => '2019-02-16 13:00',
                      'end_at' => '2019-02-16 13:30',
                      'sponsor_id' => $s['id']
                    ]);
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => 'Laravelのデプロイ戦略。VPSからDocker、Kubernates、サーバレスまで',
                      'description' => <<< 'EOT'
ただ自分の書いたコードがいい感じのコストで、いい感じにスケールして動いてくれればいいのです。

本トークでは幅広いデプロイ戦略を紹介し、小規模から大規模に至るまでLaravelを採用する場合のインフラ選定のヒントになってほしいと願っています。

一般的なデプロイ技術選定の話から、[GCP] GKE、GAE [AWS] EKS、Fargate、AWS Lambdaなどでのデプロイについても幅広く紹介を行います。
EOT
                        ,
                      'speaker' => '鶴島 剛 ',
                      'twitter' => 't_tsuru',
                      'avatar' => 'https://fortee.jp/files/laravel-jp-conference-2019/speaker/6803ffdd-860f-4f08-b2ae-5c6d421ebd66.jpg',
                      'place' => '3F',
                      'hash_tag' => 'laraveljpcon3F',
                      'start_at' => '2019-02-16 13:50',
                      'end_at' => '2019-02-16 14:20',
                      'sponsor_id' => $s['id']
                    ]);
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => 'チャットディーラーの高速開発を支える Laravel',
                      'description' => <<< 'EOT'
10年以上PHPでノンフレームワークで開発・運用されてきた主力サービス（メールディーラー）の開発チームが、新規に姉妹サービス（チャットディーラー）を立ち上げる際にLaravelを選択をしました。
開発期間半年というスピードが求められる中で、チームがLaravelに抱いた理想と現実、また、Laravel(Blade)とVue.jsの組み合わせによる脆弱性への対応など、Laravelでの新規サービス立ち上げの経験を具体的にお伝えします。
EOT
                        ,
                      'speaker' => '坂田晃平',
                      'twitter' => '',
                      'avatar' => '',
                      'place' => '3F',
                      'hash_tag' => 'laraveljpcon3F',
                      'start_at' => '2019-02-16 14:40',
                      'end_at' => '2019-02-16 15:10',
                      'sponsor_id' => $s['id']
                    ]);
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => 'Laravelで学ぶ、ウェブアプリケーションチューニングの基本',
                      'description' => <<< 'EOT'
本トークでは、Laravelで作られた基本的なウェブアプリケーションを例に上げて、ウェブアプリケーションのチューニングとはどのようなことをすればよいのか？どのような原因でウェブアプリケーションが遅くなるのかを説明し、その対処法について紹介します。

●このトークでお話すること
- ウェブアプリケーションが遅いとはどういうことか？
- パフォーマンスの計測方法と評価
- 実際のチューニング方法
EOT
                        ,
                      'speaker' => '富所　亮',
                      'twitter' => 'hanhan1978',
                      'avatar' => 'https://fortee.jp/files/laravel-jp-conference-2019/speaker/21f060cd-d141-4183-9ef5-ee751a27b044.jpg',
                      'place' => '4F',
                      'hash_tag' => 'laraveljpcon4F',
                      'start_at' => '2019-02-16 14:40',
                      'end_at' => '2019-02-16 15:10',
                      'sponsor_id' => $s['id']
                    ]);
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => '新卒2年目がLaravelコントリビュート出来た理由とその面白さ',
                      'description' => <<< 'EOT'
新卒2年目、PHP歴1年の私が、Laravelのバグ修正に至った理由・そこで起こったことを話そうと思います。

■対象
・PHP、Laravel初心者の方
・OSSコントリビュート未経験

■内容
・バグ発見のきっかけ
・Laravelのコードを追い方
・コントリビュートして起こったこと
・コントリビュートの面白さ
・新人エンジニアと指導する方に伝えたいこと
EOT
                        ,
                      'speaker' => '小畑 昌紀',
                      'twitter' => 'nyamucoro',
                      'avatar' => 'https://fortee.jp/files/laravel-jp-conference-2019/speaker/b5107a86-57e6-4284-9c1b-d4d5a2f6e99e.jpg',
                      'place' => '3F',
                      'hash_tag' => 'laraveljpcon3F',
                      'start_at' => '2019-02-16 15:30',
                      'end_at' => '2019-02-16 16:00',
                      'sponsor_id' => $s['id']
                    ]);
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => '抽象化って何？',
                      'description' => <<< 'EOT'
「抽象」という言葉に抵抗を感じるプログラマは多くいると思います。抽象的＝フワっとしていて理解しづらいという抵抗や、抽象化＝プログラムを分かりづらくするという抵抗など。では、プログラムを書く上で、抽象化は不要なのでしょうか？
この講演では、私達人間にとっての抽象化と、プログラミングにおける抽象化について掘り下げ、プログラミングにおいて役立つ抽象化がどのようなものなのかをお話します。
EOT
                        ,
                      'speaker' => '後藤 秀宣',
                      'twitter' => 'hidenorigoto',
                      'avatar' => 'https://pbs.twimg.com/profile_images/3497581439/031060c6e2e60d92f43702c71cc3081d_400x400.png',
                      'place' => '4F',
                      'hash_tag' => 'laraveljpcon4F',
                      'start_at' => '2019-02-16 15:30',
                      'end_at' => '2019-02-16 16:00',
                      'sponsor_id' => $s['id']
                    ]);
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => 'PHPでもgRPCサーバを立てたいだけの人生だった',
                      'description' => <<< 'EOT'
Google製のRPCフレームワーク、gRPC。サービス間通信での利用例を側聞しますが、PHP界隈ではあまり耳にしません。通常のリクエストサイクルでgRPCサーバを実現できないためです。曰く、"PHPのgRPCサーバは特殊な構成になるので役立たず"。
ひどい。もうgolangに宗旨替えするしか……？

いや、やってやろうじゃないか、その特殊な構成とやらを。PHPでgRPCサーバの可能性について紹介します。
EOT
                        ,
                      'speaker' => '株式会社Nextat 中榮健二',
                      'twitter' => 'n_1215',
                      'avatar' => 'https://fortee.jp/files/laravel-jp-conference-2019/speaker/66d8d926-4fec-465b-83c4-2ae3b279f649.png',
                      'place' => '4F',
                      'hash_tag' => 'laraveljpcon4F',
                      'start_at' => '2019-02-16 16:20',
                      'end_at' => '2019-02-16 16:50',
                      'sponsor_id' => $s['id']
                    ]);
                    // LT
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => 'LT大会',
                      'description' => <<< 'EOT'
【Kazuya Takei】 今だからこそ作る、Laravel上で動くアクセスカウンター
【ヤマシタ】 未経験者研修で社内研修用システムをざっくり作った話
【ハトヨウコ】 LaravelとVue.jsに出会った私がレガシーな管理サイトを半SPAにするまでの歩み
【平田智子】 Laravel Telescopeにアプリのモニタリングをお任せしてみた
【maki】 Laravel Zeroで楽して情報収集する？
【柴山健吾】 Lighthouseを使って認証必須のGraphQL APIを開発する
【bmf_san】 Laravelで始めるテスト生活
【西澤裕也】 Laravelの公式には載っていないBuilderの使い方
【k-kurikuri】  LaravelSparkでサービス開発に注力する
【加納悠史】 電撃：Laravel API クイズ
EOT
                        ,
                      'speaker' => '',
                      'twitter' => '',
                      'avatar' => '',
                      'place' => '3F会議室',
                      'hash_tag' => 'laraveljpcon3F',
                      'start_at' => '2019-02-16 16:20',
                      'end_at' => '2019-02-16 17:20',
                      'sponsor_id' => $s['id']
                    ]);
                    array_push($inserts, [
                      'uuid' => Uuid::generate()->string,
                      'title' => 'Closing Talk',
                      'description' => <<< 'EOT'
閉会の言葉
EOT
                        ,
                      'speaker' => 'ytake',
                      'twitter' => 'ex_takezawa',
                      'avatar' => 'https://fortee.jp/files/laravel-jp-conference-2019/speaker/67996846-780f-40d5-ab26-5df25f363a4a.jpg',
                      'place' => '3F',
                      'hash_tag' => 'laraveljpcon',
                      'start_at' => '2019-02-16 17:30',
                      'end_at' => '2019-02-16 18:00',
                      'sponsor_id' => $s['id']
                    ]);
                    break;
            }
        }, Sponsor::get(['grade', 'id'])->toArray());
        DB::table('timetables')->insert($inserts);
    }
}
