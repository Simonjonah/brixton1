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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('fname')->nullable();
            $table->string('surname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('classname')->nullable();
            $table->string('centername')->nullable();
            $table->string('clubname')->nullable();
            $table->string('section')->nullable();
            $table->string('slug')->nullable();
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            
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
        Schema::dropIfExists('clubs');
    }
};
