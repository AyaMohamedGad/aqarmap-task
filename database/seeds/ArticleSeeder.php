<?php

use Illuminate\Database\Seeder;
use App\Models\Article;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <= 5; $i++){
            Article::create([
                'title' => str_random(8),
                'content' => str_random(15),
                'article_date' => Carbon::now(),
                'published' => true,
                'admin_id' => 1,
                'category_id' => 1,
            ]);
        }
    }
}
