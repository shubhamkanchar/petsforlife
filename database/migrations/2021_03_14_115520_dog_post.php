<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DogPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dog_post', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('kci');
            $table->string('pet_breed')->nullable();
            $table->string('price')->nullable();
            $table->string('mob')->nullable();
            $table->string('dob')->nullable();
            $table->string('des')->nullable();
            $table->string('filename')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('available_puppies');
            $table->string('approved');
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
        Schema::dropIfExists('failed_jobs');
    }
}
