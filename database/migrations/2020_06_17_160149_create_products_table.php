<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->foreignId('category_id')
                ->constrained('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('product_vat_type_id')
                ->constrained('vat_types')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('product_type_id')
                ->constrained('product_types')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('product_measure_type_id')
                ->constrained('product_measure_types')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('reference')->unique();
            $table->string('bar_code')->unique();
            $table->string('measure')->nullable();
            $table->float('price', 8, 2)->nullable();
            $table->string('image')->nullable();

            $table->boolean('is_active')->default(false);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
