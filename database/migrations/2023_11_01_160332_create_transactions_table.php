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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('payment_id')->nullable();
            $table->string('student_id')->nullable();
            $table->string('fname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('surname')->nullable();
            $table->string('section')->nullable();
            $table->string('classname')->nullable();
            $table->string('centername')->nullable();
            
            $table->string('term')->nullable();
            $table->string('email')->nullable();
            $table->string('amount')->default(0);
            $table->string('phone')->nullable();
            
            $table->string('form_amount')->default(0)->nullable();
            $table->string('uniforms_amount')->default(0)->nullable();
            $table->string('extracuri_fee')->default(0)->nullable();
            $table->string('feeding')->default(0)->nullable();
            $table->string('medicals')->default(0)->nullable();
            $table->string('tx_ref')->default(0)->nullable();
            $table->string('flw_ref')->nullable();
            $table->string('device_fingerprint')->nullable();
            $table->string('currency')->nullable();
            $table->string('charged_amount')->nullable();
            $table->string('app_fee')->nullable();
            $table->string('merchant_fee')->nullable();
            $table->string('processor_response')->nullable();
            $table->string('auth_model')->nullable();
            $table->string('ip')->nullable();
            $table->string('address')->nullable();
            $table->string('narration')->nullable();
            $table->string('status')->nullable();
            $table->string('ref_no')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('account_id')->nullable();

            $table->string('first_6digits')->nullable();
            $table->string('last_4digits')->nullable();
            $table->string('issuer')->nullable();
            $table->string('country')->nullable();
            $table->string('type')->nullable();
            $table->string('token')->nullable();
            $table->string('expiry')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('transactions');
    }
};
