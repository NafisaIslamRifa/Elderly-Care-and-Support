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
        Schema::create('members', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // Member's name
            $table->integer('age'); // Member's age
            $table->enum('gender', ['Male', 'Female']); // Member's gender
            $table->string('contact_number'); // Member's contact number
            $table->string('room_number'); // Member's room number
            $table->string('room_status')->default('booked'); // Room status with default value 'booked'
            $table->enum('disease', ['Diabetes', 'Hypertension', 'Heart Disease']); // Disease with enum type
            $table->unsignedBigInteger('staff_id'); // Foreign key for staff
            $table->unsignedInteger('admin_id'); // Foreign key for admin with default value 1

            // Foreign key constraints
            $table->foreign('staff_id', 'members_staff_id_foreign')
                  ->references('id')->on('staffs')
                  ->onDelete('cascade');
            $table->foreign('admin_id', 'members_admin_id_foreign')
            ->references('admin_id')->on('admins')
            ->onDelete('cascade');

            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};