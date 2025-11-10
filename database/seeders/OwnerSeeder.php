<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $owners = [
          ['name' => 'John Doe', 'email' => 'john.doe@example.org'],
          ['name' => 'Jane Doe', 'email' => 'jane.doe@example.org'],
          ['name' => 'Max Muster', 'email' => 'max.muster@example.org'],
        ];

        foreach ($owners as $owner) {
            Owner::create($owner);
        }
    }
}
