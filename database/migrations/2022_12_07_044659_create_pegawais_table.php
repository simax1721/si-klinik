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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nip');
            $table->string('name');
            $table->string('jk', 10);
            $table->string('tmp_lahir', 50);
            $table->date('tgl_lahir');
            $table->unsignedInteger('dataagamas_id');
            $table->string('no_hp', 12);
            $table->string('email');
            $table->text('alamat');
            $table->date('tgl_masuk');
            $table->unsignedInteger('userroles_id');
            $table->string('password');
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
        Schema::dropIfExists('pegawais');
    }
};
