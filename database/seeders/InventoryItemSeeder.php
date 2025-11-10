<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\InventoryItem;
use App\Models\Location;
use App\Models\Owner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventoryItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locations = Location::all(); // Select * From locations;
        $categories = Category::all();
        $owners = Owner::all();

        if($locations->isEmpty() || $categories->isEmpty() || $owners->isEmpty()) {
            $this->command->warn("Please add ... categories, owners and locations before seeding");
            return;
        }

        InventoryItem::factory()->count(60)->create([
            'location_id' => $locations->random()->id,
            'category_id' => $categories->random()->id,
            'owner_id' => $owners->random()->id,
        ]);
    }
}
