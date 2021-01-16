<?php

class PostCommentSeeder extends Seeder{

public function run(){
	$content = 'この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。';

	$commentdammy = 'コメント。';

	for( $i = 1 ; $i <= 10 ; $i++) {
		$content = new Post;
		$content->title = "$i 番目の投稿";
		$content->content = $content;
		$content->cat_id = 1;
		$content->save();

		$maxComments = mt_rand(3, 15);
		for ($j=0; $j <= $maxComments; $j++) {
			$comment = new Comment;
			$comment->commenter = '名無しさん';
			$comment->comment = $commentdammy;

			// モデル(Post.php)のCommentsメソッドを読み込み、post_idにデータを保存する
			$post->comments()->save($comment);
			$post->increment('comment_count');
		}
	}

	// カテゴリーを追加する
	$cat1 = new Category;
	$cat1->name = "ファッション";
	$cat1->save();

	$cat2 = new Category;
	$cat2->name = "経済";
	$cat2->save();

}
}