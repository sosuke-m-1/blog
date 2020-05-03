<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert(
            [
                'title' => 'イントロダクション',
                'contents' => 'シーダ（初期値設定）クラスを使用し、テストデーターをデーターベースに設定するシンプルな方法もLaravelには備わっています。全シーダクラスはdatabase/seedsに保存します。シーダクラスには好きな名前を付けられます。しかしUsersTableSeederなどのような分かりやすい規則に従ったほうが良いでしょう。デフォルトとしてDatabaseSeederクラスが定義されています。このクラスからcallメソッドを使い他の初期値設定クラスを呼び出すことで、シーディングの順番をコントロールできます。'
            ],
            [
                'title' => 'シーダクラス定義',
                'contents' => 'シーダーを生成するには、make:seeder Artisanコマンドを実行します。フレームワークが生成するシーダーは全てdatabase/seedsディレクトリに設置されます。'
            ],
            [
                'title' => ' モデルファクトリの利用',
                'contents' => 'もちろんそれぞれのモデルシーダで属性をいちいち指定するのは面倒です。代わりに大量のデータベースレコードを生成するのに便利なモデルファクトリが使用できます。最初にモデルファクトリのドキュメントを読んで、どのように定義するのかを学んでください。ファクトリが定義できれば、データベースにレコードを挿入するfactoryヘルパ関数が利用できます。'
            ],
        );
    }
}
