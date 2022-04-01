<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('dob')->nullable();
            $table->string('address')->nullable();
            $table->string('genda')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->foreignId('class_Id')->nullable();
            $table->foreignId('session_Id')->nullable();
            $table->foreignId('level_Id')->nullable();
            $table->foreignId('grade_Id')->nullable();
            $table->boolean('status')->default(1);
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('admissions');
    }
}
