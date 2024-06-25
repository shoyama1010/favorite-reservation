<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shop;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shops = [
            [
                'name' => '仙人',
                'region' => '東京都',
                'genre' => '寿司',
                'description' => '料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日の食事、ビジネス接待まで気軽に使用することができます。',
                'image_url' => 'https://coachteach-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
            ],
            [
                'name' => '牛助',
                'region' => '大阪府',
                'genre' => '焼肉',
                'description' => '焼肉業界の超新星！肉の芸術品と言えるような見た目、味、どれをとっても極上のお肉を提供します。こだわりの焼肉は食べる価値ありです。',
                'image_url' => 'https://coachteach-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
            ],
            [
                'name' => '戦国',
                'region' => '福岡県',
                'genre' => '居酒屋',
                'description' => '気軽に立ち寄れる昔ながらの大衆居酒屋です。焼き鳥、刺身、炒め物、居酒屋定番メニューを豊富に揃えています。友達や同僚と一緒に楽しい時間を過ごすことができます。',
                'image_url' => 'https://coachteach-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg',
            ],
            [
                'name' => 'ルーク',
                'region' => '東京都',
                'genre' => 'イタリアン',
                'description' => '本場イタリアの味を再現したオーセンティックなイタリアンレストラン。おしゃれな雰囲気の中で、シェフ自慢のパスタやピザをお楽しみいただけます。',
                'image_url' => 'https://coachteach-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg',
            ],
            [
                'name' => '志摩屋',
                'region' => '福岡県',
                'genre' => 'ラーメン',
                'description' => '本場博多の味を堪能できるラーメン店。濃厚な豚骨スープに自家製麺が絡む一杯は、ラーメン好きにはたまらない逸品です。',
                'image_url' => 'https://coachteach-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg',
            ],
        ];

        foreach ($shops as $shop) {
            Shop::create($shop);
        }
    }
}
