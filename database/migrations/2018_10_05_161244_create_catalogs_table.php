<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogs', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->string('name')->nullable();
            $table->string('acronym')->nullable();
            $table->text('description')->nullable();
            $table->string('url') ->nullable();
            $table->string('type') ->nullable();
            $table->string('languagesupported') ->nullable();
            $table->string('periodicity') ->nullable();
            $table->string('economycoverage') ->nullable();
            $table->string('granularity') ->nullable();
            $table->integer('numberofeconomies') ->nullable();
            $table->text('topics') ->nullable();
            $table->string('updatefrequency') ->nullable();
            $table->string('updateschedule') ->nullable();
            $table->string('lastrevisiondate')->nullable();
            $table->string('contactdetails') ->nullable();
            $table->string('accessoption')->nullable();
            $table->text('bulkdownload')->nullable();
            $table->string('cite')->nullable();
            $table->string('detailpageurl')->nullable();
            $table->string('popularity')->nullable();
            $table->string('coverage')->nullable();
            $table->string('datanotes')->nullable();
            $table->string('api')->nullable();
            $table->string('apiaccessurl')->nullable();
            $table->string('apisourceid')->nullable();
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
        Schema::dropIfExists('catalogs');
    }
}
