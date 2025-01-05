<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds."
     */
    public function run(): void
    {
        // Produk pertama
        Product::create([
            "name" => "produk 1",
            "description" => "si Produk pertama",
            "sku" => "123-uk",
            "price" => 10000,
            "stock" => 100,
            "category_id" => 2
        ]);

        // Produk kedua
        Product::create([
            "name" => "produk 2",
            "description" => "si Produk kedua",
            "sku" => "456-uk",
            "price" => 15000,
            "stock" => 50,
            "category_id" => 2
        ]);
    }
}
