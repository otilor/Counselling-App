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
            $table->foreign('counsellor')->references('counsellor')->on('applications')->onUpdate('restrict')->onDelete('cascade');
            $table->tinyInteger('status')->default(0);
            $table->foreign('status')->references('application_status')->on('applications')->onUpdate('cascade')->onDelete('cascade');
            $table->json('application_details');
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
