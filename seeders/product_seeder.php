<?php
/**
 * The products seeder
 * 
 * @see https://github.com/fzaninotto/Faker for all documentation
 */
$faker = \Faker\Factory::create();

$seeds = [];

foreach (range(1, 5) as $key) {
    $seeds[] = [
        'name' => $faker->name,
		'image' => 'https://via.placeholder.com/500',
		'price' => 5000,
		'description' => $faker->text(50),
		'status' => true,
		'category_id' => [1, 2, 3][rand(0, 2)],
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ];
}

return ['products' => $seeds];
