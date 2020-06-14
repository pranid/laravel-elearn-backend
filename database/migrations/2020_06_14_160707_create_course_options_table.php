<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_options', function (Blueprint $table) {
            $table->id();
            $table->string('name',150);
            $table->tinyInteger('status')->default(1);
            $table->unsignedInteger('course_category_id');
            $table->timestamps();

            $table->foreign('course_category_id')->references('id')->on('course_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_options');
    }
}
