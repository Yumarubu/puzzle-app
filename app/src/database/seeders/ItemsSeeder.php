<?php

namespace Database\Seeders;

use App\Models\Items;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        Items::create([
            'item_name' => '回復薬',
            'type' =>   '消耗品',
            'effect' => 3,
            'comment' => 'ライフを回復する'
        ]);

        Items::create([
            'item_name' => '超回復薬',
            'type' =>   '消耗品',
            'effect' => 5,
            'comment' => 'ライフを超回復する'
        ]);

        Items::create([
            'item_name' => '復活の羽',
            'type' =>   '消耗品',
            'effect' => 1,
            'comment' => '1度死んでも回復する'
        ]);

        Items::create([
            'item_name' => 'しあわせの靴',
            'type' =>   '消耗品',
            'effect' => 1,
            'comment' => 'クリア毎に経験値が加算'
        ]);
    }
}
