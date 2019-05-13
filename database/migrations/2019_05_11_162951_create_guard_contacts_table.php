<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuardContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guard_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('subject');
            $table->mediumText('message');
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
        Schema::dropIfExists('guard_contacts');
    }
}
