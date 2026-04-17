<?php

declare(strict_types=1);

namespace BVP\Types\Tests\Enums;

use BVP\Types\Enums\Place;

/**
 * @author shimomo
 */
final class PlaceDataProvider
{
    /**
     * @return non-empty-list<array{
     *     argument: int<1, 16>,
     *     expected: non-empty-string,
     * }>
     */
    public static function nameProvider(): array
    {
        return [
            ['argument' => 1, 'expected' => '1着'],
            ['argument' => 2, 'expected' => '2着'],
            ['argument' => 3, 'expected' => '3着'],
            ['argument' => 4, 'expected' => '4着'],
            ['argument' => 5, 'expected' => '5着'],
            ['argument' => 6, 'expected' => '6着'],
            ['argument' => 7, 'expected' => '妨害失格'],
            ['argument' => 8, 'expected' => 'エンスト失格'],
            ['argument' => 9, 'expected' => '転覆失格'],
            ['argument' => 10, 'expected' => '落水失格'],
            ['argument' => 11, 'expected' => '沈没失格'],
            ['argument' => 12, 'expected' => '不完走失格'],
            ['argument' => 13, 'expected' => '失格'],
            ['argument' => 14, 'expected' => 'フライング'],
            ['argument' => 15, 'expected' => '出遅れ'],
            ['argument' => 16, 'expected' => '欠場'],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     argument: int<1, 16>,
     *     expected: non-empty-string,
     * }>
     */
    public static function shortNameProvider(): array
    {
        return [
            ['argument' => 1, 'expected' => '1'],
            ['argument' => 2, 'expected' => '2'],
            ['argument' => 3, 'expected' => '3'],
            ['argument' => 4, 'expected' => '4'],
            ['argument' => 5, 'expected' => '5'],
            ['argument' => 6, 'expected' => '6'],
            ['argument' => 7, 'expected' => '妨'],
            ['argument' => 8, 'expected' => 'エ'],
            ['argument' => 9, 'expected' => '転'],
            ['argument' => 10, 'expected' => '落'],
            ['argument' => 11, 'expected' => '沈'],
            ['argument' => 12, 'expected' => '不'],
            ['argument' => 13, 'expected' => '失'],
            ['argument' => 14, 'expected' => 'F'],
            ['argument' => 15, 'expected' => 'L'],
            ['argument' => 16, 'expected' => '欠'],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     argument: non-empty-string,
     *     expected: \BVP\Types\Enums\Place,
     * }>
     */
    public static function fromNameProvider(): array
    {
        return [
            ['argument' => '1着', 'expected' => Place::一着],
            ['argument' => '2着', 'expected' => Place::二着],
            ['argument' => '3着', 'expected' => Place::三着],
            ['argument' => '4着', 'expected' => Place::四着],
            ['argument' => '5着', 'expected' => Place::五着],
            ['argument' => '6着', 'expected' => Place::六着],
            ['argument' => '妨害失格', 'expected' => Place::妨害失格],
            ['argument' => 'エンスト失格', 'expected' => Place::エンスト失格],
            ['argument' => '転覆失格', 'expected' => Place::転覆失格],
            ['argument' => '落水失格', 'expected' => Place::落水失格],
            ['argument' => '沈没失格', 'expected' => Place::沈没失格],
            ['argument' => '不完走失格', 'expected' => Place::不完走失格],
            ['argument' => '失格', 'expected' => Place::失格],
            ['argument' => 'フライング', 'expected' => Place::フライング],
            ['argument' => '出遅れ', 'expected' => Place::出遅れ],
            ['argument' => '欠場', 'expected' => Place::欠場],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     argument: non-empty-string,
     *     expected: \BVP\Types\Enums\Place,
     * }>
     */
    public static function fromShortNameProvider(): array
    {
        return [
            ['argument' => '1', 'expected' => Place::一着],
            ['argument' => '2', 'expected' => Place::二着],
            ['argument' => '3', 'expected' => Place::三着],
            ['argument' => '4', 'expected' => Place::四着],
            ['argument' => '5', 'expected' => Place::五着],
            ['argument' => '6', 'expected' => Place::六着],
            ['argument' => '妨', 'expected' => Place::妨害失格],
            ['argument' => 'エ', 'expected' => Place::エンスト失格],
            ['argument' => '転', 'expected' => Place::転覆失格],
            ['argument' => '落', 'expected' => Place::落水失格],
            ['argument' => '沈', 'expected' => Place::沈没失格],
            ['argument' => '不', 'expected' => Place::不完走失格],
            ['argument' => '失', 'expected' => Place::失格],
            ['argument' => 'F', 'expected' => Place::フライング],
            ['argument' => 'L', 'expected' => Place::出遅れ],
            ['argument' => '欠', 'expected' => Place::欠場],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     expected: non-empty-list<array{
     *         number: int<1, 16>,
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
                    ['number' => 1, 'name' => '1着', 'short_name' => '1'],
                    ['number' => 2, 'name' => '2着', 'short_name' => '2'],
                    ['number' => 3, 'name' => '3着', 'short_name' => '3'],
                    ['number' => 4, 'name' => '4着', 'short_name' => '4'],
                    ['number' => 5, 'name' => '5着', 'short_name' => '5'],
                    ['number' => 6, 'name' => '6着', 'short_name' => '6'],
                    ['number' => 7, 'name' => '妨害失格', 'short_name' => '妨'],
                    ['number' => 8, 'name' => 'エンスト失格', 'short_name' => 'エ'],
                    ['number' => 9, 'name' => '転覆失格', 'short_name' => '転'],
                    ['number' => 10, 'name' => '落水失格', 'short_name' => '落'],
                    ['number' => 11, 'name' => '沈没失格', 'short_name' => '沈'],
                    ['number' => 12, 'name' => '不完走失格', 'short_name' => '不'],
                    ['number' => 13, 'name' => '失格', 'short_name' => '失'],
                    ['number' => 14, 'name' => 'フライング', 'short_name' => 'F'],
                    ['number' => 15, 'name' => '出遅れ', 'short_name' => 'L'],
                    ['number' => 16, 'name' => '欠場', 'short_name' => '欠'],
                ],
            ],
        ];
    }
}
