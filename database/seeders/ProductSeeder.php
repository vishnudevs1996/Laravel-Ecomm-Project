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
                'name'=>'Redmi',
                'price'=>'14000',
                'category'=>'Mobile',
                'description'=>'4 gb ram and 2 cams in rear side',
                'gallery'=>'https://images.app.goo.gl/DANRjAGChaT4MfMMA'
            ],
            [
                'name'=>'Realme',
                'price'=>'15000',
                'category'=>'Mobile',
                'description'=>'8 gb ram and 4 cams in rear side',
                'gallery'=>'https://images.app.goo.gl/qFeX3ZeDit8ha6LFA'
            ],
            [
                'name'=>'Honor',
                'price'=>'19000',
                'category'=>'Mobile',
                'description'=>'4 gb ram and 1 cam in rear side',
                'gallery'=>'https://images.app.goo.gl/AiCwwVqnGnb533X96'
            ]

            
            
        ]);
    }
}
