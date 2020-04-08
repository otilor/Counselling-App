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
            $table->increments('id');
            $table->string('counsellor');
            $table->foreign('counsellor')->references('email')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('application_details');
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
        Schema::dropIfExists('counsellors');
    }
}
