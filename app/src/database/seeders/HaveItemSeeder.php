<?php

namespace Database\Seeders;

use App\Models\HaveItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HaveItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HaveItem::create([
            'user_id' => 2,
            'item_id' => 1,
            'amount' => 13
        ]);

        HaveItem::create([
            'user_id' => 3,
            'item_id' => 3,
            'amount' => 1
        ]);
    }
}
