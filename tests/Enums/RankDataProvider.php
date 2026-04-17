<?php

declare(strict_types=1);

namespace BVP\Types\Tests\Enums;

use BVP\Types\Enums\Rank;

/**
 * @author shimomo
 */
final class RankDataProvider
{
    /**
     * @return non-empty-list<array{
     *     argument: int<1, 4>,
     *     expected: non-empty-string,
     * }>
     */
    public static function nameProvider(): array
    {
        return [
            ['argument' => 1, 'expected' => 'A1級'],
            ['argument' => 2, 'expected' => 'A2級'],
            ['argument' => 3, 'expected' => 'B1級'],
            ['argument' => 4, 'expected' => 'B2級'],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     argument: int<1, 4>,
     *     expected: non-empty-string,
     * }>
     */
    public static function shortNameProvider(): array
    {
        return [
            ['argument' => 1, 'expected' => 'A1'],
            ['argument' => 2, 'expected' => 'A2'],
            ['argument' => 3, 'expected' => 'B1'],
            ['argument' => 4, 'expected' => 'B2'],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     argument: non-empty-string,
     *     expected: \BVP\Types\Enums\Rank,
     * }>
     */
    public static function fromNameProvider(): array
    {
        return [
            ['argument' => 'A1級', 'expected' => Rank::A1級],
            ['argument' => 'A2級', 'expected' => Rank::A2級],
            ['argument' => 'B1級', 'expected' => Rank::B1級],
            ['argument' => 'B2級', 'expected' => Rank::B2級],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     argument: non-empty-string,
     *     expected: \BVP\Types\Enums\Rank,
     * }>
     */
    public static function fromShortNameProvider(): array
    {
        return [
            ['argument' => 'A1', 'expected' => Rank::A1級],
            ['argument' => 'A2', 'expected' => Rank::A2級],
            ['argument' => 'B1', 'expected' => Rank::B1級],
            ['argument' => 'B2', 'expected' => Rank::B2級],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     expected: non-empty-list<array{
     *         number: int<1, 4>,
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
                    ['number' => 1, 'name' => 'A1級', 'short_name' => 'A1'],
                    ['number' => 2, 'name' => 'A2級', 'short_name' => 'A2'],
                    ['number' => 3, 'name' => 'B1級', 'short_name' => 'B1'],
                    ['number' => 4, 'name' => 'B2級', 'short_name' => 'B2'],
                ],
            ],
        ];
    }
}
