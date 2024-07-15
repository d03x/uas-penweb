<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Electronics',
            'Fashion',
            'Home and Furniture',
            'Beauty and Health',
            'Sports and Outdoors',
            'Books and Media',
            'Automotive',
            'Groceries',
            'Toys and Baby Products',
            'Office Supplies'
        ];
        foreach ($categories as $item) {
            Kategori::create([
                'nama' => $item
            ]);
        }
    }
}
