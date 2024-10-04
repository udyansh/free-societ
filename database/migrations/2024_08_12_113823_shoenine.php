<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Shoenine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoenines', function (Blueprint $table) {
            $table->id();
            $table->string('texts', 500); // Creates a 'details' column with a max length of 500 characters
            $table->string('textstwo', 500); // Creates a 'details' column with a max length of 500 characters
            $table->string('textsthree', 500); // Creates a 'details' column with a max length of 500 characters
            $table->string('image', 500); // Creates an 'image' column with a max length of 500 characters
            $table->string('imagetwo', 500); // Creates an 'image' column with a max length of 500 characters
            $table->string('imagethree', 500); // Creates an 'image' column with a max length of 500 characters
            $table->string('imagefour', 500); // Creates an 'image' column with a max length of 500 characters
            $table->string('links', 500); 
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
        //
    }
}
