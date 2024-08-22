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
        Schema::create('reviews', function (Blueprint $table) {
            
            $table->id('review_id'); // Primary key
            $table->string('reviewer_name'); // Name of the person giving the review
            $table->text('review_text'); // The review content
            $table->unsignedInteger('admin_id'); // Foreign key to admins table
            $table->unsignedBigInteger('user_id'); // Foreign key to users table
            $table->timestamps();

            $table->foreign('admin_id', 'reviews_admin_id_foreign')
            ->references('admin_id')->on('admins')
            ->onDelete('cascade');

        $table->foreign('user_id', 'reviews_user_id_foreign')
            ->references('id')->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
