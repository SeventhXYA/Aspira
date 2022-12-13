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
            $table->string('name', 50);
            $table->foreignId('gender_id')->constrained('gender')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('divisi_id')->constrained('divisi')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nohp', 15);
            $table->string('username', 50)->unique();
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->foreignId('level_id')->constrained('level')->onUpdate('cascade')->onDelete('cascade');
            $table->text('address');
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
