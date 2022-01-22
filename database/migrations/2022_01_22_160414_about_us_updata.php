<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AboutUsUpdata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('about_us');
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('main_image');
            $table->string('sub_title');
            $table->text('why_cheose_us');
            $table->text('our_mission');
            $table->text('our_vision');
            $table->text('our_strategy');
            $table->string('our_strategy_image');
            $table->text('our_values');
            $table->string('our_values_image');

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
        //
    }
}
