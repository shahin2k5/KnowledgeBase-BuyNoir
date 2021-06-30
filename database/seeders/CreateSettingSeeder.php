<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class CreateSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = Setting::create([
            'title'                 => 'Knowledge Base',
            'logo'                  => '',
            'logo_white'                  => '',
            'favicon'               => '',
            'meta_title'            => 'Knowledge Base',
            'meta_description'      => 'Knowledge Base',
            'meta_tag'              => 'Knowledge Base',
        ]);

    }
}