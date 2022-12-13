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
        Schema::create('intervalbp', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user')->onUpdate('cascade')->onDelete('cascade');
            $table->time('timestart_bp1');
            $table->time('timestop_bp1');
            $table->time('timestart_bp2');
            $table->time('timestop_bp2');
            $table->time('timestart_bp3');
            $table->time('timestop_bp3');
            $table->time('timestart_bp4');
            $table->time('timestop_bp4');
            $table->time('timestart_bp5');
            $table->time('timestop_bp5');
            $table->time('timestart_bp6');
            $table->time('timestop_bp6');
            $table->time('timestart_bp7');
            $table->time('timestop_bp7');
            $table->time('timestart_bp8');
            $table->time('timestop_bp8');
            // $table->string('timestart_bp1');
            // $table->string('timestop_bp1');
            // $table->string('timestart_bp2');
            // $table->string('timestop_bp2');
            // $table->string('timestart_bp3');
            // $table->string('timestop_bp3');
            // $table->string('timestart_bp4');
            // $table->string('timestop_bp4');
            // $table->string('timestart_bp5');
            // $table->string('timestop_bp5');
            // $table->string('timestart_bp6');
            // $table->string('timestop_bp6');
            // $table->string('timestart_bp7');
            // $table->string('timestop_bp7');
            // $table->string('timestart_bp8');
            // $table->string('timestop_bp8');
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
        Schema::dropIfExists('intervalbp');
    }
};
