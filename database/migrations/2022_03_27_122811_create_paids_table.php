<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paids', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('amount');
            $table->datetime('paid_date');
            $table->unsignedBigInteger('loans_id');
            $table->foreign('loans_id')->references('id')->on('loans')->onDelete('cascade');
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
        Schema::dropIfExists('paids');
    }
}
