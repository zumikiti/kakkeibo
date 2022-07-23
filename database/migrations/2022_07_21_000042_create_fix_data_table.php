<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fix_data', function (Blueprint $table) {
            $table->id();
            $table->integer('item_id')->nullable()->comment('項目ID');
            $table->enum('budget_type', ['収入', '支出'])->nullable()->comment('収支区分');
            $table->smallInteger('day')->nullable()->comment('日付');
            $table->integer('price')->nullable()->comment('区分');
            $table->string('remarks')->nullable()->comment('メモ');
            $table->smallInteger('interval_month')->nullable()->comment('反映間隔(月)');

            $table->integer('created_user_id')->nullable();
            $table->integer('updated_user_id')->nullable();
            $table->integer('deleted_user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fix_data');
    }
};
