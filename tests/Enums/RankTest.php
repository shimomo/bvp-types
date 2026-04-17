<?php

declare(strict_types=1);

namespace BVP\Types\Tests\Enums;

use BVP\Types\Enums\Rank;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use ValueError;

/**
 * @author shimomo
 */
final class RankTest extends TestCase
{
    /**
     * @param int<1, 4> $argument
     * @param non-empty-string $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(RankDataProvider::class, 'nameProvider')]
    public function nameReturnsExpectedLabel(int $argument, string $expected): void
    {
        $this->assertSame($expected, Rank::from($argument)->name());
    }

    /**
     * @param int<1, 4> $argument
     * @param non-empty-string $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(RankDataProvider::class, 'shortNameProvider')]
    public function shortNameReturnsExpectedLabel(int $argument, string $expected): void
    {
        $this->assertSame($expected, Rank::from($argument)->shortName());
    }

    /**
     * @param non-empty-string $argument
     * @param \BVP\Types\Enums\Rank $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(RankDataProvider::class, 'fromNameProvider')]
    public function fromNameReturnsExpectedCase(string $argument, Rank $expected): void
    {
        $this->assertSame($expected, Rank::fromName($argument));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromNameReturnsNullWhenGivenNull(): void
    {
        $this->assertNull(Rank::fromName(null));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromNameThrowsValueErrorWhenGivenInvalidName(): void
    {
        $this->expectException(ValueError::class);

        Rank::fromName('S1級');
    }

    /**
     * @param non-empty-string $argument
     * @param \BVP\Types\Enums\Rank $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(RankDataProvider::class, 'fromShortNameProvider')]
    public function fromShortNameReturnsExpectedCase(string $argument, Rank $expected): void
    {
        $this->assertSame($expected, Rank::fromShortName($argument));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromShortNameReturnsNullWhenGivenNull(): void
    {
        $this->assertNull(Rank::fromShortName(null));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromShortNameThrowsValueErrorWhenGivenInvalidName(): void
    {
        $this->expectException(ValueError::class);

        Rank::fromShortName('S1');
    }

    /**
     * @return void
     */
    #[Test]
    public function toArrayReturnsAllCases(): void
    {
        $this->assertCount(4, Rank::toArray());
    }

    /**
     * @param non-empty-list<array{
     *     number: int<1, 4>,
     *     name: non-empty-string,
     *     short_name: non-empty-string,
     * }> $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(RankDataProvider::class, 'toArrayProvider')]
    public function toArrayReturnsCorrectValues(array $expected): void
    {
        $this->assertSame($expected, Rank::toArray());
    }
}
