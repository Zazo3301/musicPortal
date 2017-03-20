<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *  // TO DO : Fix the migrations [x]
        //         Set the relations with foreign keys []
                   Save all data into the doc file for review [ ]
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',30);
            $table->string('password');
            $table->string('full_name');
            $table->string('email');
            $table->string('role');
            $table->date('timestamps');
            $table->int('lyrics_uploaded');

        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('description');
    }
}
