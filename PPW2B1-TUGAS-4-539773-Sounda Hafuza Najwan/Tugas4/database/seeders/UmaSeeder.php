<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Uma;

class UmaSeeder extends Seeder
{
    public function run()
    {
        $list = [
            'Torena-san' => [
                'Special Week',
                'Silence Suzuka',
                'Tokai Teio',
                'Mejiro McQueen',
                'Goldship',
                'Vodka',
                'Daiwa Scarlet',
            ],
            'Hana Toujou' => [
                'Grass Wonder',
                'El Condor Pasa',
                'Taiki Shuttle',
                'Hishi Amazon',
                'Narita Brian',
            ],
            'Minamizaka' => [
                'Nice Nature',
                'Twin Turbo',
                'Ikuno Dictus',
                'Matikanetannhauser',
                'Sounds of Earth',
            ],
            'Kuronuma' => [
                'Mihono Bourbon',
            ],
            'Jou Kitahara' => [
                'Oguri Cap',
                'Belno Light',
            ],
            'Tanabe' => [
                'Fuji Kiseki',
                'Jungle Pocket',
            ],
        ];

        foreach ($list as $trainer => $umas) {
            foreach ($umas as $uma) {
                Uma::create([
                    'nama' => $uma,
                    'trainer' => $trainer,
                    'harga' => rand(15000, 250000),
                ]);
            }
        }
    }
}
