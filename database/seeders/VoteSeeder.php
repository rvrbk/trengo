<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Visitor;
use Illuminate\Support\Facades\DB;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $votes = [];

        for($index = 0; $index < 10000; $index++) {
            $votes[] = ['article_id' => Article::inRandomOrder()->first()->id, 'visitor_id' => Visitor::getVisitorByIP(rand(1, 190) . '.' . rand(1, 190) . '.' . rand(1, 20) . '.' . rand(1, 9))->id, 'created_at' => date('c'), 'updated_at' => date('c')];
        }

        DB::table('votes')->insert($votes);
    }
}
