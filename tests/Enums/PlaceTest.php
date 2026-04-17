<?php

declare(strict_types=1);

namespace BVP\Types\Tests\Enums;

use BVP\Types\Enums\Place;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use ValueError;

/**
 * @author shimomo
 */
final class PlaceTest extends TestCase
{
    /**
     * @param int<1, 5> $argument
     * @param non-empty-string $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(PlaceDataProvider::class, 'nameProvider')]
    public function nameReturnsExpectedLabel(int $argument, string $expected): void
    {
        $this->assertSame($expected, Place::from($argument)->name());
    }

    /**
     * @param int<1, 5> $argument
     * @param non-empty-string $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(PlaceDataProvider::class, 'shortNameProvider')]
    public function shortNameReturnsExpectedLabel(int $argument, string $expected): void
    {
        $this->assertSame($expected, Place::from($argument)->shortName());
    }

    /**
     * @param non-empty-string $argument
     * @param \BVP\Types\Enums\Place $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(PlaceDataProvider::class, 'fromNameProvider')]
    public function fromNameReturnsExpectedCase(string $argument, Place $expected): void
    {
        $this->assertSame($expected, Place::fromName($argument));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromNameReturnsNullWhenGivenNull(): void
    {
        $this->assertNull(Place::fromName(null));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromNameThrowsValueErrorWhenGivenInvalidName(): void
    {
        $this->expectException(ValueError::class);

        Place::fromName('暴風雨');
    }

    /**
     * @param non-empty-string $argument
     * @param \BVP\Types\Enums\Place $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(PlaceDataProvider::class, 'fromShortNameProvider')]
    public function fromShortNameReturnsExpectedCase(string $argument, Place $expected): void
    {
        $this->assertSame($expected, Place::fromShortName($argument));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromShortNameReturnsNullWhenGivenNull(): void
    {
        $this->assertNull(Place::fromShortName(null));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromShortNameThrowsValueErrorWhenGivenInvalidName(): void
    {
        $this->expectException(ValueError::class);

        Place::fromShortName('暴風雨');
    }

    /**
     * @return void
     */
    #[Test]
    public function toArrayReturnsAllCases(): void
    {
        $this->assertCount(16, Place::toArray());
    }

    /**
     * @param non-empty-list<array{
     *     number: int<1, 5>,
     *     name: non-empty-string,
     *     short_name: non-empty-string,
     * }> $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(PlaceDataProvider::class, 'toArrayProvider')]
    public function toArrayReturnsCorrectValues(array $expected): void
    {
        $this->assertSame($expected, Place::toArray());
    }
}
