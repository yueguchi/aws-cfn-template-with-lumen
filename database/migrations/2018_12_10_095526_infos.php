<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Infos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->unique()->comment('イベントタイトル');
            $table->string('description')->comment('説明');
            $table->string('zip')->unique()->comment('zip');
            $table->string('address1')->comment('住所');
            $table->string('address2')->nullable()->comment('住所');
            $table->string('place')->nullable()->comment('開催施設');
            $table->string('organizer')->comment('主催');
            $table->string('hash_tag')->nullable()->comment('hash_tag');
            $table->timestampTz('start_at')->nullable()->comment('開催日付');
            $table->timestampTz('end_at')->nullable()->comment('終了日付');
            $table->timestampTz('created_at')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('作成日付。デフォルトで現在日時が入る');
            $table->timestampTz('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('更新日付。デフォルトで現在日付が入る');
            $table->timestampTz('deleted_at')->nullable()->comment('削除日付');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infos');
    }
}
