<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id');                          // przypisanie do klienta
            $table->foreignId('brand_id');                           // marka
            $table->foreignId('model_id');                           // model
            $table->string('generation', 60);                        // generacja
            $table->year('productionYear', 60);                      // rok produkcji
            $table->string('registrationNumber', 60)->nullable();    // numer rejestracyjny
            $table->string('VIN', 60);                               // vin
            $table->string('color', 60)->nullable();                 // kolor pojazdu
            $table->string('type', 60);                              // Rodzaj nadwozia - pole select
            $table->string('engineType', 60);                        // Rodzaj silnika - pole select
            $table->double('engineCapacity', 2, 1);                  // pojemnosc silnika
            $table->smallInteger('enginePower');                     // moc silnika w KM
            $table->Integer('mileage')->nullable();                  // przebieg samochodu
            $table->timestamps(); 

            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            $table->foreign('model_id')->references('id')->on('carmodels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
