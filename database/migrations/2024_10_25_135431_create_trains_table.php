<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    /**
     * Azienda
        Stazione di partenza
        Stazione di arrivo
        Orario di partenza
        Orario di arrivo
        Codice Treno
        Numero Carrozze
        In orario
        Cancellato
INSERT INTO `trains` (`id`, `Azienda`, `Stazione di arrivo`, `Stazione di partenza`, `Orario di arrivo`, `Orario di partenza`, `Codice Univoco`, `Numero Carrozze`, `In Orario`, `Cancellato` ) VALUES
(1, 'Trenitalia', 'Roma', 'Milano', '14:12', '10:55', '4527898760', '4', true, false),
(2, 'Trenitalia', 'Palermo', 'Milano', '12:12', '09:55', '4567898360', '30', true, false),
(3, 'Trenitalia', 'Catania', 'Milano', '15:12', '11:55', '4563898760', '34', true, false),
(4, 'Trenitalia', 'Napoli', 'Milano', '16:12', '10:50', '4267878760', '24', true, false),
(5, 'Trenitalia', 'Roma', 'Como', '17:52', '10:30', '4567898761', '34', true, false),
(6, 'Trenitalia', 'Mantova', 'Milano', '21:13', '12:23', '4567598760', '34', true, false),
(7, 'Trenitalia', 'Roma', 'Milano', '20:45', '14:05', '1567898760', '14', true, false),
(8, 'Trenitalia', 'Genova', 'Milano', '23:12', '10:55', '4568898760', '64', true, false),
(9, 'Trenitalia', 'Torino', 'Milano', '17:17', '11:55', '4567878760', '74', true, false),
(10, 'Trenitalia', 'Vercelli', 'Milano', '18:18', '15:55', '4167898760', '34', true, false);
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("Azienda", 100);
            $table->string("Stazione di arrivo", 100);
            $table->string("Stazione di partenza", 100);
            $table->time("Orario di arrivo", precision: 2);
            $table->time('Orario di partenza', precision: 2);
            $table->char("Codice Univoco", 10)->unique();
            $table->smallInteger("Numero Carrozze")->unsigned();
            $table->boolean("In Orario");
            $table->boolean("Cancellato");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
