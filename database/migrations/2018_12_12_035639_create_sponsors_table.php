<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grade')->comment('位 ex: Gold');
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
        Schema::dropIfExists('sponsors');
    }
}
