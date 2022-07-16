<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificateEnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_ens', function (Blueprint $table) {
            $table->id();
            $table->string('grade');
            $table->string('nameInA');
            $table->string('nameInE');
            $table->string('department');
            $table->string('gradeD');
            $table->integer('year');
            $table->string('month');
            $table->string('id_card');
            $table->date('release_date');
            $table->string('release_place');
            $table->date('birth_date');
            $table->string('birth_place');
            $table->string('projectNameInArabic');
            
            $table->boolean('EgyptionOrNot');
            $table->string('img_PreviousCertificateFile');
            $table->string('img_NationalIdFile');
            $table->string('img_PaymentReceipt')->nullable();


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
        Schema::dropIfExists('certificate_ens');
    }
}
