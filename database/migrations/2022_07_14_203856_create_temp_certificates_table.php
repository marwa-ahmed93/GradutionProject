<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempCertificatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_certificates', function (Blueprint $table) {
            $table->id();
            $table->string('nameInA');
            $table->string('nameInE');
            $table->string('department');
            $table->string('grade');
            $table->integer('year');
            $table->string('month');
            $table->string('id_card');
            $table->date('release_date');
            $table->string('release_place');
            $table->date('birth_date');
            $table->string('birth_place');
            $table->string('projectNameInArabic');
            $table->string('projectNameInE');
            $table->string('phone_number');
            $table->integer('certificate_number');

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
        Schema::dropIfExists('temp_certificates');
    }
}
