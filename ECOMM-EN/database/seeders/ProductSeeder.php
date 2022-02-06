<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Oppo Mobile',
            'price'=>'140',
            'description'=>'A smartphone with 4gb',
            'category'=>'mobile',
            'gallery'=>'https://images.app.goo.gl/BEuCahv1iMvqEfFk9',
            ],
            [
                'name'=>'LG Mobile',
            'price'=>'200',
            'description'=>'A smartphone with 4gb',
            'category'=>'mobile',
            'gallery'=>'https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.lg.com%2Fid%2Fimages%2Fmobile%2Fmd05809849%2FLGM250-350.jpg&imgrefurl=https%3A%2F%2Fwww.lg.com%2Fid%2Fsmartphone&tbnid=V6KuPUv63DlvXM&vet=1&docid=oZAhYIscNWE_jM&w=350&h=350&source=sh%2Fx%2Fim',
            ],
            [
                'name'=>'Samsung Mobile',
            'price'=>'400',
            'description'=>'A smartphone with 4gb',
            'category'=>'mobile',
            'gallery'=>'https://images.app.goo.gl/YDYKe3dyte38Hr4W6',
            ],
            [
                'name'=>'LG Mobile',
            'price'=>'200',
            'description'=>'A smartphone with 4gb',
            'category'=>'mobile',
            'gallery'=>'https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.lg.com%2Fid%2Fimages%2Fmobile%2Fmd05809849%2FLGM250-350.jpg&imgrefurl=https%3A%2F%2Fwww.lg.com%2Fid%2Fsmartphone&tbnid=V6KuPUv63DlvXM&vet=1&docid=oZAhYIscNWE_jM&w=350&h=350&source=sh%2Fx%2Fim',
            ],
        ]);
    }
}
