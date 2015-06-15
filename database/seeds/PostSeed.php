<?php

class PostSeed extends \Illuminate\Database\Seeder{

    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 10; $i ++){
            DB::table('posts')->insert([
                'title' => $faker->sentence(5),
                'body' => $faker->paragraph(),
                'category_id' => $faker->numberBetween(1, 3),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}