<?php

declare(strict_types=1);

namespace BVP\Types\Tests\Enums;

use BVP\Types\Enums\WindDirection;

/**
 * @author shimomo
 */
final class WindDirectionDataProvider
{
    /**
     * @return non-empty-list<array{
     *     argument: int<1, 17>,
     *     expected: non-empty-string,
     * }>
     */
    public static function nameProvider(): array
    {
        return [
            ['argument' => 1, 'expected' => '北'],
            ['argument' => 2, 'expected' => '北北東'],
            ['argument' => 3, 'expected' => '北東'],
            ['argument' => 4, 'expected' => '東北東'],
            ['argument' => 5, 'expected' => '東'],
            ['argument' => 6, 'expected' => '東南東'],
            ['argument' => 7, 'expected' => '南東'],
            ['argument' => 8, 'expected' => '南南東'],
            ['argument' => 9, 'expected' => '南'],
            ['argument' => 10, 'expected' => '南南西'],
            ['argument' => 11, 'expected' => '南西'],
            ['argument' => 12, 'expected' => '西南西'],
            ['argument' => 13, 'expected' => '西'],
            ['argument' => 14, 'expected' => '西北西'],
            ['argument' => 15, 'expected' => '北西'],
            ['argument' => 16, 'expected' => '北北西'],
            ['argument' => 17, 'expected' => '無風'],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     argument: non-empty-string,
     *     expected: \BVP\Types\Enums\WindDirection,
     * }>
     */
    public static function fromNameProvider(): array
    {
        return [
            ['argument' => '北', 'expected' => WindDirection::北],
            ['argument' => '北北東', 'expected' => WindDirection::北北東],
            ['argument' => '北東', 'expected' => WindDirection::北東],
            ['argument' => '東北東', 'expected' => WindDirection::東北東],
            ['argument' => '東', 'expected' => WindDirection::東],
            ['argument' => '東南東', 'expected' => WindDirection::東南東],
            ['argument' => '南東', 'expected' => WindDirection::南東],
            ['argument' => '南南東', 'expected' => WindDirection::南南東],
            ['argument' => '南', 'expected' => WindDirection::南],
            ['argument' => '南南西', 'expected' => WindDirection::南南西],
            ['argument' => '南西', 'expected' => WindDirection::南西],
            ['argument' => '西南西', 'expected' => WindDirection::西南西],
            ['argument' => '西', 'expected' => WindDirection::西],
            ['argument' => '西北西', 'expected' => WindDirection::西北西],
            ['argument' => '北西', 'expected' => WindDirection::北西],
            ['argument' => '北北西', 'expected' => WindDirection::北北西],
            ['argument' => '無風', 'expected' => WindDirection::無風],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     expected: non-empty-list<array{
     *         number: int<1, 17>,
     *         name: non-empty-string,
     *     }>,
     * }>
     */
    public static function toArrayProvider(): array
    {
        return [
            [
                'expected' => [
                    ['number' => 1, 'name' => '北'],
                    ['number' => 2, 'name' => '北北東'],
                    ['number' => 3, 'name' => '北東'],
                    ['number' => 4, 'name' => '東北東'],
                    ['number' => 5, 'name' => '東'],
                    ['number' => 6, 'name' => '東南東'],
                    ['number' => 7, 'name' => '南東'],
                    ['number' => 8, 'name' => '南南東'],
                    ['number' => 9, 'name' => '南'],
                    ['number' => 10, 'name' => '南南西'],
                    ['number' => 11, 'name' => '南西'],
                    ['number' => 12, 'name' => '西南西'],
                    ['number' => 13, 'name' => '西'],
                    ['number' => 14, 'name' => '西北西'],
                    ['number' => 15, 'name' => '北西'],
                    ['number' => 16, 'name' => '北北西'],
                    ['number' => 17, 'name' => '無風'],
                ],
            ],
        ];
    }
}
