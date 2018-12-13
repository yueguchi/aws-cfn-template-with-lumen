<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uuid')->comment('フロント専用のUUID'); // フロント用の一意でランダムな文字列
            $table->string('title')->comment('タイトル');
            $table->string('description')->comment('説明');
            $table->string('speaker')->comment('スピーカー');
            $table->string('twitter')->comment('Twitter account');
            $table->string('place')->nullable()->comment('場所');
            $table->string('hash_tag')->nullable()->comment('hash_tag');
            $table->timestampTz('start_at')->nullable()->comment('開催日時');
            $table->timestampTz('end_at')->nullable()->comment('終了日時');
            $table->integer('sponsor_id')->unsigned()->comment('id@sponsorsとの外部キー');
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
        Schema::dropIfExists('timetables');
    }
}
