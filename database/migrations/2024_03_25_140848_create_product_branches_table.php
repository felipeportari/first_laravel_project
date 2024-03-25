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
        Schema::create('product_branches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('branch_id');
            $table->unsignedBigInteger('product_id');
            $table->decimal('sale_price');
            $table->integer('min_stock');
            $table->integer('max_stock');
            $table->timestamps();

            $table->foreign('branch_id')->references('id')->on('branches');
            $table->foreign('product_id')->references('id')->on('products');
        });

        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['max_stock', 'min_stock', 'value']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->float('value')->default(0);
            $table->integer('max_stock')->default(1);
            $table->integer('min_stock')->default(1);
        });        
        
        Schema::dropIfExists('product_branches');
    }
};
