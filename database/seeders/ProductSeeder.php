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
        //
        DB::table('products')->insert([
            [
            'name'=>'Apple 5',
            'price'=>'200',
            'description'=>'A smartphone with 4gb ram and stuff',
            'category'=>'mobile',
            'galery'=>'https://m.media-amazon.com/images/I/61gyNcBDVnL._AC_SL1000_.jpg'
            ],
            [
            'name'=>'Pocophone f1',
            'price'=>'450',
            'description'=>'A smartphone with 8gb ram and stuff',
            'category'=>'mobile',
            'galery'=>'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcT3DkNXa8Vk1MmRvettovfbMM0kviRtnYaCWKo90QTu7aw-xzPHoKo3CZAi0Sa0JZUQ8oLnVF-UfCZFemUDwbc-XNNB_KxLveJll9a4ZEzE2dT_L18dpC52&usqp=CAE'
            ],
            [
            'name'=>'LG tv',
            'price'=>'500',
            'description'=>'Very pica TV',
            'category'=>'tv',
            'galery'=>'https://m.media-amazon.com/images/I/61n1FXNEnAS._AC_SL1000_.jpg'
            ],
            [
            'name'=>'Microondas',
            'price'=>'200',
            'description'=>'Microondas uito poderoso 1500w',
            'category'=>'kitchen',
            'galery'=>'https://m.media-amazon.com/images/I/71N8rjuxmdL._AC_SL1500_.jpg'
            ],
            [
            'name'=>'Notebook GAMER',
            'price'=>'200',
            'description'=>'A new concept of gaming',
            'category'=>'desktop',
            'galery'=>'https://m.media-amazon.com/images/I/511Pt8sImJL._AC_SL1000_.jpg'
            ]
        ]);
    }
}
