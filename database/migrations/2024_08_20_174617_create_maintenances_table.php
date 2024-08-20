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
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->decimal('electricity_cost', 10, 2);
            $table->decimal('gas_cost', 10, 2);
            $table->decimal('daily_cleaning_cost', 10, 2);
            $table->decimal('security_cost', 10, 2);
            $table->unsignedInteger('admin_id'); 
            $table->timestamps();

            $table->foreign('admin_id', 'maintenances_admin_id_foreign')
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
        Schema::dropIfExists('maintenances');
    }
};
