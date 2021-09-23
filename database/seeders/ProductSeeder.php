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
            'name'=>'LG' ,
            'price'=>'100' ,
            'description'=> "smart phone",
            'category'=>"mobile",
            'gallery'=>"https://th.bing.com/th/id/OIP.F06BV6AvVu67Yrvg8ZqMqAHaE8?w=248&h=180&c=7&r=0&o=5&pid=1.7"

            ],
            [
                'name'=>'readme' ,
                'price'=>'350' ,
                'description'=> "smart phone",
                'category'=>"mobile",
                'gallery'=>"https://th.bing.com/th/id/OIP.F06BV6AvVu67Yrvg8ZqMqAHaE8?w=248&h=180&c=7&r=0&o=5&pid=1.7"
      
            ],
            [
                'name'=>'infinix' ,
                'price'=>'400' ,
                'description'=> "smart phone",
                'category'=>"tv",
                'gallery'=>"https://th.bing.com/th/id/OIP.F06BV6AvVu67Yrvg8ZqMqAHaE8?w=248&h=180&c=7&r=0&o=5&pid=1.7"
    
            ],
            [
                'name'=>'oppo' ,
                'price'=>'150' ,
                'description'=> "smart phone",
                'category'=>"mobile",
                'gallery'=>"https://th.bing.com/th/id/OIP.F06BV6AvVu67Yrvg8ZqMqAHaE8?w=248&h=180&c=7&r=0&o=5&pid=1.7"
    
            ]
            
        ]);
    }
}
