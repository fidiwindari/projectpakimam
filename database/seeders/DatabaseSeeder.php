<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\produk; 
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'fidi',
            'email' => 'fidi123@gmail.com',
            'password' => bcrypt(1234),
        ]);

        produk::create([
            'name' => 'Kasur Bayi',
            'harga' => '300.000',
            'stok' => '7',
            'warna' => 'merah',
            'size' => 'XL',
            'foto' => 'kasur.png',
        ]);
        produk:: create([
            'name' => 'Stroller Bayi',
            'harga' => '600.000',
            'stok' => '6',
            'warna' => 'hitam',
            'size' => 'XL',
            'foto' => 'stroller.png'
            

        ]);
        produk:: create([
            'name' => 'Anduk Bayi',
            'harga' => '200000',
            'stok' => '6',
            'warna' => 'pink',
            'size' => 'XL',
            'foto' => 'andukk.png',
        ]);
        produk:: create([
            'name' => 'Baju Bayi',
            'harga' => '600000',
            'stok' => '6',
            'warna' => 'biru',
            'size' => 'XL',
            'foto' => 'baju.png',
        ]);
        produk:: create([
            'name' => 'Dot Bayi',
            'harga' => '600000',
            'stok' => '6',
            'warna' => 'pink',
            'size' => 'XL',
            'foto' => 'dot.png',
        ]);
        produk:: create([
            'name' => 'Gendongan Bayi',
            'harga' => '400000',
            'stok' => '6',
            'warna' => 'hitam',
            'size' => 'XL',
            'foto' => 'gendongan.png',
        ]);
        produk:: create([
            'name' => 'Tempat Makan Bayi',
            'harga' => '700000',
            'stok' => '6',
            'warna' => 'hitam',
            'size' => 'XL',
            'foto' => 'tempat makan.png',
        ]);
        produk:: create([
            'name' => 'Tempat Makan ',
            'harga' => '500000',
            'stok' => '6',
            'warna' => 'hitam',
            'size' => 'XL',
            'foto' => 'sepatu.png',
        ]);

    
    }}
