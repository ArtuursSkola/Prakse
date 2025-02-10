<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {

        Schema::create('todos', function (Blueprint $table) {
            $table->id();  // Auto-incrementing ID
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('title');  // Title of the to-do item
            $table->text('description')->nullable();  // Description of the to-do item (optional)
            $table->enum('status', ['pending', 'completed', 'in_progress'])->default('pending');  // Task status
            $table->enum('priority', ['low', 'medium', 'high'])->nullable();  // Task priority (optional)
            $table->timestamp('due_date')->nullable();  // Due date for the task (optional)
            $table->timestamps();  // Automatically manage created_at and updated_at
        });


        Schema::create('todo_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('todo_tag_todo', function (Blueprint $table) {
            $table->id();
            $table->foreignId('todo_id')->constrained()->onDelete('cascade');
            $table->foreignId('tag_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('todos');
        Schema::dropIfExists('todo_tags');
        Schema::dropIfExists('todo_tag_todo');
    }
};
