<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machines', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('brand', 50);
            $table->string('model', 50);
            $table->text('description');
            $table->float('price', 8, 2)->nullable();
            $table->string('serial_number')->unique()->nullable();
            $table->string('bar_code')->unique()->nullable();
            $table->string('qr_code')->unique()->nullable();
            $table->timestamp('starting_date')->nullable();
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('machines');
        Schema::enableForeignKeyConstraints();
    }
}
