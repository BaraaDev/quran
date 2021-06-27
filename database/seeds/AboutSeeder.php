<?php

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\AboutUs::create([
            'title'            => 'اختر الخطة المناسبة لعملك',
            'content'          => '<span style="color: rgb(0, 0, 0); background-color: rgb(165, 74, 123);">Quite simply the best theme we’ve ever purchased. The customization and flexibility are superb. Speed is awesome.</span>',
        ]);
    }
}
