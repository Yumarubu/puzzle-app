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
            'user_name' => 'jobi',
            'item_name' => '回復薬',
            'have_count' => 13
        ]);

        HaveItem::create([
            'user_name' => 'kimu',
            'item_name' => '復活の羽',
            'have_count' => 2
        ]);

        HaveItem::create([
            'user_name' => 'satone',
            'item_name' => 'しあわせの靴',
            'have_count' => 1
        ]);
    }
}
