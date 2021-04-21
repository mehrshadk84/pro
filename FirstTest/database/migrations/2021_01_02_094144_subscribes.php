<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Subscribes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribes', function (Blueprint $table) {
            $table->increments('subscribe_id');
            $table->integer('subscribe_user_id');
            $table->integer('subscrube_plan_id');
            $table->integer('subscribe_download_limit');
            $table->integer('subscribe_download_count');
            $table->dateTime('subscribe_created_at');
            $table->dateTime('subscribe_payment_expired_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscribes');
    }
}
