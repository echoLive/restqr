<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllergenLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allergen_langs', function (Blueprint $table) {
            $table->id();

            $table->foreignId('allergen_id')
                ->constrained('allergens')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreignId('lang_id')
                ->constrained('languages')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('name');

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
        Schema::dropIfExists('allergen_langs');
    }
}
