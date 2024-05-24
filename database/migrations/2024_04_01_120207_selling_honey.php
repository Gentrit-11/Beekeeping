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
        Schema::create('sellings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hive_id')->constrained('hives');
            $table->foreignId('honey_id')->constrained('honey');
            $table->foreignId('HiveID')->constrained('hive');

            $table->decimal('quantity_kg', 8, 2);
            $table->string('kind_of_honey');
            $table->decimal('quantity_to_buy', 8, 2); // Assuming you want to store quantity to buy in decimal format
            $table->string('personi');
            $table->decimal('price', 10, 2);
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
        Schema::dropIfExists('sellings');
    }
};
