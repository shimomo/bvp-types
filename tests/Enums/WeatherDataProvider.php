<?php

declare(strict_types=1);

namespace BVP\Types\Tests\Enums;

use BVP\Types\Enums\Weather;

/**
 * @author shimomo
 */
final class WeatherDataProvider
{
    /**
     * @return non-empty-list<array{
     *     argument: int<1, 5>,
     *     expected: non-empty-string,
     * }>
     */
    public static function nameProvider(): array
    {
        return [
            ['argument' => 1, 'expected' => '晴'],
            ['argument' => 2, 'expected' => '曇り'],
            ['argument' => 3, 'expected' => '雨'],
            ['argument' => 4, 'expected' => '雪'],
            ['argument' => 5, 'expected' => '霧'],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     argument: int<1, 5>,
     *     expected: non-empty-string,
     * }>
     */
    public static function shortNameProvider(): array
    {
        return [
            ['argument' => 1, 'expected' => '晴'],
            ['argument' => 2, 'expected' => '曇'],
            ['argument' => 3, 'expected' => '雨'],
            ['argument' => 4, 'expected' => '雪'],
            ['argument' => 5, 'expected' => '霧'],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     argument: non-empty-string,
     *     expected: \BVP\Types\Enums\Weather,
     * }>
     */
    public static function fromNameProvider(): array
    {
        return [
            ['argument' => '晴', 'expected' => Weather::晴],
            ['argument' => '曇り', 'expected' => Weather::曇り],
            ['argument' => '雨', 'expected' => Weather::雨],
            ['argument' => '雪', 'expected' => Weather::雪],
            ['argument' => '霧', 'expected' => Weather::霧],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     argument: non-empty-string,
     *     expected: \BVP\Types\Enums\Weather,
     * }>
     */
    public static function fromShortNameProvider(): array
    {
        return [
            ['argument' => '晴', 'expected' => Weather::晴],
            ['argument' => '曇', 'expected' => Weather::曇り],
            ['argument' => '雨', 'expected' => Weather::雨],
            ['argument' => '雪', 'expected' => Weather::雪],
            ['argument' => '霧', 'expected' => Weather::霧],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     expected: non-empty-list<array{
     *         number: int<1, 5>,
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
                    ['number' => 1, 'name' => '晴', 'short_name' => '晴'],
                    ['number' => 2, 'name' => '曇り', 'short_name' => '曇'],
                    ['number' => 3, 'name' => '雨', 'short_name' => '雨'],
                    ['number' => 4, 'name' => '雪', 'short_name' => '雪'],
                    ['number' => 5, 'name' => '霧', 'short_name' => '霧'],
                ],
            ],
        ];
    }
}
