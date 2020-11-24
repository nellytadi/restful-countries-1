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
            $table->string("name");
            $table->bigInteger("population")->nullable();
            $table->string("president")->nullable();
            $table->string("full_name")->nullable();
            $table->text("description")->nullable();
            $table->string("nick_name")->nullable();
            $table->string("flag")->nullable();
            $table->string("currency")->nullable();
            $table->string("iso2")->nullable();
            $table->string("iso3")->nullable();
            $table->string("code")->nullable();
            $table->string("capital")->nullable();
            $table->string("official_language")->nullable();
            $table->string("continent")->nullable();
            $table->string("region")->nullable();
            $table->string("size")->nullable();
            $table->date("national_holiday")->nullable();
            $table->date("independence_date")->nullable();
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
