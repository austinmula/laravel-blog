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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('user_id')
            ->foreign('user_id')
            ->references('id')
            ->on('users');
            
            $table->bigInteger('post_id') 
            ->foreign('post_id')
            ->references('id')
            ->on('posts');

            $table->string('comment', 255);
            $table->bigInteger('parent')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};