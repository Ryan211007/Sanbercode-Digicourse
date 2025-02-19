<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Browser;

class BrowserSeeder extends Seeder
{
    public function run()
    {
        Browser::create([
            'rendering_engine' => 'Trident',
            'browser' => 'Internet Explorer 4.0',
            'platform' => 'Win 95+',
            'engine_version' => '4',
            'css_grade' => 'X',
        ]);

        Browser::create([
            'rendering_engine' => 'Trident',
            'browser' => 'Internet Explorer 5.0',
            'platform' => 'Win 95+',
            'engine_version' => '5',
            'css_grade' => 'C',
        ]);

        Browser::create([
            'rendering_engine' => 'Gecko',
            'browser' => 'Firefox 1.0',
            'platform' => 'Win 98+ / OSX.2+',
            'engine_version' => '1.7',
            'css_grade' => 'A',
        ]);
    }
}