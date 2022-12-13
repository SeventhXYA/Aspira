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
        Schema::create('intervalsd', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user')->onUpdate('cascade')->onDelete('cascade');
            $table->time('timestart_sd1');
            $table->time('timestop_sd1');
            $table->time('timestart_sd2');
            $table->time('timestop_sd2');
            // $table->string('timestart_sd1');
            // $table->string('timestop_sd1');
            // $table->string('timestart_sd2');
            // $table->string('timestop_sd2');
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
        Schema::dropIfExists('intervalsd');
    }
};
