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
      'body' => "# マークダウンのテストデータ",
      'created_at' => '2019-07-02 12:00:00',
      'updated_at' => '2019-07-02 12:00:00'
    ]);

    DB::table('comments')->insert([
      'body' => "# タイトルは h1 や h2 タグになる
## レベル2の見出し
- 箇条書きは ul タグになる
- 箇条書き項目2",
      'created_at' => '2019-07-02 12:01:00',
      'updated_at' => '2019-07-02 12:01:00'
    ]);

    DB::table('comments')->insert([
      'body' => "# 改行を2つ重ねると\n\n表示上で改行され，新しい段落になる．\n\np タグで囲われます．",
      'created_at' => '2019-07-02 12:02:00',
      'updated_at' => '2019-07-02 12:02:00'
    ]);

    DB::table('comments')->insert([
      'body' => "# 段落内での改行\n\n段落内で改行したい場合は  \n改行の前にスペースを2つ入力すると良い",
      'created_at' => '2019-07-02 12:02:30',
      'updated_at' => '2019-07-02 12:02:30'
    ]);

    DB::table('comments')->insert([
      'body' => "# 箇条書き\n\n- ハイフン\n- ハイフンを先頭に\n    - 階層化\n    - 先頭にスペースを入れて階層化\n- 元のレベル",
      'created_at' => '2019-07-02 12:03:00',
      'updated_at' => '2019-07-02 12:03:00'
    ]);

    DB::table('comments')->insert([
      'body' => "# 箇条書き\n\n* アスタリスク\n* アスタリスクを先頭に\n    * 階層化\n    * 先頭にスペースを入れて階層化\n* 元のレベル",
      'created_at' => '2019-07-02 12:03:10',
      'updated_at' => '2019-07-02 12:03:10'
    ]);

    DB::table('comments')->insert([
      'body' => "# 箇条書き\n\n+ プラス記号\n+ プラス記号を先頭に\n    + 階層化\n    + 先頭にスペースを入れて階層化\n+ 元のレベル",
      'created_at' => '2019-07-02 12:03:20',
      'updated_at' => '2019-07-02 12:03:20'
    ]);

    DB::table('comments')->insert([
      'body' => "# 番号付き箇条書き\n\n1. 番号付きの箇条書き\n1. 二つ目の項目",
      'created_at' => '2019-07-02 12:04:00',
      'updated_at' => '2019-07-02 12:04:00'
    ]);

    DB::table('comments')->insert([
      'body' => "# コードブロック\n\n 半角スペースを4個入れるとコードブロック => pre タグが入る\n\n    public function index()\n    {\n        dd('index');\n    }",
      'created_at' => '2019-07-02 12:05:00',
      'updated_at' => '2019-07-02 12:05:00'
    ]);

    DB::table('comments')->insert([
      'body' => "# 本文中のコードブロック\n\n本文の `sorce code` をバッククォートで囲むとその部分が code の一部になる（code タグで囲われるので，フォントが変わる）．",
      'created_at' => '2019-07-02 12:06:00',
      'updated_at' => '2019-07-02 12:06:00'
    ]);

    DB::table('comments')->insert([
      'body' => "# 強調\n\n本文ので*強調 (italic) したい*ところ．**強調 (bold) したい**ところ．***強調 (bold italic) したい***ところ．",
      'created_at' => '2019-07-02 12:07:00',
      'updated_at' => '2019-07-02 12:07:00'
    ]);

    DB::table('comments')->insert([
      'body' => "# 水平線\n\n- ハイフンを3つ重ねると水平線になる\n\n--- \n\n- 水平線が表示されました．",
      'created_at' => '2019-07-02 12:08:00',
      'updated_at' => '2019-07-02 12:08:00'
    ]);

    DB::table('comments')->insert([
      'body' => "# リンク\n\n- [Google先生](https://www.google.com/)\n\n- [https://www.kobegakuin.ac.jp/](https://www.kobegakuin.ac.jp/)",
      'created_at' => '2019-07-02 12:09:00',
      'updated_at' => '2019-07-02 12:09:00'
    ]);

    DB::table('comments')->insert([
      'body' => "## MathJax\r\n- MathJaxを使って \\\\(ax^2 + bx + c = 0\\\\) のように数式が書けます．\r\n\r\n- インライン数式は＼＼（数式＼＼）のように書きます．",
      'created_at' => '2019-07-02 12:10:00',
      'updated_at' => '2019-07-02 12:10:00'
    ]);

    DB::table('comments')->insert([
      'body' => "## MathJax\r\n- ディスプレイ数式は＄＄数式＄＄ で書くことができます．\$\$\int_{0}^{t_0}S(x)dx\$\$",
      'created_at' => '2019-07-02 12:11:00',
      'updated_at' => '2019-07-02 12:11:00'
    ]);

  }
}
