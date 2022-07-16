<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrimaryDesiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('primary_desiers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('national_id');
            $table->integer('seat_number');
            // $table->enum('first_desire',['System & Computer Engineering','Electrical Engineering' ,
            // 'Architecture Engineering' , 'Urban Planning Engineering']);

            // $table->enum('second_desire',['System & Computer Engineering','Electrical Engineering' ,
            // 'Architecture Engineering' , 'Urban Planning Engineering']);

            // $table->enum('third_desire',['System & Computer Engineering','Electrical Engineering' ,
            // 'Architecture Engineering' , 'Urban Planning Engineering']);

            // $table->enum('fourth_desire',['System & Computer Engineering','Electrical Engineering' ,
            // 'Architecture Engineering' , 'Urban Planning Engineering']);
            $table->string('first_desire');
            $table->string('second_desire');
            $table->string('third_desire');
            $table->string('fourth_desire');

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
        Schema::dropIfExists('primary_desiers');
    }
}
