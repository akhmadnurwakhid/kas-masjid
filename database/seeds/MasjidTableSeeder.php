<?php

use Illuminate\Database\Seeder;
use App\Masjid;

class MasjidTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Masjid::create([
            'nama' => 'Baitul Muttaqien',
            'alamat' => 'Desa Bojonggede Kec. Ngampel Kab. Kendal',
        ]);
    }
}
