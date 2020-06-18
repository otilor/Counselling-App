<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCounsellorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counsellors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('counsellor');
            $table->json('application_details');
            $table->unsignedBigInteger('counsellor_id');
            $table->timestamps();

            $table->foreign('counsellor_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('counsellors');
    }
}
