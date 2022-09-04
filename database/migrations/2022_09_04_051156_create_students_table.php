<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('email')->nullable()->index();
            $table->text('description')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('gender')->nullable()->index();
            $table->string('grade')->nullable()->index();
            $table->string('form_class')->nullable();
            $table->date('dob')->nullable();
            $table->string('status')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('school_id')->nullable();
            $table->string('slug')->nullable()->unique();
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
        Schema::dropIfExists('students');
    }
}
