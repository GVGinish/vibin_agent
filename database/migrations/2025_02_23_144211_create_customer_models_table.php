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
        Schema::create('customer_models', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', 50);
            $table->string('username', 50);
            $table->string('father_name', 50);
            $table->string('mother_name', 50);
            $table->string('dob', 50);
            $table->string('nominee_name', 50);
            $table->string('nominee_dob', 50);
            $table->string('phone', 50);
            $table->string('email', 50);
            $table->string('address', 50);
            $table->string('occupation', 50);
            $table->string('bank_name', 50);
            $table->string('ifsc', 50);
            $table->string('account_num', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_models');
    }
};
