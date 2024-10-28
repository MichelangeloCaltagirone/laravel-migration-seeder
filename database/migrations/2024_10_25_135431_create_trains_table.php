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
INSERT INTO `trains` (`id`, `Azienda`, `Stazione_di_arrivo`, `Stazione_di_partenza`, `Orario_di_arrivo`, `Orario_di_partenza`, `Codice_Univoco`, `Numero_Carrozze`, `In_Orario`, `Cancellato`, `data_partenza`) VALUES
(1, 'Trenitalia', 'Roma', 'Milano', '14:12', '10:55', '4527898760', '4', true, false, DATE_ADD(CURDATE())),
(2, 'Trenitalia', 'Palermo', 'Milano', '12:12', '09:55', '4567898360', '30', true, false, DATE_ADD(CURDATE())),
(3, 'Trenitalia', 'Catania', 'Milano', '15:12', '11:55', '4563898760', '34', true, false, "2013-10-23"),
(4, 'Trenitalia', 'Napoli', 'Milano', '16:12', '10:50', '4267878760', '24', true, false, DATE_ADD(CURDATE())),
(5, 'Trenitalia', 'Roma', 'Como', '17:52', '10:30', '4567898761', '34', true, false, "2023-11-24"),
(6, 'Trenitalia', 'Mantova', 'Milano', '21:13', '12:23', '4567598760', '34', true, false, "2023-05-09"),
(7, 'Trenitalia', 'Roma', 'Milano', '20:45', '14:05', '1567898760', '14', true, false, DATE_ADD(CURDATE())),
(8, 'Trenitalia', 'Genova', 'Milano', '23:12', '10:55', '4568898760', '64', true, false, "2023-11-20"),
(9, 'Trenitalia', 'Torino', 'Milano', '17:17', '11:55', '4567878760', '74', true, false, DATE_ADD(CURDATE())),
(10, 'Trenitalia', 'Vercelli', 'Milano', '18:18', '15:55', '4167898760', '34', true, false, "2013-11-21");
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("Azienda", 100);
            $table->string("Stazione_di_arrivo", 100);
            $table->string("Stazione_di_partenza", 100);
            $table->time("Orario_di_arrivo", precision: 2);
            $table->time('Orario_di_partenza', precision: 2);
            $table->char("Codice_Univoco", 10)->unique();
            $table->smallInteger("Numero_Carrozze")->unsigned();
            $table->boolean("In_Orario");
            $table->boolean("Cancellato");
            $table->date("data_partenza");
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
