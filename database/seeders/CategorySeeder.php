<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            [
                'name' => 'Temporer',
                'score' => 5,
            ],
            [
                'name' => 'Datin Tarik',
                'score' => 5,
            ],
            [
                'name' => 'WIFI BGES Tarik',
                'score' => 5,
            ],
            [
                'name' => 'PDA Tarik',
                'score' => 5,
            ],
            [
                'name' => 'Garansi',
                'score' => 5,
            ],
            [
                'name' => 'Datin Existing',
                'score' => 2.5,
            ],
            [
                'name' => 'WIFI BGES Existing (Kabel LAN)',
                'score' => 2.5,
            ],
            [
                'name' => 'PDA Existing',
                'score' => 2.5,
            ],
            [
                'name' => 'Survey',
                'score' => 1,
            ],
            [
                'name' => 'P2P',
                'score' => 1,
            ],
            [
                'name' => 'Ganti ONT',
                'score' => 1,
            ],
            [
                'name' => 'Valins',
                'score' => 1,
            ],
            [
                'name' => 'Dismantle AP',
                'score' => 1,
            ],

        ];

        foreach ($data as $value) {
            Category::create($value);
        }
    }
}
