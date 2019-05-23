<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstName',50)->nullable();
            $table->string('lastName',100)->nullable();
            $table->string('gender')->default('male');
            $table->date('birth')->nullable();
            $table->unsignedSmallInteger('function_id')->index()->nullable();
            $table->unsignedSmallInteger('account_id')->index()->nullable();
            $table->string('address')->nullable();
            $table->unsignedSmallInteger('contact_id')->index()->nullable();
            $table->string('picture')->nullable();
            $table->mediumText('description')->nullable();
            $table->unsignedInteger('user_id')->index();
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
        Schema::dropIfExists('profiles');
    }
}
