<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFireExtinguishersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fire_extinguishers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('location');
            $table->date('expiry_date');
            $table->string('serial_numbers');
            $table->string('type');
            $table->float('weight');
            $table->string('brand');
            $table->timestamps();
            $table->foreign('location')
                ->references('id')
                ->on('branches')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fire_extinguishers');
    }
}
