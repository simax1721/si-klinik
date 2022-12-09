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
        Schema::create('skkerjas', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('pegawais_id');
            $table->unsignedInteger('dataprofesis_id');
            $table->unsignedInteger('datapangkats_id');
            $table->string('status_sk');
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
        Schema::dropIfExists('skkerjas');
    }
};
