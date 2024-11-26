<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run()
    {
        
        $category1 = Category::where('name', 'Alat Tangan')->first();
        $category2 = Category::where('name', 'Bahan Bangunan')->first();

        if (!$category1 || !$category2) {
            throw new \Exception('One or both categories do not exist.');
        }

        Product::create([
            'name' => 'Paku Beton 100 pcs',
            'price' => 45000,
            'stock' => 60,
            'description' => 'Paku beton dengan daya tahan tinggi untuk keperluan konstruksi',
            'category_id' => $category2->id,
        ]);

        Product::create([
            'name' => 'Sekop Stainless Steel',
            'price' => 45000,
            'stock' => 30,
            'description' => 'Sekop dengan material stainless steel untuk pekerjaan konstruksi',
            'category_id' => $category2->id,
        ]);

        Product::create([
            'name' => 'Pasir 1 Kubik',
            'price' => 150000,
            'stock' => 15,
            'description' => 'Pasir untuk campuran beton dan bahan bangunan lainnya',
            'category_id' => $category2->id,
        ]);

        Product::create([
            'name' => 'Paku 100 pcs',
            'price' => 20000,
            'stock' => 50,
            'description' => 'Paku ukuran besar untuk keperluan konstruksi',
            'category_id' => $category1->id,
        ]);

        Product::create([
            'name' => 'Sarung Tangan Kerja',
            'price' => 15000,
            'stock' => 100,
            'description' => 'Sarung tangan kerja tahan lama, nyaman digunakan',
            'category_id' => $category1->id,
        ]);

        Product::create([
            'name' => 'Semen 10kg',
            'price' => 25000,
            'stock' => 20,
            'description' => 'Semen 10kg untuk keperluan bangunan',
            'category_id' => $category2->id,
        ]);

        Product::create([
            'name' => 'Alat Las Portable',
            'price' => 350000,
            'stock' => 10,
            'description' => 'Alat las portable untuk pekerjaan las ringan',
            'category_id' => $category1->id,
        ]);

        Product::create([
            'name' => 'Sekop Besi',
            'price' => 45000,
            'stock' => 50,
            'description' => 'Sekop besi dengan pegangan kayu, untuk pekerjaan tanah',
            'category_id' => $category1->id,
        ]);

        Product::create([
            'name' => 'Semen 25kg',
            'price' => 50000,
            'stock' => 40,
            'description' => 'Semen 25kg untuk keperluan bangunan',
            'category_id' => $category2->id,
        ]);

        Product::create([
            'name' => 'Triplek 0.5m x 2m',
            'price' => 120000,
            'stock' => 20,
            'description' => 'Triplek ukuran 1/2 meter x 2 meter untuk konstruksi dan perabotan',
            'category_id' => $category2->id,
        ]);

        Product::create([
            'name' => 'Sekop Stainless Steel',
            'price' => 45000,
            'stock' => 30,
            'description' => 'Sekop dengan material stainless steel untuk pekerjaan konstruksi',
            'category_id' => $category2->id,
        ]);

        Product::create([
            'name' => 'Semen 50kg',
            'price' => 80000,
            'stock' => 30,
            'description' => 'Semen untuk keperluan bangunan',
            'category_id' => $category2->id,
        ]);

        Product::create([
            'name' => 'Palu Kecil 500g',
            'price' => 25000,
            'stock' => 100,
            'description' => 'Palu kecil 500g, cocok untuk pekerjaan ringan',
            'category_id' => $category1->id,
        ]);

        Product::create([
            'name' => 'Triplek 1m x 1m',
            'price' => 140000,
            'stock' => 20,
            'description' => 'Triplek ukuran 1 meter x 1 meter untuk konstruksi dan perabotan',
            'category_id' => $category2->id,
        ]);

        Product::create([
            'name' => 'Batu Bata 100 pcs',
            'price' => 250000,
            'stock' => 25,
            'description' => 'Batu bata merah untuk konstruksi bangunan',
            'category_id' => $category2->id,
        ]);

        Product::create([
            'name' => 'Sekop Besi',
            'price' => 45000,
            'stock' => 50,
            'description' => 'Sekop besi dengan pegangan kayu, untuk pekerjaan tanah',
            'category_id' => $category1->id,
        ]);

        Product::create([
            'name' => 'Triplek 1m x 2m',
            'price' => 200000,
            'stock' => 20,
            'description' => 'Triplek ukuran 1 meter x 2 meter untuk konstruksi dan perabotan',
            'category_id' => $category2->id,
        ]);

        Product::create([
            'name' => 'Cat Dinding 5L',
            'price' => 150000,
            'stock' => 30,
            'description' => 'Cat dinding berkualitas tinggi untuk finishing rumah',
            'category_id' => $category2->id,
        ]);

        Product::create([
            'name' => 'Sekrup 100 pcs',
            'price' => 15000,
            'stock' => 200,
            'description' => 'Sekrup berbagai ukuran untuk keperluan perakitan',
            'category_id' => $category1->id,
        ]);

        Product::create([
            'name' => 'Bor Tangan 500W',
            'price' => 150000,
            'stock' => 20,
            'description' => 'Bor tangan 500W, cocok untuk pengeboran ringan',
            'category_id' => $category1->id,
        ]);
    }
}
