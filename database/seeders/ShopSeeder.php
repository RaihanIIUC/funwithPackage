<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shops = [
            [
                'category_name' => 'Cars',
                'children' => [
                    [
                        'category_name' => 'Luxury car || private car || family car 
                        || Public transfort',
                          'children' => [
                            ['category_name' => 'Noha '],
                            ['category_name' => 'Pajero'],
                            ['category_name' => ''],
                        ],
                    ],
                    [
                        'category_name' => 'Textbooks',
                        'children' => [
                            ['category_name' => 'Business'],
                            ['category_name' => 'Finance'],
                            ['category_name' => 'Computer Science'],
                        ],
                    ],
                ],
            ],
            [
                'category_name' => 'Electronics',
                'children' => [
                    [
                        'category_name' => 'TV',
                        'children' => [
                            ['category_name' => 'LED'],
                            ['category_name' => 'Blu-ray'],
                        ],
                    ],
                    [
                        'category_name' => 'Mobile',
                        'children' => [
                            ['category_name' => 'Samsung'],
                            ['category_name' => 'iPhone'],
                            ['category_name' => 'Xiomi'],
                        ],
                    ],
                ],
            ],
        ];
        foreach ($shops as $shop) {
            Shop::create($shop);
        }
    }
}

