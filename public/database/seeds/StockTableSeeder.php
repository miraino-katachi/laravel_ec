<?php

use Illuminate\Database\Seeder;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->truncate();
        DB::table('stocks')->insert([
            'name' => 'フィルムカメラ',
            'detail' => '1960年式のカメラです',
            'fee' => 200000,
            'img_path' => 'filmcamera.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'イヤホン',
            'detail' => 'ノイズキャンセリングがついてます',
            'fee' => 20000,
            'img_path' => 'iyahon.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => '時計',
            'detail' => '1980年式の掛け時計です',
            'fee' => 120000,
            'img_path' => 'clock.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => '地球儀',
            'detail' => '珍しい商品です',
            'fee' => 120000,
            'img_path' => 'earth.jpg',
        ]);


        DB::table('stocks')->insert([
            'name' => '腕時計',
            'detail' => 'プレゼントにどうぞ',
            'fee' => 9800,
            'img_path' => 'watch.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'カメラレンズ35mm',
            'detail' => '最新式です',
            'fee' => 79800,
            'img_path' => 'lens.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'シャンパン',
            'detail' => 'パーティにどうぞ',
            'fee' => 800,
            'img_path' => 'shanpan.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'ビール',
            'detail' => '大量生産されたビールです',
            'fee' => 200,
            'img_path' => 'beer.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'やかん',
            'detail' => 'かなり珍しいやかんです',
            'fee' => 1200,
            'img_path' => 'yakan.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => '精米',
            'detail' => '米30Kgです',
            'fee' => 11200,
            'img_path' => 'kome.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'パソコン',
            'detail' => 'ジャンク品です',
            'fee' => 11200,
            'img_path' => 'pc.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'アコースティックギター',
            'detail' => 'ヤマハ製のエントリーモデルです',
            'fee' => 25600,
            'img_path' => 'aguiter.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'エレキギター',
            'detail' => '初心者向けのエントリーモデルです',
            'fee' => 15600,
            'img_path' => 'eguiter.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => '加湿器',
            'detail' => '乾燥する季節の必需品',
            'fee' => 3200,
            'img_path' => 'steamer.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'マウス',
            'detail' => 'ゲーミングマウスです',
            'fee' => 4200,
            'img_path' => 'mouse.jpeg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'Android Garxy10',
            'detail' => '中古美品です',
            'fee' => 84200,
            'img_path' => 'mobile.jpg',
        ]);
    }
}
