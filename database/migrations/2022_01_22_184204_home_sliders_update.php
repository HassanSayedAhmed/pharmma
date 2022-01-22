<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HomeSlidersUpdate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('home_sliders');

        Schema::create('home_sliders', function (Blueprint $table) {
            $table->id();
            $table->string('top_title')->nullable();
            $table->string('top_title_ar')->nullable();
            $table->string('title')->nullable();
            $table->string('title_ar')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('sub_title_ar')->nullable();
            $table->string('image')->nullable();

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
