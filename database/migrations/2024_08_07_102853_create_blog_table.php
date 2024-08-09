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
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('content_image')->nullable();
            $table->string('heading')->nullable();
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('comments')->nullable();
            $table->text('content')->nullable();
            $table->text('blog_quote')->nullable();
            $table->string('categories')->nullable();
            $table->date('date')->nullable();
            $table->string('posts')->nullable();
            $table->date('post_date')->nullable();
            $table->string('tags')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->integer('order')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
