<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name', 500); // Creates a 'details' column with a max length of 500 characters
            $table->string('address', 500); // Creates a 'details' column with a max length of 500 characters
            $table->string('email', 500); // Creates a 'details' column with a max length of 500 characters
            $table->string('phone', 500); // Creates an 'image' column with a max length of 500 characters
        
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
