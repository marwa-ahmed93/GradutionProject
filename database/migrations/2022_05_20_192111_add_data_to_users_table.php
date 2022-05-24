<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDataToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('code')->nullable();
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('img')->nullable();
            $table->enum('gender',['famele','male'])->nullable();
            $table->enum('role',['student','professor','employee'])->nullable();
            $table->string('phone')->nullable();
            $table->string('birthDate')->nullable();
            $table->enum('socialState',['single','maried'])->nullable();
            $table->string('city')->nullable();
            $table->string('identityNumder')->nullable();
            $table->string('identityType')->nullable();
            $table->boolean('isBlocked')->nullable();
            $table->boolean('isActive')->nullable();
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
            //
        });
    }
}
