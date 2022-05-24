<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number', 20);
            $table->string('address', 100);
            $table->text('description');
            $table->string('website');
            $table->string('twitter_account');
            $table->string('github_account');
            $table->string('instragram_account');
            $table->string('facebook_account');
            $table->string('avatar')-> default('../recursos/imatges/user_default_image.jpg');
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
        Schema::dropIfExists('user_profiles');
        Schema::enableForeignKeyConstraints();
    }
}
