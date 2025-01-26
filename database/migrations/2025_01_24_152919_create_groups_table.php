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
        Schema::create('groups', function (Blueprint $table) {
          
                    $table->id();
                    $table->string('name'); 
                    $table->string('slug')->unique(); 
                    $table->text('description')->nullable(); 
                    $table->integer('level'); 
                    $table->boolean('allow_guest_access')->default(false); 
                    $table->enum('status', ['active', 'inactive'])->default('active');
                    $table->timestamps();
                });
            }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
