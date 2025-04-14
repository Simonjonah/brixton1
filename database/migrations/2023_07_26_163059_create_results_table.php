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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained('users')->onDelete('cascade')->update('cascade');
            $table->string('teacher_id', 11)->nullable();
            $table->string('ref_no', 20)->nullable();
            $table->string('surname', 50)->nullable();
            $table->string('middlename', 50)->nullable();
            $table->string('fname', 50)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('section', 50)->nullable();
            $table->string('academic_session', 15)->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('centername', 20)->nullable();
            $table->string('classname', 20)->nullable();
            $table->text('images')->nullable();
            $table->string('status', 12)->nullable();
            $table->string('entrylevel', 30)->nullable();
            $table->string('regnumber', 30)->nullable();
            
            $table->string('subjectname', 30);
            $table->string('test_1', 5)->nullable();
            $table->string('test_2', 5)->nullable();
            $table->string('test_3', 5)->nullable();
            $table->string('exams', 5)->nullable();
            $table->string('category', 20)->nullable();
            

            $table->string('exp', 5)->nullable();
            $table->string('pra', 5)->nullable();
            $table->string('app', 5)->nullable();
           
            $table->string('punt1', 5)->nullable();
            $table->string('punt2', 5)->nullable();
            $table->string('punt3', 5)->nullable();
            $table->string('punt4', 5)->nullable();
            $table->string('punt5', 5)->nullable();

            $table->string('respect1', 5)->nullable();
            $table->string('respect2', 5)->nullable();
            $table->string('respect3', 5)->nullable();
            $table->string('respect4', 5)->nullable();
            $table->string('respect5', 5)->nullable();


            $table->string('neat1', 5)->nullable();
            $table->string('neat2', 5)->nullable();
            $table->string('neat3', 5)->nullable();
            $table->string('neat4', 5)->nullable();
            $table->string('neat5', 5)->nullable();

            $table->string('polite1', 5)->nullable();
            $table->string('polite2', 5)->nullable();
            $table->string('polite3', 5)->nullable();
            $table->string('polite4', 5)->nullable();
            $table->string('polite5', 5)->nullable();

            $table->string('honesty1', 5)->nullable();
            $table->string('honesty2', 5)->nullable();
            $table->string('honesty3', 5)->nullable();
            $table->string('honesty4', 5)->nullable();
            $table->string('honesty5', 5)->nullable();


            $table->string('relationship1', 5)->nullable();
            $table->string('relationship2', 5)->nullable();
            $table->string('relationship3', 5)->nullable();
            $table->string('relationship4', 5)->nullable();
            $table->string('relationship5', 5)->nullable();


            $table->string('williness1', 5)->nullable();
            $table->string('williness2', 5)->nullable();
            $table->string('williness3', 5)->nullable();
            $table->string('williness4', 5)->nullable();
            $table->string('williness5', 5)->nullable();

            $table->string('teamspirit1', 5)->nullable();
            $table->string('teamspirit2', 5)->nullable();
            $table->string('teamspirit3', 5)->nullable();
            $table->string('teamspirit4', 5)->nullable();
            $table->string('teamspirit5', 5)->nullable();

            $table->string('verbal1', 5)->nullable();
            $table->string('verbal2', 5)->nullable();
            $table->string('verbal3', 5)->nullable();
            $table->string('verbal4', 5)->nullable();
            $table->string('verbal5', 5)->nullable();

            $table->string('sports1', 5)->nullable();
            $table->string('sports2', 5)->nullable();
            $table->string('sports3', 5)->nullable();
            $table->string('sports4', 5)->nullable();
            $table->string('sports5', 5)->nullable();


            $table->string('arts1', 5)->nullable();
            $table->string('arts2', 5)->nullable();
            $table->string('arts3', 5)->nullable();
            $table->string('arts4', 5)->nullable();
            $table->string('arts5', 5)->nullable();

            $table->string('creativity1', 5)->nullable();
            $table->string('creativity2', 5)->nullable();
            $table->string('creativity3', 5)->nullable();
            $table->string('creativity4', 5)->nullable();
            $table->string('creativity5', 5)->nullable();

            $table->string('music1', 5)->nullable();
            $table->string('music2', 5)->nullable();
            $table->string('music3', 5)->nullable();
            $table->string('music4', 5)->nullable();
            $table->string('music5', 5)->nullable();


            $table->string('dance1', 5)->nullable();
            $table->string('dance2', 5)->nullable();
            $table->string('dance3', 5)->nullable();
            $table->string('dance4', 5)->nullable();
            $table->string('dance5', 5)->nullable();
            $table->text('teacher_comment')->nullable();
            $table->text('comment')->nullable();
            $table->string('tsurname')->nullable();
            $table->string('tname')->nullable();
            $table->string('pins')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('results');
    }
};
