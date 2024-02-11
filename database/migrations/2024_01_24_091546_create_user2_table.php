<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUser2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user2', function (Blueprint $table) {
            $table->id('id'); // Remove the parameter from id method
            $table->string('city', 255);
            $table->enum('class', ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12']);
            $table->enum('section', ['A', 'B', 'C']);
            $table->enum('Role', ["user", "teacher", "admin", "student", "admission"]);
            $table->enum('subject', ['physics', 'chemistry', 'maths']);
            $table->string('country', 255);
            $table->string('password', 255);

            $table->integer('rollno'); // Remove the second argument from integer method
            $table->string('name', 255);
            $table->string('email', 100);
            $table->string('userimage', 255);
            $table->timestamps(); // You may want to include timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user2');
    }
}
