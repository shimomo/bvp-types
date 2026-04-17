<?php

declare(strict_types=1);

namespace BVP\Types\Tests\Enums;

use BVP\Types\Enums\Prefecture;

/**
 * @author shimomo
 */
final class PrefectureDataProvider
{
    /**
     * @return non-empty-list<array{
     *     argument: int<1, 47>,
     *     expected: non-empty-string,
     * }>
     */
    public static function nameProvider(): array
    {
        return [
            ['argument' => 1, 'expected' => '北海道'],
            ['argument' => 2, 'expected' => '青森県'],
            ['argument' => 3, 'expected' => '岩手県'],
            ['argument' => 4, 'expected' => '宮城県'],
            ['argument' => 5, 'expected' => '秋田県'],
            ['argument' => 6, 'expected' => '山形県'],
            ['argument' => 7, 'expected' => '福島県'],
            ['argument' => 8, 'expected' => '茨城県'],
            ['argument' => 9, 'expected' => '栃木県'],
            ['argument' => 10, 'expected' => '群馬県'],
            ['argument' => 11, 'expected' => '埼玉県'],
            ['argument' => 12, 'expected' => '千葉県'],
            ['argument' => 13, 'expected' => '東京都'],
            ['argument' => 14, 'expected' => '神奈川県'],
            ['argument' => 15, 'expected' => '新潟県'],
            ['argument' => 16, 'expected' => '富山県'],
            ['argument' => 17, 'expected' => '石川県'],
            ['argument' => 18, 'expected' => '福井県'],
            ['argument' => 19, 'expected' => '山梨県'],
            ['argument' => 20, 'expected' => '長野県'],
            ['argument' => 21, 'expected' => '岐阜県'],
            ['argument' => 22, 'expected' => '静岡県'],
            ['argument' => 23, 'expected' => '愛知県'],
            ['argument' => 24, 'expected' => '三重県'],
            ['argument' => 25, 'expected' => '滋賀県'],
            ['argument' => 26, 'expected' => '京都府'],
            ['argument' => 27, 'expected' => '大阪府'],
            ['argument' => 28, 'expected' => '兵庫県'],
            ['argument' => 29, 'expected' => '奈良県'],
            ['argument' => 30, 'expected' => '和歌山県'],
            ['argument' => 31, 'expected' => '鳥取県'],
            ['argument' => 32, 'expected' => '島根県'],
            ['argument' => 33, 'expected' => '岡山県'],
            ['argument' => 34, 'expected' => '広島県'],
            ['argument' => 35, 'expected' => '山口県'],
            ['argument' => 36, 'expected' => '徳島県'],
            ['argument' => 37, 'expected' => '香川県'],
            ['argument' => 38, 'expected' => '愛媛県'],
            ['argument' => 39, 'expected' => '高知県'],
            ['argument' => 40, 'expected' => '福岡県'],
            ['argument' => 41, 'expected' => '佐賀県'],
            ['argument' => 42, 'expected' => '長崎県'],
            ['argument' => 43, 'expected' => '熊本県'],
            ['argument' => 44, 'expected' => '大分県'],
            ['argument' => 45, 'expected' => '宮崎県'],
            ['argument' => 46, 'expected' => '鹿児島県'],
            ['argument' => 47, 'expected' => '沖縄県'],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     argument: int<1, 47>,
     *     expected: non-empty-string,
     * }>
     */
    public static function shortNameProvider(): array
    {
        return [
            ['argument' => 1, 'expected' => '北海道'],
            ['argument' => 2, 'expected' => '青森'],
            ['argument' => 3, 'expected' => '岩手'],
            ['argument' => 4, 'expected' => '宮城'],
            ['argument' => 5, 'expected' => '秋田'],
            ['argument' => 6, 'expected' => '山形'],
            ['argument' => 7, 'expected' => '福島'],
            ['argument' => 8, 'expected' => '茨城'],
            ['argument' => 9, 'expected' => '栃木'],
            ['argument' => 10, 'expected' => '群馬'],
            ['argument' => 11, 'expected' => '埼玉'],
            ['argument' => 12, 'expected' => '千葉'],
            ['argument' => 13, 'expected' => '東京'],
            ['argument' => 14, 'expected' => '神奈川'],
            ['argument' => 15, 'expected' => '新潟'],
            ['argument' => 16, 'expected' => '富山'],
            ['argument' => 17, 'expected' => '石川'],
            ['argument' => 18, 'expected' => '福井'],
            ['argument' => 19, 'expected' => '山梨'],
            ['argument' => 20, 'expected' => '長野'],
            ['argument' => 21, 'expected' => '岐阜'],
            ['argument' => 22, 'expected' => '静岡'],
            ['argument' => 23, 'expected' => '愛知'],
            ['argument' => 24, 'expected' => '三重'],
            ['argument' => 25, 'expected' => '滋賀'],
            ['argument' => 26, 'expected' => '京都'],
            ['argument' => 27, 'expected' => '大阪'],
            ['argument' => 28, 'expected' => '兵庫'],
            ['argument' => 29, 'expected' => '奈良'],
            ['argument' => 30, 'expected' => '和歌山'],
            ['argument' => 31, 'expected' => '鳥取'],
            ['argument' => 32, 'expected' => '島根'],
            ['argument' => 33, 'expected' => '岡山'],
            ['argument' => 34, 'expected' => '広島'],
            ['argument' => 35, 'expected' => '山口'],
            ['argument' => 36, 'expected' => '徳島'],
            ['argument' => 37, 'expected' => '香川'],
            ['argument' => 38, 'expected' => '愛媛'],
            ['argument' => 39, 'expected' => '高知'],
            ['argument' => 40, 'expected' => '福岡'],
            ['argument' => 41, 'expected' => '佐賀'],
            ['argument' => 42, 'expected' => '長崎'],
            ['argument' => 43, 'expected' => '熊本'],
            ['argument' => 44, 'expected' => '大分'],
            ['argument' => 45, 'expected' => '宮崎'],
            ['argument' => 46, 'expected' => '鹿児島'],
            ['argument' => 47, 'expected' => '沖縄'],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     argument: non-empty-string,
     *     expected: \BVP\Types\Enums\Prefecture,
     * }>
     */
    public static function fromNameProvider(): array
    {
        return [
            ['argument' => '北海道', 'expected' => Prefecture::北海道],
            ['argument' => '青森県', 'expected' => Prefecture::青森県],
            ['argument' => '岩手県', 'expected' => Prefecture::岩手県],
            ['argument' => '宮城県', 'expected' => Prefecture::宮城県],
            ['argument' => '秋田県', 'expected' => Prefecture::秋田県],
            ['argument' => '山形県', 'expected' => Prefecture::山形県],
            ['argument' => '福島県', 'expected' => Prefecture::福島県],
            ['argument' => '茨城県', 'expected' => Prefecture::茨城県],
            ['argument' => '栃木県', 'expected' => Prefecture::栃木県],
            ['argument' => '群馬県', 'expected' => Prefecture::群馬県],
            ['argument' => '埼玉県', 'expected' => Prefecture::埼玉県],
            ['argument' => '千葉県', 'expected' => Prefecture::千葉県],
            ['argument' => '東京都', 'expected' => Prefecture::東京都],
            ['argument' => '神奈川県', 'expected' => Prefecture::神奈川県],
            ['argument' => '新潟県', 'expected' => Prefecture::新潟県],
            ['argument' => '富山県', 'expected' => Prefecture::富山県],
            ['argument' => '石川県', 'expected' => Prefecture::石川県],
            ['argument' => '福井県', 'expected' => Prefecture::福井県],
            ['argument' => '山梨県', 'expected' => Prefecture::山梨県],
            ['argument' => '長野県', 'expected' => Prefecture::長野県],
            ['argument' => '岐阜県', 'expected' => Prefecture::岐阜県],
            ['argument' => '静岡県', 'expected' => Prefecture::静岡県],
            ['argument' => '愛知県', 'expected' => Prefecture::愛知県],
            ['argument' => '三重県', 'expected' => Prefecture::三重県],
            ['argument' => '滋賀県', 'expected' => Prefecture::滋賀県],
            ['argument' => '京都府', 'expected' => Prefecture::京都府],
            ['argument' => '大阪府', 'expected' => Prefecture::大阪府],
            ['argument' => '兵庫県', 'expected' => Prefecture::兵庫県],
            ['argument' => '奈良県', 'expected' => Prefecture::奈良県],
            ['argument' => '和歌山県', 'expected' => Prefecture::和歌山県],
            ['argument' => '鳥取県', 'expected' => Prefecture::鳥取県],
            ['argument' => '島根県', 'expected' => Prefecture::島根県],
            ['argument' => '岡山県', 'expected' => Prefecture::岡山県],
            ['argument' => '広島県', 'expected' => Prefecture::広島県],
            ['argument' => '山口県', 'expected' => Prefecture::山口県],
            ['argument' => '徳島県', 'expected' => Prefecture::徳島県],
            ['argument' => '香川県', 'expected' => Prefecture::香川県],
            ['argument' => '愛媛県', 'expected' => Prefecture::愛媛県],
            ['argument' => '高知県', 'expected' => Prefecture::高知県],
            ['argument' => '福岡県', 'expected' => Prefecture::福岡県],
            ['argument' => '佐賀県', 'expected' => Prefecture::佐賀県],
            ['argument' => '長崎県', 'expected' => Prefecture::長崎県],
            ['argument' => '熊本県', 'expected' => Prefecture::熊本県],
            ['argument' => '大分県', 'expected' => Prefecture::大分県],
            ['argument' => '宮崎県', 'expected' => Prefecture::宮崎県],
            ['argument' => '鹿児島県', 'expected' => Prefecture::鹿児島県],
            ['argument' => '沖縄県', 'expected' => Prefecture::沖縄県],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     argument: non-empty-string,
     *     expected: \BVP\Types\Enums\Prefecture,
     * }>
     */
    public static function fromShortNameProvider(): array
    {
        return [
            ['argument' => '北海道', 'expected' => Prefecture::北海道],
            ['argument' => '青森', 'expected' => Prefecture::青森県],
            ['argument' => '岩手', 'expected' => Prefecture::岩手県],
            ['argument' => '宮城', 'expected' => Prefecture::宮城県],
            ['argument' => '秋田', 'expected' => Prefecture::秋田県],
            ['argument' => '山形', 'expected' => Prefecture::山形県],
            ['argument' => '福島', 'expected' => Prefecture::福島県],
            ['argument' => '茨城', 'expected' => Prefecture::茨城県],
            ['argument' => '栃木', 'expected' => Prefecture::栃木県],
            ['argument' => '群馬', 'expected' => Prefecture::群馬県],
            ['argument' => '埼玉', 'expected' => Prefecture::埼玉県],
            ['argument' => '千葉', 'expected' => Prefecture::千葉県],
            ['argument' => '東京', 'expected' => Prefecture::東京都],
            ['argument' => '神奈川', 'expected' => Prefecture::神奈川県],
            ['argument' => '新潟', 'expected' => Prefecture::新潟県],
            ['argument' => '富山', 'expected' => Prefecture::富山県],
            ['argument' => '石川', 'expected' => Prefecture::石川県],
            ['argument' => '福井', 'expected' => Prefecture::福井県],
            ['argument' => '山梨', 'expected' => Prefecture::山梨県],
            ['argument' => '長野', 'expected' => Prefecture::長野県],
            ['argument' => '岐阜', 'expected' => Prefecture::岐阜県],
            ['argument' => '静岡', 'expected' => Prefecture::静岡県],
            ['argument' => '愛知', 'expected' => Prefecture::愛知県],
            ['argument' => '三重', 'expected' => Prefecture::三重県],
            ['argument' => '滋賀', 'expected' => Prefecture::滋賀県],
            ['argument' => '京都', 'expected' => Prefecture::京都府],
            ['argument' => '大阪', 'expected' => Prefecture::大阪府],
            ['argument' => '兵庫', 'expected' => Prefecture::兵庫県],
            ['argument' => '奈良', 'expected' => Prefecture::奈良県],
            ['argument' => '和歌山', 'expected' => Prefecture::和歌山県],
            ['argument' => '鳥取', 'expected' => Prefecture::鳥取県],
            ['argument' => '島根', 'expected' => Prefecture::島根県],
            ['argument' => '岡山', 'expected' => Prefecture::岡山県],
            ['argument' => '広島', 'expected' => Prefecture::広島県],
            ['argument' => '山口', 'expected' => Prefecture::山口県],
            ['argument' => '徳島', 'expected' => Prefecture::徳島県],
            ['argument' => '香川', 'expected' => Prefecture::香川県],
            ['argument' => '愛媛', 'expected' => Prefecture::愛媛県],
            ['argument' => '高知', 'expected' => Prefecture::高知県],
            ['argument' => '福岡', 'expected' => Prefecture::福岡県],
            ['argument' => '佐賀', 'expected' => Prefecture::佐賀県],
            ['argument' => '長崎', 'expected' => Prefecture::長崎県],
            ['argument' => '熊本', 'expected' => Prefecture::熊本県],
            ['argument' => '大分', 'expected' => Prefecture::大分県],
            ['argument' => '宮崎', 'expected' => Prefecture::宮崎県],
            ['argument' => '鹿児島', 'expected' => Prefecture::鹿児島県],
            ['argument' => '沖縄', 'expected' => Prefecture::沖縄県],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     expected: non-empty-list<array{
     *         number: int<1, 47>,
     *         name: non-empty-string,
     *         short_name: non-empty-string,
     *     }>,
     * }>
     */
    public static function toArrayProvider(): array
    {
        return [
            [
                'expected' => [
                    ['number' => 1, 'name' => '北海道', 'short_name' => '北海道'],
                    ['number' => 2, 'name' => '青森県', 'short_name' => '青森'],
                    ['number' => 3, 'name' => '岩手県', 'short_name' => '岩手'],
                    ['number' => 4, 'name' => '宮城県', 'short_name' => '宮城'],
                    ['number' => 5, 'name' => '秋田県', 'short_name' => '秋田'],
                    ['number' => 6, 'name' => '山形県', 'short_name' => '山形'],
                    ['number' => 7, 'name' => '福島県', 'short_name' => '福島'],
                    ['number' => 8, 'name' => '茨城県', 'short_name' => '茨城'],
                    ['number' => 9, 'name' => '栃木県', 'short_name' => '栃木'],
                    ['number' => 10, 'name' => '群馬県', 'short_name' => '群馬'],
                    ['number' => 11, 'name' => '埼玉県', 'short_name' => '埼玉'],
                    ['number' => 12, 'name' => '千葉県', 'short_name' => '千葉'],
                    ['number' => 13, 'name' => '東京都', 'short_name' => '東京'],
                    ['number' => 14, 'name' => '神奈川県', 'short_name' => '神奈川'],
                    ['number' => 15, 'name' => '新潟県', 'short_name' => '新潟'],
                    ['number' => 16, 'name' => '富山県', 'short_name' => '富山'],
                    ['number' => 17, 'name' => '石川県', 'short_name' => '石川'],
                    ['number' => 18, 'name' => '福井県', 'short_name' => '福井'],
                    ['number' => 19, 'name' => '山梨県', 'short_name' => '山梨'],
                    ['number' => 20, 'name' => '長野県', 'short_name' => '長野'],
                    ['number' => 21, 'name' => '岐阜県', 'short_name' => '岐阜'],
                    ['number' => 22, 'name' => '静岡県', 'short_name' => '静岡'],
                    ['number' => 23, 'name' => '愛知県', 'short_name' => '愛知'],
                    ['number' => 24, 'name' => '三重県', 'short_name' => '三重'],
                    ['number' => 25, 'name' => '滋賀県', 'short_name' => '滋賀'],
                    ['number' => 26, 'name' => '京都府', 'short_name' => '京都'],
                    ['number' => 27, 'name' => '大阪府', 'short_name' => '大阪'],
                    ['number' => 28, 'name' => '兵庫県', 'short_name' => '兵庫'],
                    ['number' => 29, 'name' => '奈良県', 'short_name' => '奈良'],
                    ['number' => 30, 'name' => '和歌山県', 'short_name' => '和歌山'],
                    ['number' => 31, 'name' => '鳥取県', 'short_name' => '鳥取'],
                    ['number' => 32, 'name' => '島根県', 'short_name' => '島根'],
                    ['number' => 33, 'name' => '岡山県', 'short_name' => '岡山'],
                    ['number' => 34, 'name' => '広島県', 'short_name' => '広島'],
                    ['number' => 35, 'name' => '山口県', 'short_name' => '山口'],
                    ['number' => 36, 'name' => '徳島県', 'short_name' => '徳島'],
                    ['number' => 37, 'name' => '香川県', 'short_name' => '香川'],
                    ['number' => 38, 'name' => '愛媛県', 'short_name' => '愛媛'],
                    ['number' => 39, 'name' => '高知県', 'short_name' => '高知'],
                    ['number' => 40, 'name' => '福岡県', 'short_name' => '福岡'],
                    ['number' => 41, 'name' => '佐賀県', 'short_name' => '佐賀'],
                    ['number' => 42, 'name' => '長崎県', 'short_name' => '長崎'],
                    ['number' => 43, 'name' => '熊本県', 'short_name' => '熊本'],
                    ['number' => 44, 'name' => '大分県', 'short_name' => '大分'],
                    ['number' => 45, 'name' => '宮崎県', 'short_name' => '宮崎'],
                    ['number' => 46, 'name' => '鹿児島県', 'short_name' => '鹿児島'],
                    ['number' => 47, 'name' => '沖縄県', 'short_name' => '沖縄'],
                ],
            ],
        ];
    }
}
