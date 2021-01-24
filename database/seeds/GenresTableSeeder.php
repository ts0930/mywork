<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('genres')->insert([
            [ 'name' => '美術' ],
            [  'name' => 'スポーツ' ],
            [  'name' => '経済' ],
            [ 'name' => 'ゲーム' ]
            ]);
    }
}
