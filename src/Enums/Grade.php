<?php

declare(strict_types=1);

namespace BVP\Types\Enums;

use ValueError;

/**
 * @author shimomo
 */
enum Grade: int
{
    case SG = 100;
    case G1 = 200;
    case PG1 = 210;
    case G2 = 300;
    case G3 = 400;
    case OPEN = 500;

    /**
     * @return non-empty-string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return ?self
     * @throws \ValueError
     */
    public static function fromName(?string $name): ?self
    {
        if ($name === null) {
            return null;
        }

        foreach (self::cases() as $case) {
            if ($case->name() === $name) {
                return $case;
            }
        }

        throw new ValueError(
            sprintf('`%s` is not a valid name for enum `%s`', $name, self::class)
        );
    }

    /**
     * @return list<array{
     *     number: int<100, 500>,
     *     name: non-empty-string,
     * }>
     */
    public static function toArray(): array
    {
        return array_map(fn($case) => [
            'number' => $case->value,
            'name' => $case->name(),
        ], self::cases());
    }
}
