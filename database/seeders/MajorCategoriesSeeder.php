<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MajorCategory;

class MajorCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $major_category_names = [
            '本',
            'コンピュータ',
            'ディスプレイ'
        ];
        
        foreach ($major_category_names as $major_category_name) {
            MajorCategory::create([
                'name' => $major_category_name,
                'description' => $major_category_name,
            ]);
        }
    }
}
