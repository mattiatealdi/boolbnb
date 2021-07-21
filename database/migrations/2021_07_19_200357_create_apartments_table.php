<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->boolean('visible');
            $table->string('image');
            $table->tinyInteger('guest_number');
            $table->tinyInteger('rooms');
            $table->float('nightly_price',6,2);
            $table->tinyInteger('bed_number');
            $table->tinyInteger('bathroom_number');
            $table->smallInteger('square_meters');
            $table->text('description');
            $table->string('country',50);
            $table->string('city',50);
            $table->string('address',50);
            $table->string('postal_code',10);
            $table->string('longitude',50);
            $table->string('latitude',50);
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
        Schema::dropIfExists('apartments');
    }
}
