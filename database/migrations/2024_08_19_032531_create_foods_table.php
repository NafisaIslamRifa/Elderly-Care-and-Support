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
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->enum('day', ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']);
            $table->string('breakfast');
            $table->string('lunch');
            $table->string('dinner');
            $table->decimal('cost', 10, 2);
            $table->string('image')->nullable();
            $table->unsignedInteger('admin_id'); 
            $table->timestamps();


             // Adding foreign key with a custom name
             $table->foreign('admin_id', 'foods_admin_id_foreign')
             ->references('admin_id')
             ->on('admins')
             ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foods');
    }
};
