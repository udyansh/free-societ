<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClothingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clothing', function (Blueprint $table) {
            
            $table->id(); // Creates an auto-incrementing primary key field named 'id'
            $table->string('texts', 500); // Creates a 'details' column with a max length of 500 characters
            $table->string('textstwo', 500); // Creates a 'details' column with a max length of 500 characters
            $table->string('textsthree', 500); // Creates a 'details' column with a max length of 500 characters
            $table->string('image', 500); // Creates an 'image' column with a max length of 500 characters
            $table->string('links', 500); // Creates an 'image' column with a max length of 500 characters
            $table->timestamps(); // Creates 'created_at' and 'updated_at' timestamp columns
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clothing');
    }
}
