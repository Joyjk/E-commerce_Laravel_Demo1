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

            'name' => 'Vivo mobile',
            'price' => '202',
            'description' => 'Indian mobile phone',
            'category' =>'Mobile',
            'gallery' => 'https://www.jadroo.com/uploads/media/2021/04/rqq5Lqk3JS/1-large.jpg'

        ]);

        DB::table('products')->insert([

            'name' => 'Red Bird',
            'price' => '5000',
            'description' => 'African Bird',
            'category' =>'Bird',
            'gallery' => 'https://upload.wikimedia.org/wikipedia/commons/f/f9/Phoenicopterus_ruber_in_S%C3%A3o_Paulo_Zoo.jpg'

        ]);
        DB::table('products')->insert([

            'name' => 'Karbon mobile',
            'price' => '2488',
            'description' => 'Old Indian mobile phone',
            'category' =>'Mobile',
            'gallery' => 'https://www.jadroo.com/uploads/media/2021/05/ptX2hZjy4U/apple-iphone-12-mini-64gb-negro-large.jpg'

        ]);
        DB::table('products')->insert([

            'name' => 'Lee mobile',
            'price' => '4556',
            'description' => 'Chines mobile phone',
            'category' =>'Mobile',
            'gallery' => 'https://www.jadroo.com/uploads/media/2020/08/pENtFmbYn5/ZA4L0053IN-large.jpg'

        ]);
    }
}
