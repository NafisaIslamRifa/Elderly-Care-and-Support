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
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id');  // Auto-incrementing ID
            $table->string('name');  // Event name
            $table->date('date');  // Event date
            $table->string('location');  // Event location
            $table->text('description')->nullable();  // Event description
            $table->string('image')->nullable();  // Path or URL to event image
            $table->decimal('cost', 10, 2);  // Event cost with precision and scale
            $table->unsignedInteger('admin_id');  // Foreign key reference
            $table->timestamps();  // Created and updated timestamps


             // Foreign key constraint with custom name
             $table->foreign('admin_id', 'events_admin_id_foreign')
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
        Schema::dropIfExists('events');
    }
};
