<?php
/**
 * The categories seeder
 * 
 * @see https://github.com/fzaninotto/Faker for all documentation
 */
$faker = \Faker\Factory::create();

$seeds = [];

foreach (['Téléphone', 'Ordinateur', 'Vêtement'] as $name) {
    $seeds[] = [
        'name' => $name,
        'description' => $faker->text(50),
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
    ];
}

return ['categories' => $seeds];
