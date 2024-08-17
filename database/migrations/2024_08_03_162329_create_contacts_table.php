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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id('contact_id');
            $table->string('name');
            $table->string('email');
            $table->text('message');
            $table->unsignedInteger('admin_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

             // Setting up foreign keys
             $table->foreign('admin_id', 'contacts_admin_id_foreign')
            ->references('admin_id')->on('admins')
            ->onDelete('cascade');

            $table->foreign('user_id', 'contacts_user_id_foreign')
            ->references('id')->on('users')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
