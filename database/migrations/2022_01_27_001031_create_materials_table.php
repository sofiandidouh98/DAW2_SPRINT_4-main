<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('brand', 50);
            $table->text('description');
            $table->float('price', 8, 2);
            $table->string('code')->unique();
            $table->string('bar_code')->unique();
            $table->string('qr_code')->unique();
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
        Schema::dropIfExists('materials');
        Schema::enableForeignKeyConstraints();
    }
}
