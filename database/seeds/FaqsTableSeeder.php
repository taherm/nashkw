<?php

use App\Src\User\Faq;
use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Faq::class,app()->environment('production') ? 2 , 10)->create();
    }
}
