<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->nullable();
            $table->string('alpha2')->unique()->nullable();
            $table->string('alpha3')->unique()->nullable();
            $table->string('country_code')->unique()->nullable();
            $table->string('iso_3166_2')->unique()->nullable();
            $table->string('region')->nullable();
            $table->string('region_code')->nullable();
            $table->string('sub_region')->nullable();
            $table->string('sub_region_code')->nullable();
            $table->string('intermediate_region')->nullable();
            $table->string('intermediate_region_code')->nullable();
            $table->boolean('is_deleted')->default(0);
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
        Schema::dropIfExists('countries');
    }
}
