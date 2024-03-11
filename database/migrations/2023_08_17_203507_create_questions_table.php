<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained('users')->onDelete('cascade')->update('cascade');
            $table->string('question');
            $table->string('term');
            $table->string('classname');
            $table->string('duration')->nullable();
            $table->string('renew')->nullable();
            $table->string('status')->nullable();
            $table->string('subject_code')->nullable();
            $table->string('images')->nullable();
            $table->string('centername')->nullable();
            $table->string('subjectname');
            $table->text('option1')->default('0')->nullable();
            $table->text('option2')->default('0')->nullable();
            $table->text('option3')->default('0')->nullable();
            $table->text('is_correct')->default('0')->nullable();
            $table->string('opionitems')->nullable();
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
        Schema::dropIfExists('questions');
    }
};
