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
        Schema::create('staffs', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // Staff's name
            $table->integer('age'); // Staff's age
            $table->string('contact_number'); // Staff's contact number
            $table->decimal('salary', 10, 2); // Staff's salary
            $table->enum('gender', ['male', 'female']); // Staff's gender
            $table->unsignedInteger('admin_id'); // Foreign key

            // Foreign key constraint
            $table->foreign('admin_id', 'staffs_admin_id_foreign')
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
        Schema::dropIfExists('staffs');
    }
};
