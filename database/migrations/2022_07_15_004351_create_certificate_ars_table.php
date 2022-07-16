<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateArsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_ars', function (Blueprint $table) {
            $table->id();

            $table->string('grade');
            $table->string('nameInA');
            $table->string('department');
            $table->string('gradeD');
            $table->integer('year');
            $table->string('month');
            $table->boolean('changeNameOrNot');
            $table->boolean('EgyptionOrNot');
            $table->string('img_PreviousCertificateFile');
            $table->string('img_NationalIdFile');
            $table->string('img_PaymentReceipt');
     
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
        Schema::dropIfExists('certificate_ars');
    }
}
