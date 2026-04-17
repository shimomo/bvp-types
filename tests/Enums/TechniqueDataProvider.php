<?php

declare(strict_types=1);

namespace BVP\Types\Tests\Enums;

use BVP\Types\Enums\Technique;

/**
 * @author shimomo
 */
final class TechniqueDataProvider
{
    /**
     * @return non-empty-list<array{
     *     argument: int<1, 6>,
     *     expected: non-empty-string,
     * }>
     */
    public static function nameProvider(): array
    {
        return [
            ['argument' => 1, 'expected' => '逃げ'],
            ['argument' => 2, 'expected' => '差し'],
            ['argument' => 3, 'expected' => 'まくり'],
            ['argument' => 4, 'expected' => 'まくり差し'],
            ['argument' => 5, 'expected' => '抜き'],
            ['argument' => 6, 'expected' => '恵まれ'],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     argument: non-empty-string,
     *     expected: \BVP\Types\Enums\Technique,
     * }>
     */
    public static function fromNameProvider(): array
    {
        return [
            ['argument' => '逃げ', 'expected' => Technique::逃げ],
            ['argument' => '差し', 'expected' => Technique::差し],
            ['argument' => 'まくり', 'expected' => Technique::まくり],
            ['argument' => 'まくり差し', 'expected' => Technique::まくり差し],
            ['argument' => '抜き', 'expected' => Technique::抜き],
            ['argument' => '恵まれ', 'expected' => Technique::恵まれ],
        ];
    }

    /**
     * @return non-empty-list<array{
     *     expected: non-empty-list<array{
     *         number: int<1, 6>,
     *         name: non-empty-string,
     *     }>,
     * }>
     */
    public static function toArrayProvider(): array
    {
        return [
            [
                'expected' => [
                    ['number' => 1, 'name' => '逃げ'],
                    ['number' => 2, 'name' => '差し'],
                    ['number' => 3, 'name' => 'まくり'],
                    ['number' => 4, 'name' => 'まくり差し'],
                    ['number' => 5, 'name' => '抜き'],
                    ['number' => 6, 'name' => '恵まれ'],
                ],
            ],
        ];
    }
}
