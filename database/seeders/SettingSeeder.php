<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = [
            [
                'key' => 'video_url',
                'value' => 'https://www.youtube.com/watch?v=NL78mGiK2jA',
                'validation' => 'required|url',
            ],
            [
                'key' => 'phone_number',
                'value' => '081386056130',
                'validation' => 'required|max:50',
            ],
            [
                'key' => 'email',
                'value' => 'email@example.com',
                'validation' => 'required|email',
            ],
            [
                'key' => 'instagram',
                'value' => 'https://www.instagram.com/angkutternak/',
                'validation' => 'required|url',
            ],
            [
                'key' => 'youtube',
                'value' => 'https://www.youtube.com/@AngkutTernak/videos',
                'validation' => 'required|url',
            ],
            [
                'key' => 'facebook',
                'value' => '',
                'validation' => 'nullable|url',
            ],
            [
                'key' => 'linked',
                'value' => '',
                'validation' => 'nullable|url',
            ],
        ];
        foreach ($setting as $setting) {
            $check = \App\Models\Setting::where('key', $setting['key'])->count();
            if ($check == 0) {
                \App\Models\Setting::create($setting);
            }
        }
    }
}
