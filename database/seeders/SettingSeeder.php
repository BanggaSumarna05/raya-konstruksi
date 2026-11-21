<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        Setting::put('inquiry_recipient_email', 'marketing@rayakonstruksi.com');
        Setting::put('contact_email', 'info@rayakonstruksi.com');
        Setting::put('instagram_url', 'https://www.instagram.com/rayakonstruksiinternasional/');
    }
}
