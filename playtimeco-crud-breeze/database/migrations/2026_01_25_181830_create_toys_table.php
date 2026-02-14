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
        Schema::create('toys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete(); // null if the assigned supervisor is deleted
            $table->string('alias');
            $table->string('name');
            $table->enum('gender', ['Male', 'Female']);
            $table->float('height', 2)->nullable();
            $table->float('weight', 2)->nullable();
            $table->integer('subject');
            $table->enum('status', ['Alive', 'Deceased']);
            $table->date('creation_date');
            $table->string('species');
            $table->string('description')->nullable();
            $table->string('visual')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toys');
    }
};
