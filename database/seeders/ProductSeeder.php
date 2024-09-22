<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 10; $i++) {
            Product::create([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'price' => $faker->randomFloat(2, 10, 1000),
                'image' => $faker->imageUrl(640, 480, 'product', true, 'Product'), 
                'image2' => $faker->optional()->imageUrl(640, 480, 'product', true, 'Product 2'),
                'image3' => $faker->optional()->imageUrl(640, 480, 'product', true, 'Product 3'),
                'image4' => $faker->optional()->imageUrl(640, 480, 'product', true, 'Product 4'),
            ]);
        }
    }
}
