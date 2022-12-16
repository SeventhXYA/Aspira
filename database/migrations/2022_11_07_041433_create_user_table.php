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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('pict');
            $table->string('firstname', 50)->nullable();
            $table->string('lastname', 50)->nullable();
            $table->foreignId('gender_id')->constrained('gender')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->string('tempatlahir', 50)->nullable();
            $table->string('tanggallahir', 2)->nullable();
            $table->foreignId('bulan_id')->constrained('bulan')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->string('tahunlahir', 4)->nullable();
            $table->string('nohp', 15)->nullable();
            $table->string('email', 100)->unique()->nullable();
            $table->text('address')->nullable();
            $table->foreignId('divisi_id')->constrained('divisi')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->string('username', 50)->unique()->nullable();
            $table->string('password')->nullable();
            $table->foreignId('level_id')->constrained('level')->onUpdate('cascade')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('user');
    }
};
