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
            'title' => '15歳で130m弾 父は元NPB選手',
            'url' => 'https://news.yahoo.co.jp/pickup/6383123',
            'users_id'=>'1',
            'genres_id'=>'1',
            'words'=>'小野勝利',
            'bodies'=>'今夏の甲子園で注目されるのが、中学球界屈指の長距離砲として活躍した狭山西武ボーイズの小野勝利内野手（3年）だ。元プロ野球選手の父を持ち、身長180センチ、体重86キロと中学生離れした体格。中学通算28本塁打をマークした。中学卒業後に神奈川県の強豪校に進学するスーパー中学生の魅力に迫った。',
            'image'=>'public/img/img/home-bg.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
             ],
            
        [ 
            'id' => '2',
            'title' => '【ITエンジニアが学びたいプログラミング言語】No.1が決定　「Java」「JavaScript」を抑えて1位になったのは？【アンケート結果】',

            'url' => 'https://news.yahoo.co.jp/articles/0c1c881cf24464914a2edb83eefd9e9e32a59f2b',
            'users_id'=>'2',
            'genres_id'=>'2',
            'words'=>'Python',
            'bodies'=>'ITエンジニアなら誰しも考える「どのプログラミング言語を学ぶべきか？」という問題。人材大手のパーソルキャリア（東京都千代田区）が運営するIT人材向けコミュニティー「TECH Street」は、「2021年、ITエンジニアが学びたい（強化したい）プログラミング言語ランキング調査」を実施。納得の結果が浮かび上がりました。
                        ●第3位：JavaScript
　                          第3位はJavaScript、全体の5.9%の人から回答がありました。　多くのデバイスで活用されている、一般の人にもなじみ深いプログラミング言語の1つと言えるでしょう。Netscape Navigator 2.0で実装された歴史の長い言語です。誤解されがちですが、Javaとは別の物になります。　

                        ●第2位：Java
                        　  第2位はJava、9.3％の人から選ばれました。　C言語やC++を元に開発された言語です。JavaScriptと近い時期に登場し、こちらも長い間IT業界で支持され続けてきました。「Write once, run anywhere（一度書けばどのパソコンでも動く）」のスローガンを掲げています。

                        ●第1位：Python
　                          そして第1位はPythonでした。2位以下を大きく引き離し、32.8%のエンジニアが回答しました。　「インタプリタ（プログラミング言語で書かれたソースコードや中間表現を、逐一解釈しながら実行するプログラムのこと）」上で実行することを前提に、設計されたプログラミング言語です。必要なコード量の少なさなどから、初心者でも理解しやすい言語として人気です。',
            'image'=>'https://research.image.itmedia.co.jp/wp-content/uploads/2021/02/1612491732_20210204112336.png',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
             ],
           
            [  
            'id' => '3',
            'title' => 'KKBOX JAPAN 2020 年間ランキング発表',
            'url' => 'https://www.kkbox.com/jp/ja/column/showbiz-0-1634-1.html',
            'users_id'=>'3',
            'genres_id'=>'3',
            'words'=>'KKBOX',
            'bodies'=>'日本国内のKKBOXで2020年に最も再生された邦楽部門の楽曲は、 Official髭男dismの「I LOVE...」でした。「I LOVE...」は2020年を代表する人気テレビドラマとなった『恋はつづくよどこまでも』の主題歌に起用され多くの人から愛される曲となりました。また新型コロナウイルスの感染拡大が広がり始め世の中がネガティブな空気に包まれる中、「I LOVE...」が持つ普遍的な「愛する」というメッセージが、多くの背中を押してくれたのも人気となった要因なのではないでしょうか。そして2位にはYOASOBIの「夜に駆ける」がランクイン。CDリリースせずにデジタル配信のみであったにも関わらず「NHK紅白歌合戦」出場を果たします。まさに日本の「音楽サブスク時代」が本格的にスタートしたことを示してくれたアーティストと言えるでしょう。その他にも2020年はNiziU、DISH//、Uruが初めて年間TOP10入りするなど、例年に増して全体的にバラエティに富んだランキングとなっています。
            日本国内のKKBOXで2020年に最も再生された洋楽部門の楽曲は、The Chainsmokers feat.新田真剣佑の「Closer - Tokyo Remix」でした。「Closer」は2016年にリリース、 フィーチャリング アーティストにHalseyを迎え、全世界トータル楽曲再生数260億回を超える大ヒット曲となっています。その「Closer」を、日本はもちろん海外でも活躍する俳優・新田真剣佑がカバーし、2020年2月にThe ChainsmokersのニューアルバムWorld War Joy』日本盤に収録されたのが、夢の日米コラボレーション曲「Closer - Tokyo Remix」です。2位には Justin Bieberのソロ曲としてはじつに約4年ぶりとなるシングル「Yummy」が、3位には Lady GagaとAriana Grandeが初の共演となった「Rain On Me」がランクインしました。',
            'image'=>'https://i.kfs.io/article5/global/903,1634,3v1/original.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            
         ],
       ]);
}
}