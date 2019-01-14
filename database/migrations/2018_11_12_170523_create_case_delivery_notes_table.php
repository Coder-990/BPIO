<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseDeliveryNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_delivery_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name')->default('CPU');
            $table->integer('amount')->default(1);
            $table->string('UOM');
            $table->unsignedInteger('delivery_note_id');
            $table->foreign('delivery_note_id')->references('id')->on('delivery_notes');
            $table->unsignedInteger('good_id');
            $table->foreign('good_id')->references('id')->on('goods');
            $table->timestamps();
          //  $table->foreign('case_delivery_notes_id')->references('id')->on('case_delivery_notes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('case_delivery_notes');
    }
}
