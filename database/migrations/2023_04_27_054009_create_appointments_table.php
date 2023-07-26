<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('clientId');
            $table->string('clientName',30);
            $table->string('clientEmail',30);
            $table->string('clientPhone',30);
            $table->string('counselorName', 30);
            $table->date('appointmentDate');
            $table->string('appointmentTime',30);
            $table->string('counselingType',30);
            $table->longtext('clientNote')->nullable(true);
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
        Schema::dropIfExists('appointments');
    }
};
