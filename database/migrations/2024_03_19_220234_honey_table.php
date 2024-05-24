<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('honey', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hive_id')->constrained('hives', 'HiveID'); // Reference HiveID column in hives table
            $table->foreign('honey_category_id')->references('id')->on('honey_categories');
            $table->string('kind_of_honey'); // Add 'kind_of_honey' column

            $table->decimal('quantity_kg', 8, 2); // Decimal column for quantity in kilograms
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
