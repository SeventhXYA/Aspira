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
        Schema::create('interval', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user')->onUpdate('cascade')->onDelete('cascade');

            $table->time('timestart_mb')->nullable();
            $table->time('timestop_mb')->nullable();

            $table->time('timestart_tp')->nullable();
            $table->time('timestop_tp')->nullable();

            $table->time('timestart_bp1')->nullable();
            $table->time('timestop_bp1')->nullable();
            $table->time('timestart_bp2')->nullable();
            $table->time('timestop_bp2')->nullable();
            $table->time('timestart_bp3')->nullable();
            $table->time('timestop_bp3')->nullable();
            $table->time('timestart_bp4')->nullable();
            $table->time('timestop_bp4')->nullable();

            $table->time('timestart_ic')->nullable();
            $table->time('timestop_ic')->nullable();

            $table->time('timestart_sd1')->nullable();
            $table->time('timestop_sd1')->nullable();

            $table->time('timestart_kl')->nullable();
            $table->time('timestop_kl')->nullable();

            $table->time('timestart_bp5')->nullable();
            $table->time('timestop_bp5')->nullable();
            $table->time('timestart_bp6')->nullable();
            $table->time('timestop_bp6')->nullable();
            $table->time('timestart_bp7')->nullable();
            $table->time('timestop_bp7')->nullable();
            $table->time('timestart_bp8')->nullable();
            $table->time('timestop_bp8')->nullable();

            $table->time('timestart_cb')->nullable();
            $table->time('timestop_cb')->nullable();

            $table->time('timestart_ev')->nullable();
            $table->time('timestop_ev')->nullable();

            $table->time('timestart_sd2')->nullable();
            $table->time('timestop_sd2')->nullable();

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
