<?php

namespace Database\Seeders;

use App\Models\Passanger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PassangerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $passengers = [
            "Piero", "Giovanni", "Caio"
        ];

    foreach ($passengers as $passenger) {
        $newpassenger = new Passanger();
        $newpassenger->name = $passenger;
        $newpassenger->save();
    }
    }
}
