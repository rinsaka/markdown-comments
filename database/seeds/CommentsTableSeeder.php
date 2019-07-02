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
      'body' => '# タイトル'
    ]);

    DB::table('comments')->insert([
      'body' => '## サブタイトル\n- 箇条書き1\n- 箇条書き項目2'
    ]);
  }
}
