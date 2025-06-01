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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content')->nullable();
            $table->string('status')->default('active'); // e.g., active, archived
            $table->string('link')->nullable(); // URL to the news article or source
            $table->string('image')->nullable(); // Path to the news image
            $table->date('published_at')->nullable(); // Date when the news was published
            $table->string('author')->nullable(); // Author of the news article
            $table->string('category')->nullable(); // Category of the news (e.g., technology, health)
            $table->string('tags')->nullable(); // Comma-separated tags for the news article
            $table->string('source')->nullable(); // Source of the news article
            $table->string('source_link')->nullable(); // Link to the source of the news article
            $table->string('language')->default('id'); // Language of the news article
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
