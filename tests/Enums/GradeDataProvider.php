<?php

declare(strict_types=1);

namespace BVP\Types\Tests\Enums;

use BVP\Types\Enums\Grade;

/**
 * @author shimomo
 */
final class GradeDataProvider
{
    /**
     * @return non-empty-list<array{
     *     argument: int<100, 500>,
     *     expected: non-empty-string,
     * }>
     */
    public static function nameProvider(): array
    {
        return [
            ['argument' => 100, 'expected' => 'SG'],
            ['argument' => 200, 'expected' => 'G1'],
            ['argument' => 210, 'expected' => 'PG1'],
            ['argument' => 300, 'expected' => 'G2'],
            ['argument' => 400, 'expected' => 'G3'],
            ['argument' => 500, 'expected' => 'OPEN'],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     argument: non-empty-string,
     *     expected: \BVP\Types\Enums\Grade,
     * }>
     */
    public static function fromNameProvider(): array
    {
        return [
            ['argument' => 'SG', 'expected' => Grade::SG],
            ['argument' => 'G1', 'expected' => Grade::G1],
            ['argument' => 'PG1', 'expected' => Grade::PG1],
            ['argument' => 'G2', 'expected' => Grade::G2],
            ['argument' => 'G3', 'expected' => Grade::G3],
            ['argument' => 'OPEN', 'expected' => Grade::OPEN],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     expected: non-empty-list<array{
     *         number: int<100, 500>,
     *         name: non-empty-string,
     *     }>,
     * }>
     */
    public static function toArrayProvider(): array
    {
        return [
            [
                'expected' => [
                    ['number' => 100, 'name' => 'SG'],
                    ['number' => 200, 'name' => 'G1'],
                    ['number' => 210, 'name' => 'PG1'],
                    ['number' => 300, 'name' => 'G2'],
                    ['number' => 400, 'name' => 'G3'],
                    ['number' => 500, 'name' => 'OPEN'],
                ],
            ],
        ];
    }
}
