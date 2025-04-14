<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', 50)->nullable();
            $table->string('surname', 50)->nullable();
            $table->string('middlename', 50)->nullable();
            $table->string('fname', 50)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('section', 50)->nullable();
            $table->string('academic_session', 15)->nullable();
            $table->string('dob', 20)->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('monthofentry', 20)->nullable();
            $table->string('classname', 20)->nullable();
            $table->string('placeofbirth', 100)->nullable();
            $table->string('ref_no', 20)->nullable();
            $table->string('slug', 20)->nullable();
            $table->string('status', 12)->nullable();
            $table->text('images')->nullable();
            $table->string('email', 50)->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('fathersurname', 30)->nullable();
            $table->string('fathername', 30)->nullable();
            $table->string('fathermiddlename', 30)->nullable();
            $table->string('title', 30)->nullable();
            $table->string('fatherphone', 20)->nullable();
            $table->string('nationality', 30)->nullable();
            $table->string('fatheremployer', 70)->nullable();
            $table->string('fatheremail', 30)->nullable();
            $table->string('fatheraddress')->nullable();
            $table->string('mothersurname', 30)->nullable();
            $table->string('mothername', 30)->nullable();
            $table->string('mothermiddlename', 30)->nullable();
            $table->string('mothertitle', 30)->nullable();
            $table->string('motherphone', 20)->nullable();
            $table->string('mothernationality', 30)->nullable();
            $table->string('motheremployer', 30)->nullable();
            $table->string('motheremail', 30)->nullable();
            $table->string('motheraddress', 100)->nullable();
            $table->string('lastschool', 100)->nullable();
            $table->string('landmark', 100)->nullable();
            $table->string('relationship', 30)->nullable();
            $table->string('brixtonsiblings', 191)->nullable();
            $table->string('schooladdress')->nullable();
            $table->string('aboutus', 30)->nullable();
            $table->string('birthcert')->nullable();
            $table->string('genotype1', 10)->nullable();
            $table->string('genotype2', 10)->nullable();
            $table->string('asthmatic1', 10)->nullable();
            $table->string('asthmatic2', 10)->nullable();
            $table->string('symtoms1', 100)->nullable();
            $table->string('symtoms2', 100)->nullable();
            $table->string('symtoms3', 100)->nullable();
            $table->string('symtoms4', 100)->nullable();
            $table->string('centername', 100)->nullable();
            $table->string('religion', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('entrylevel', 100)->nullable();
            $table->string('role', 20)->nullable();
            $table->string('regnumber', 20)->nullable();
            $table->string('password_resets')->nullable();
            
            $table->string('medicalcondition1', 300)->nullable();
            $table->string('medicalcondition2', 300)->nullable();
            $table->string('diagnose1', 10)->nullable();
            $table->string('diagnose2', 10)->nullable();
            $table->string('diagnose3', 10)->nullable();
            $table->string('schoolclinic1', 10)->nullable();
            $table->string('schoolclinic2', 10)->nullable();

            $table->string('smallpox1', 10)->nullable();
            $table->string('smallpox2', 10)->nullable();
            $table->string('chickenpox1', 10)->nullable();
            $table->string('chickenpox2', 10)->nullable();
            $table->string('polio1', 10)->nullable();
            $table->string('polio2', 10)->nullable();
            $table->string('tetanus1', 10)->nullable();
            $table->string('tetanus2', 10)->nullable();
            $table->string('tuber1', 10)->nullable();
            $table->string('tuber2', 10)->nullable();
            $table->string('mumps1', 10)->nullable();
            $table->string('mumps2', 10)->nullable();
            $table->string('rebelia1', 10)->nullable();
            $table->string('rebelia2', 10)->nullable();
            $table->string('hepatitis1', 10)->nullable();
            $table->string('hepatitis2', 10)->nullable();
            $table->string('meningitis1', 10)->nullable();
            $table->string('meningitis2', 10)->nullable();
            $table->string('whoopingcough1', 10)->nullable();
            $table->string('whoopingcough2', 10)->nullable();
            $table->string('diphtheria1', 10)->nullable();
            $table->string('diphtheria2', 10)->nullable();
            $table->string('doctorname', 50)->nullable();
            $table->string('doctoraddress', 100)->nullable();
            $table->string('doctorphone', 20)->nullable();
            $table->text('immune')->nullable();
            $table->string('promotion')->nullable();
            $table->string('assign')->nullable();
            $table->string('assign1')->nullable();
            $table->string('ref_no1')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
