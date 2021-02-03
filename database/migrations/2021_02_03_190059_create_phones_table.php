<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->id();
            $table->integer('commercial_phone')->unique();
            $table->integer('home_phone')->unique();
            $table->integer('cell_phone')->unique();
            $table->unsignedBigInteger('contact_id')->index();
            $table->foreign('contact_id')
            ->references('id')
            ->on('contacts')
            ->onDelete('cascade');
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
        Schema::dropIfExists('phones');
    }
}
