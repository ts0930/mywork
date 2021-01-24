<?php

use Illuminate\Database\Seeder;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        {
    \DB::table('contents')->insert([
        [
            'id' => '1',
            'title' => '15歳で130m弾 父は元NPB選手
',
            'url' => 'https://news.yahoo.co.jp/pickup/6383123',
            'users_id'=>'1',
            'genres_id'=>'1',
            'words'=>'小野勝利',
            'bodies'=>'今夏の甲子園で注目されるのが、中学球界屈指の長距離砲として活躍した狭山西武ボーイズの小野勝利内野手（3年）だ。元プロ野球選手の父を持ち、身長180センチ、体重86キロと中学生離れした体格。中学通算28本塁打をマークした。中学卒業後に神奈川県の強豪校に進学するスーパー中学生の魅力に迫った。',
            'image'=>'public/img/img/home-bg.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
         ],
       ]);
}
}