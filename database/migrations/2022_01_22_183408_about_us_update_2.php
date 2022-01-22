<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AboutUsUpdate2 extends Migration
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
            $table->string('title')->nullable();
            $table->string('title_ar')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('sub_title_ar')->nullable();
            $table->text('why_cheose_us')->nullable();
            $table->text('why_cheose_us_ar')->nullable();
            $table->text('our_mission')->nullable();
            $table->text('our_mission_ar')->nullable();
            $table->text('our_vision')->nullable();
            $table->text('our_vision_ar')->nullable();
            $table->text('our_strategy')->nullable();
            $table->text('our_strategy_ar')->nullable();
            $table->string('our_strategy_image')->nullable();
            $table->text('our_values')->nullable();
            $table->text('our_values_ar')->nullable();
            $table->string('our_values_image')->nullable();
            $table->string('main_image')->nullable();

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
