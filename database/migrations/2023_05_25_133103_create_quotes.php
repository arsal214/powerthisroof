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
        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->string('property_type')->nullable();
            $table->string('home_type')->nullable();
            $table->string('bill')->nullable();
            $table->string('address_input')->nullable();
            $table->string('address_latitude')->nullable();
            $table->string('address_longitude')->nullable();
            $table->string('home_age')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('number')->nullable();
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
        Schema::dropIfExists('quotes');
    }
};
