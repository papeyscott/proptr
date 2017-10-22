<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('title');
            $table->text('description');
            $table->string('country');
            $table->string('state');
            $table->string('county');
            $table->text('address');
            $table->string('property_status');
            $table->string('type_of_property');
            $table->string('year_of_construction');
            $table->string('contract_type');
            $table->integer('amount');
            $table->string('cost');
            $table->string('behaviour');
            $table->string('basic_features');
            $table->string('internal_features');
            $table->string('external_features');
            $table->string('environment_features');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('properties');
    }
}
