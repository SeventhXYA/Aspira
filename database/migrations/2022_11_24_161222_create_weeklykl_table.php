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
        Schema::create('weeklykl', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user')->onUpdate('cascade')->onDelete('cascade');
            $table->string('plan1');
            $table->text('evaluate_plan1');
            $table->integer('progress_plan1');
            $table->string('plan2');
            $table->text('evaluate_plan2');
            $table->integer('progress_plan2');
            $table->string('plan3');
            $table->text('evaluate_plan3');
            $table->integer('progress_plan3');
            $table->string('plan4');
            $table->text('evaluate_plan4');
            $table->integer('progress_plan4');
            $table->string('plan5');
            $table->text('evaluate_plan5');
            $table->integer('progress_plan5');
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
        Schema::dropIfExists('weeklykl');
    }
};
