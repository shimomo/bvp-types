<?php

declare(strict_types=1);

namespace BVP\Types\Tests\Enums;

use BVP\Types\Enums\Weather;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use ValueError;

/**
 * @author shimomo
 */
final class WeatherTest extends TestCase
{
    /**
     * @param int<1, 5> $argument
     * @param non-empty-string $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(WeatherDataProvider::class, 'nameProvider')]
    public function nameReturnsExpectedLabel(int $argument, string $expected): void
    {
        $this->assertSame($expected, Weather::from($argument)->name());
    }

    /**
     * @param int<1, 5> $argument
     * @param non-empty-string $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(WeatherDataProvider::class, 'shortNameProvider')]
    public function shortNameReturnsExpectedLabel(int $argument, string $expected): void
    {
        $this->assertSame($expected, Weather::from($argument)->shortName());
    }

    /**
     * @param non-empty-string $argument
     * @param \BVP\Types\Enums\Weather $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(WeatherDataProvider::class, 'fromNameProvider')]
    public function fromNameReturnsExpectedCase(string $argument, Weather $expected): void
    {
        $this->assertSame($expected, Weather::fromName($argument));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromNameReturnsNullWhenGivenNull(): void
    {
        $this->assertNull(Weather::fromName(null));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromNameThrowsValueErrorWhenGivenInvalidName(): void
    {
        $this->expectException(ValueError::class);

        Weather::fromName('暴風雨');
    }

    /**
     * @param non-empty-string $argument
     * @param \BVP\Types\Enums\Weather $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(WeatherDataProvider::class, 'fromShortNameProvider')]
    public function fromShortNameReturnsExpectedCase(string $argument, Weather $expected): void
    {
        $this->assertSame($expected, Weather::fromShortName($argument));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromShortNameReturnsNullWhenGivenNull(): void
    {
        $this->assertNull(Weather::fromShortName(null));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromShortNameThrowsValueErrorWhenGivenInvalidName(): void
    {
        $this->expectException(ValueError::class);

        Weather::fromShortName('暴風雨');
    }

    /**
     * @return void
     */
    #[Test]
    public function toArrayReturnsAllCases(): void
    {
        $this->assertCount(5, Weather::toArray());
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
    #[DataProviderExternal(WeatherDataProvider::class, 'toArrayProvider')]
    public function toArrayReturnsCorrectValues(array $expected): void
    {
        $this->assertSame($expected, Weather::toArray());
    }
}
