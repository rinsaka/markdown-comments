<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('comments')->delete();

    DB::table('comments')->insert([
      'body' => "# マークダウンのテストデータ"
    ]);

    DB::table('comments')->insert([
      'body' => "# タイトルは h1 や h2 タグになる
## レベル2の見出し
- 箇条書きは ul タグになる
- 箇条書き項目2"
    ]);

    DB::table('comments')->insert([
      'body' => "# 改行を2つ重ねると\n\n表示上で改行され，新しい段落になる．\n\np タグで囲われます．"
    ]);

    DB::table('comments')->insert([
      'body' => "# 箇条書き\n\n- 箇条書き\n- 箇条書き\n    - 階層化\n    - 先頭にスペースを入れて階層化\n- 元のレベル"
    ]);

    DB::table('comments')->insert([
      'body' => "# 番号付き箇条書き\n\n1. 番号付きの箇条書き\n1. 二つ目の項目"
    ]);

    DB::table('comments')->insert([
      'body' => "# コードブロック\n\n 半角スペースを4個入れるとコードブロック => pre タグが入る\n\n    public function index()\n    {\n        dd('index');\n    }"
    ]);

    DB::table('comments')->insert([
      'body' => "# 本文中のコードブロック\n\n本文の `sorce code` をバッククォートで囲むとその部分が code の一部になる（code タグで囲われるので，フォントが変わる）．"
    ]);

    DB::table('comments')->insert([
      'body' => "# 強調\n\n本文ので*強調 (italic) したい*ところ．**強調 (bold) したい**ところ．***強調 (bold italic) したい***ところ．"
    ]);

    DB::table('comments')->insert([
      'body' => "# 水平線\n\n- ハイフンを3つ重ねると水平線になる\n\n--- \n\n- 水平線が表示されました．"
    ]);

    DB::table('comments')->insert([
      'body' => "# リンク\n\n- [Google先生](https://www.google.com/)\n\n- [https://www.kobegakuin.ac.jp/](https://www.kobegakuin.ac.jp/)"
    ]);

    DB::table('comments')->insert([
      'body' => "## MathJax\r\n- MathJaxを使って \\\\(ax^2 + bx + c = 0\\\\) のように数式が書けます．\r\n\r\n- インライン数式は＼＼（数式＼＼）のように書きます．"
    ]);

    DB::table('comments')->insert([
      'body' => "## MathJax\r\n- ディスプレイ数式は＄＄数式＄＄ で書くことができます．\$\$\int_{0}^{t_0}S(x)dx\$\$"
    ]);

  }
}
