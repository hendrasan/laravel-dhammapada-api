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
        Schema::create('verses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chapter_id')->constrained()->onDelete('cascade');
            $table->integer('verse_number');
            $table->text('text');
            $table->text('english_text');
            $table->string('story_title');
            $table->string('english_story_title');
            $table->text('story');
            $table->text('english_story');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('verses');
    }
};
