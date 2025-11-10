<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Noah Teubner',
            'email' => 'nteubner@schueler.hakzell.at',
            'password' => Hash::make('nteubner@schueler.hakzell.at'),
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'two_factor_confirmed_at' => null,
        ]);


        $this->call([
           CategorySeeder::class, OwnerSeeder::class, LocationSeeder::class, InventoryItemSeeder::class,
        ]);


    }
}
