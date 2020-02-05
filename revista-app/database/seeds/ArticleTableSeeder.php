<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0; $i<10; $i++) {
            //Create Article;
            $article = new \App\Article;
            $article->title = $faker->realText(40,2);
            $article->subtitle = $faker->realText(50,2);
            $article->body = $faker->realText(400,2);
            $article->save();
            //insertar 5 comentarios
            for($j=0; $j<5; $j++) {
                $comment = new \App\Comment;
                $comment->text = $faker->realText(40, 2);
                $article->comments()->save($comment);
            }
        }
    }
}
