<?php

use App\Models\User;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200);
            $table->string('slug', 400);
            $table->integer('quantity');
            $table->longText('description')->nullable()->default('text');
            $table->boolean('published')->nullable()->default(false);
            $table->boolean('inStock')->nullable()->default(false);
            $table->decimal('price', 10, 2)->nullable()->default(123.45);
            $table->foreignIdFor(User::class, 'created_by')->nullable();
            $table->foreignIdFor(User::class, 'updated_by')->nullable();
            $table->foreignIdFor(Brand::class, 'brand_id')->nullable();
            $table->foreignIdFor(Category::class, 'category_id')->nullable();
            $table->softDeletes();
            $table->foreignIdFor(User::class, 'deleted_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
