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
        Schema::create('intervalkl', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user')->onUpdate('cascade')->onDelete('cascade');
            $table->time('timestart_kl');
            $table->time('timestop_kl');
            // $table->string('timestart_kl');
            // $table->string('timestop_kl');
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
        Schema::dropIfExists('intervalkl');
    }
};
