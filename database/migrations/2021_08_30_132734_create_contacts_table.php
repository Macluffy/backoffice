<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('location',100);
            $table->string('locationR',100);
            $table->string('email',100);
            $table->string('emailR',100);
            $table->string('call',100);
            $table->string('callR',100);
            $table->string('yname',100);
            $table->string('yemail',100);
            $table->string('subject',100);
            $table->string('message',100);
            $table->string('smessage',100);
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
        Schema::dropIfExists('contacts');
    }
}
