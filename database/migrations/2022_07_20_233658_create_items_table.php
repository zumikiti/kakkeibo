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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('項目名');
            $table->integer('use_count')->default(0)->nullable()->comment('利用回数');
            $table->integer('color_r')->default(0)->nullable()->comment('色(R)');
            $table->integer('color_g')->default(0)->nullable()->comment('色(G)');
            $table->integer('color_b')->default(0)->nullable()->comment('色(B)');

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
        Schema::dropIfExists('items');
    }
};
