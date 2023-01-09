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
            $table->string('pict')->nullable();
            $table->string('firstname', 50);
            $table->string('lastname', 50)->nullable();
            $table->foreignId('gender_id')->constrained('gender')->onUpdate('cascade')->onDelete('cascade');
            $table->string('tempatlahir', 50);
            $table->string('tanggallahir', 2);
            $table->foreignId('bulan_id')->constrained('bulan')->onUpdate('cascade')->onDelete('cascade');
            $table->string('tahunlahir', 4);
            $table->string('nohp', 15);
            $table->string('email', 100)->unique();
            $table->text('address');
            $table->foreignId('divisi_id')->constrained('divisi')->onUpdate('cascade')->onDelete('cascade');
            // $table->foreignId('userdata_id')->constrained('userdata')->onUpdate('cascade')->onDelete('cascade');
            $table->string('username', 50)->unique();
            $table->string('password');
            $table->foreignId('level_id')->constrained('level')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamp('last_login_at')->nullable();
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
