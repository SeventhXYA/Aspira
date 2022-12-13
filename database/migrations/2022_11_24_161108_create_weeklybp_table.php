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
        Schema::create('weeklybp', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user')->onUpdate('cascade')->onDelete('cascade');
            $table->string('plan1');
            $table->integer('progress_plan1');
            $table->string('plan2')->nullable();
            $table->integer('progress_plan2')->nullable();
            $table->string('plan3')->nullable();
            $table->integer('progress_plan3')->nullable();
            $table->string('plan4')->nullable();
            $table->integer('progress_plan4')->nullable();
            $table->string('plan5')->nullable();
            $table->integer('progress_plan5')->nullable();
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
        Schema::dropIfExists('weeklybp');
    }
};
