<?php

namespace App\Infrastructure\Persistence\Eloquent\Seeds;

use App\Infrastructure\Persistence\Eloquent\Models\Banca;
use Illuminate\Database\Seeder;


class BancaTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getBancas() as $banca) {
            Banca::firstOrCreate($banca);
        }
    }

    private function getBancas()
    {
        return [
            ['no_banca' => 'CESPE'],
            ['no_banca' => 'IADES'],
            ['no_banca' => 'ESAF'],
        ];
    }
}
