<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // === CATEGORIES ===
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('name');
            $table->string('slug')->unique();
            $table->enum('type', ['product', 'post', 'project', 'service']);
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_visible')->default(true);
            $table->timestamps();
            $table->foreign('parent_id')->references('id')->on('categories')->onDelete('set null');
        });

        // === PRODUCTS ===
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('slug')->unique();
            $table->string('name');
            $table->decimal('price', 15, 0)->default(0);
            $table->decimal('sale_price', 15, 0)->nullable();
            $table->json('specs_summary')->nullable();
            $table->json('specs_full')->nullable();
            $table->json('advantages')->nullable();
            $table->longText('description')->nullable();
            $table->string('video_url')->nullable();
            $table->string('catalog_url')->nullable();
            $table->boolean('in_stock')->default(true);
            $table->boolean('is_bestseller')->default(false);
            $table->boolean('is_hot')->default(false);
            $table->boolean('is_new')->default(false);
            $table->boolean('is_visible')->default(true);
            $table->boolean('is_promotion')->default(false);
            $table->unsignedBigInteger('promotion_product_id')->nullable();
            $table->integer('view_count')->default(0);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->foreign('promotion_product_id')->references('id')->on('products')->onDelete('set null');
            $table->index('is_visible');
            $table->index('is_hot');
            $table->index('is_new');
            $table->index('is_bestseller');
        });

        // === PRODUCT IMAGES ===
        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->string('image_url');
            $table->string('alt_text')->nullable();
            $table->boolean('is_thumbnail')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamp('created_at')->useCurrent();
        });

        // === PRODUCT REVIEWS ===
        Schema::create('product_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->string('reviewer_name');
            $table->string('reviewer_email')->nullable();
            $table->string('reviewer_phone')->nullable();
            $table->tinyInteger('rating');
            $table->text('comment')->nullable();
            $table->boolean('is_approved')->default(false);
            $table->timestamp('created_at')->useCurrent();
        });

        // === POSTS ===
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('thumbnail')->nullable();
            $table->text('excerpt')->nullable();
            $table->longText('content')->nullable();
            $table->string('author')->nullable();
            $table->boolean('is_visible')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->integer('view_count')->default(0);
            $table->integer('sort_order')->default(0);
            $table->datetime('published_at')->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
            $table->index('is_visible');
        });

        // === PROJECTS ===
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('thumbnail')->nullable();
            $table->text('excerpt')->nullable();
            $table->longText('content')->nullable();
            $table->string('client_name')->nullable();
            $table->string('location')->nullable();
            $table->boolean('is_visible')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->integer('view_count')->default(0);
            $table->integer('sort_order')->default(0);
            $table->datetime('completed_at')->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        });

        // === CONTACTS ===
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->string('full_name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->text('message')->nullable();
            $table->boolean('is_read')->default(false);
            $table->timestamp('created_at')->useCurrent();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('set null');
            $table->index('is_read');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('product_reviews');
        Schema::dropIfExists('product_images');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
    }
};