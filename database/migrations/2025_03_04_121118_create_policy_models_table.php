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
        Schema::create('policy_models', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id', 50);
            $table->string('policy_id', 50);
            $table->string('policy_type', 50);
            $table->decimal('premium_amount', 10, 2);
            $table->integer('tenure');
            $table->decimal('maturity_amount', 10, 2);    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('policy_models');
    }
};
