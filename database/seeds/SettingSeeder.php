<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Setting::create([
            'title'            => 'موقع أفنان',
            'description'      => 'دار التحفيظ أفنان لتعليم الأطفال التجويد والقران الكريم',
            'meta_keyword'     => ' دار التحفيظ، افنان، افنان تحفيظ القران، تحفيظ القران، التجويد، تجويد القران، القران الكريم',
            'meta_description' => 'دار التحفيظ أفنان لتعليم الأطفال التجويد والقران الكريم',
            'facebook'         => 'https://www.facebook.com/',
            'whatsApp'         => '01065858355',
            'phone'            => '01065858355',
            'email'            => 'baraa@app.com',
            'location'         => 'Egypt, Alex',
        ]);
    }
}
