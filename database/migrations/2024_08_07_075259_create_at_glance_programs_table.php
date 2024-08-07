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
        Schema::create('at_glance_programs', function (Blueprint $table) {
            $table->id();
            $table->string('time')->nullable();
            $table->string('session')->nullable();
            $table->text('title')->nullable();
            $table->string('notes')->nullable();
            $table->foreignId('date_id')->constrained('date_programs')->cascadeOnDelete();
            $table->foreignId('room_id')->constrained('room_programs')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('at_glance_programs');
    }
};
