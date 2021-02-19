<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = [
            ['title' => 'Het bos in', 'body' => 'dum. Phasellus auctor molestie urna, vitae volutpat leo rutrum id. Morbi sodales elit et dui molestie, vitae pulvinar ligula faucibus. Donec consequat nisi sit amet lectus tempor, et efficitur augue consequat. Nullam a nibh bibendum, bibendum mi vitae, blandit sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec vel erat eu justo varius venenatis vel in odio. Proin non lobortis neque'],
            ['title' => 'De straat op', 'body' => 'dum. Phasellus auctor molestie urna, vitae volutpat leo rutrum id. Morbi sodales elit et dui molestie, vitae pulvinar ligula faucibus. Donec consequat nisi sit amet lectus tempor, et efficitur augue consequat. Nullam a nibh bibendum, bibendum mi vitae, blandit sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec vel erat eu justo varius venenatis vel in odio. Proin non lobortis neque'],
            ['title' => 'Het park in', 'body' => 'dum. Phasellus auctor molestie urna, vitae volutpat leo rutrum id. Morbi sodales elit et dui molestie, vitae pulvinar ligula faucibus. Donec consequat nisi sit amet lectus tempor, et efficitur augue consequat. Nullam a nibh bibendum, bibendum mi vitae, blandit sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec vel erat eu justo varius venenatis vel in odio. Proin non lobortis neque'],
            ['title' => 'De boom in', 'body' => 'dum. Phasellus auctor molestie urna, vitae volutpat leo rutrum id. Morbi sodales elit et dui molestie, vitae pulvinar ligula faucibus. Donec consequat nisi sit amet lectus tempor, et efficitur augue consequat. Nullam a nibh bibendum, bibendum mi vitae, blandit sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec vel erat eu justo varius venenatis vel in odio. Proin non lobortis neque'],
        ];

        for($index = 0; $index < 1000; $index++) {
            $article = new Article();
            
            $article->title = $articles[rand(0, 3)]['title'];
            $article->body = $articles[rand(0, 3)]['body'];

            $article->save();
        }
    }
}
