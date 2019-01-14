<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseAccesionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_accesions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name')->default('CPU');
            $table->integer('amount')->default(1);
            $table->string('UOM');
            $table->unsignedInteger('accesion_id');
            $table->foreign('accesion_id')->references('id')->on('accesions');
            $table->unsignedInteger('good_id');
            $table->foreign('good_id')->references('id')->on('goods');
            $table->timestamps();
          //  $table->foreign('case_accesions_id')->references('id')->on('case_accesions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('case_accesions');
    }
}
