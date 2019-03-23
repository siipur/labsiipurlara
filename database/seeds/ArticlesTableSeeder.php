<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // generate artikel dengan jumlah 30
        factory(App\Article::class, 30)->create();
    }
}
