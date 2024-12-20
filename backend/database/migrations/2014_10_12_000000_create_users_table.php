<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); 
            $table->string('first_name', 255); 
            $table->string('last_name', 255); 
            $table->string('email', 100)->unique();
            $table->string('password'); 
            $table->string('profile_picture')->nullable(); 
            $table->text('bio')->nullable(); 
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
        Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('profile_picture');
         });
    }

}