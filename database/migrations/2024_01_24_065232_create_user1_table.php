<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUser1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user1', function (Blueprint $table) {
            $table->id(); // This will create an auto-incrementing primary key named 'id'
            $table->string('city', 255);
            $table->enum('class', ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12']);
            $table->enum('section', ['A', 'B', 'C']);
            $table->enum('Role', ["user", "teacher", "admin", "student", "admission"]);
            $table->enum('subject', ['physics', 'chemistry', 'maths']);
            $table->string('country', 255);
            $table->string('password', 255);

            $table->integer('rollno')->unique(); // Make 'rollno' unique if it should be unique
            $table->string('name', 255);
            $table->string('email', 100);
            $table->string('userimage', 255);
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
        Schema::dropIfExists('user1');
    }
}
