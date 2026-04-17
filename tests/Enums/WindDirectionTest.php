<?php

declare(strict_types=1);

namespace BVP\Types\Tests\Enums;

use BVP\Types\Enums\WindDirection;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use ValueError;

/**
 * @author shimomo
 */
final class WindDirectionTest extends TestCase
{
    /**
     * @param int<1, 17> $argument
     * @param non-empty-string $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(WindDirectionDataProvider::class, 'nameProvider')]
    public function nameReturnsExpectedLabel(int $argument, string $expected): void
    {
        $this->assertSame($expected, WindDirection::from($argument)->name());
    }

    /**
     * @param non-empty-string $argument
     * @param \BVP\Types\Enums\WindDirection $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(WindDirectionDataProvider::class, 'fromNameProvider')]
    public function fromNameReturnsExpectedCase(string $argument, WindDirection $expected): void
    {
        $this->assertSame($expected, WindDirection::fromName($argument));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromNameReturnsNullWhenGivenNull(): void
    {
        $this->assertNull(WindDirection::fromName(null));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromNameThrowsValueErrorWhenGivenInvalidName(): void
    {
        $this->expectException(ValueError::class);

        WindDirection::fromName('東西南北');
    }

    /**
     * @return void
     */
    #[Test]
    public function toArrayReturnsAllCases(): void
    {
        $this->assertCount(17, WindDirection::toArray());
    }

    /**
     * @param non-empty-list<array{
     *     number: int<1, 17>,
     *     name: non-empty-string,
     * }> $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(WindDirectionDataProvider::class, 'toArrayProvider')]
    public function toArrayReturnsCorrectValues(array $expected): void
    {
        $this->assertSame($expected, WindDirection::toArray());
    }
}
