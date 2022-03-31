<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassRoutingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_routings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('level_Id')->nullable();
            $table->foreignId('grade_Id')->nullable();
            $table->foreignId('class_Id')->nullable();
            $table->foreignId('subject_Id')->nullable();
            $table->foreignId('session_Id')->nullable();
            $table->foreignId('day_Id')->nullable();
            $table->foreignId('shift_Id')->nullable();
            $table->foreignId('time_Id')->nullable();
            $table->foreignId('section_Id')->nullable();
            $table->foreignId('user_Id')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('class_routings');
    }
}
