<?php

use App\Models\Game;
use App\Models\GamePublisher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pub = GamePublisher::create([
            'name' => Str::random(10),
        ]);

        Game::create([
            'name' => Str::random(10),
            'desc' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odio dicta asperiores quasi non molestias ab sit, debitis suscipit nulla. Consequatur!',
            'price' => 200,
            'pub_id' => $pub->id,
            'img' => 'hm'
        ]);
    }
}
