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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedInteger('admin_id')->nullable();
            $table->string('name')->nullable();
            $table->string('email', 30)->nullable();
            $table->string('phone', 20)->nullable();
            $table->double('amount')->nullable();
            $table->text('address')->nullable();
            $table->string('status', 10)->collation('utf8_unicode_ci')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('currency', 20)->nullable();
            $table->timestamps();

            // Adding foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('admin_id')->references('admin_id')->on('admins')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('donations', function (Blueprint $table) {
            // Dropping foreign key constraints
            $table->dropForeign(['user_id']);
            $table->dropForeign(['admin_id']);
        });

        Schema::dropIfExists('donations');
    }
};
