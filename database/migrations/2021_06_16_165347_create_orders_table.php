<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id');                      // Relacja do konkretnego pojazdu klienta
            $table->foreignId('status_id');                   // Relacja do statusu
            $table->foreignId('user_id');                     // Kto utworzył zlecenie
            $table->date('startDate');                        // Planowana data rozpoczecia zlecenia
            $table->date('endDate');                          // Szacunkowa data zakończenia zlecenia
            $table->string('description');                    // Dodatkowy opis co do zlecenia
            $table->timestamps();

            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
