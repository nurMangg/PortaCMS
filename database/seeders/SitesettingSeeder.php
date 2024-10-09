<?php

namespace Database\Seeders;

use App\Models\Site;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SitesettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Site::create([
            'name' => 'PortaCMS',
            'favicon' => null,
            'color' => 'hsl(45, 100%, 72%)',
            'gradient1' => 'hsl(45, 100%, 72%)',
            'gradient2' => 'hsl(45, 100%, 72%)',

        ]);
    }
}
