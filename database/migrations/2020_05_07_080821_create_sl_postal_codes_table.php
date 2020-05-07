<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlPostalCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sl_postal_codes', function (Blueprint $table) {
            $table->id();
            $table->string('postal_code',8)->unique();
            $table->string('city',30);
            $table->string('district',30);
            $table->string('province',30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sl_postal_codes');
    }
}
