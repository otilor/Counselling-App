<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Application extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('application_token');
            $table->string('appointment_date');
            $table->mediumText('personal_message');
            $table->tinyInteger('application_status')->index()->default(0);
            $table->unsignedBigInteger('counsellor_id');
            $table->timestamps();

            $table->foreign('counsellor_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
