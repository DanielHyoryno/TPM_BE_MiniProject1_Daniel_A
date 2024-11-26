<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Alat Tangan',
            'description' => 'Kategori untuk alat-alat tangan seperti palu, gergaji, dll.',
        ]);
        
        Category::create([
            'name' => 'Bahan Bangunan',
            'description' => 'Kategori untuk bahan-bahan bangunan seperti semen, pasir, dll.',
        ]);
    }
}
