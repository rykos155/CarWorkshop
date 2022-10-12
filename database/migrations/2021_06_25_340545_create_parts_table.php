<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estimate_id');                     // przypisanie do kosztorysu
            $table->string('name',60);                            // Kategoria czesci
            $table->foreignId('category_id');                     // Kategoria czesci
            $table->Integer('amount');                            // Ilosc czesci
            $table->double('price', 6, 2);                        // Cena czesci ( amount razy cena z warehouse_price)
            $table->boolean('inStock');                           // Czy czesci sa na magzynie
            $table->timestamps();

            $table->foreign('estimate_id')->references('id')->on('estimates')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parts');
    }
}
