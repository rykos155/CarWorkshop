<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);                              // Imie
            $table->string('surname', 60);                           // Nazwisko
            $table->decimal('pesel', 11, 0)->unique();               // Pesel
            $table->string('phoneNumber', 60)->unique();             // Numer telefonu
            $table->string('email')->unique();                       // Emial
            $table->string('home', 60);                              // Miejsce zamieszkania 
            $table->string('street', 60)->nullable();                // Ulica
            $table->smallInteger('houseNumber');                     // Numer domu
            $table->smallInteger('flatNumber')->nullable();          // Numer mieszkania
            $table->string('zipCode', 6);                            // Kod pocztowy
            $table->string('commune', 60);                           // Gmina
            $table->foreignId('province_id');                        // Wojewodztwo - relacja jeden do wielu
            $table->boolean('deactivate');                           // Miękkie usuwanie
            $table->timestamps();                                    // Data utworzenia i edycji

            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
