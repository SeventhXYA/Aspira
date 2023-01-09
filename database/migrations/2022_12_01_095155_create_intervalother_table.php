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
        Schema::create('intervalother', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user')->onUpdate('cascade')->onDelete('cascade');
            $table->time('timestart_mb')->nullable();
            $table->time('timestop_mb')->nullable();
            $table->time('timestart_tp')->nullable();
            $table->time('timestop_tp')->nullable();
            $table->time('timestart_cb')->nullable();
            $table->time('timestop_cb')->nullable();
            $table->time('timestart_ev')->nullable();
            $table->time('timestop_ev')->nullable();
            // $table->string('timestart_mb');
            // $table->string('timestop_mb');
            // $table->string('timestart_tp');
            // $table->string('timestop_tp');
            // $table->string('timestart_cb');
            // $table->string('timestop_cb');
            // $table->string('timestart_ev');
            // $table->string('timestop_ev');
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
        Schema::dropIfExists('intervalother');
    }
};
