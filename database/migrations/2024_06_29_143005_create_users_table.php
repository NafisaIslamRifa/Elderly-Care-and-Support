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
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('admin_id'); // Primary key
            $table->string('admin_name')->default('nasif');
            $table->string('email')->default('irfanhossain582@gmail.com');
            $table->timestamps();
        });
        
        
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('address');
            $table->string('phone_no');
         
            $table->string('password');
            $table->enum('user_role', ['admin', 'customer']);
            $table->unsignedInteger('admin_id'); // Foreign key
            
            // Foreign key constraint
            $table->foreign('admin_id')->references('admin_id')->on('admins')->onDelete('cascade');

            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

      
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
      
    }
};
