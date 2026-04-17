<?php

declare(strict_types=1);

namespace BVP\Types\Tests\Enums;

use BVP\Types\Enums\Prefecture;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use ValueError;

/**
 * @author shimomo
 */
final class PrefectureTest extends TestCase
{
    /**
     * @param int<1, 47> $argument
     * @param non-empty-string $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(PrefectureDataProvider::class, 'nameProvider')]
    public function nameReturnsExpectedLabel(int $argument, string $expected): void
    {
        $this->assertSame($expected, Prefecture::from($argument)->name());
    }

    /**
     * @param int<1, 47> $argument
     * @param non-empty-string $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(PrefectureDataProvider::class, 'shortNameProvider')]
    public function shortNameReturnsExpectedLabel(int $argument, string $expected): void
    {
        $this->assertSame($expected, Prefecture::from($argument)->shortName());
    }

    /**
     * @param non-empty-string $argument
     * @param \BVP\Types\Enums\Prefecture $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(PrefectureDataProvider::class, 'fromNameProvider')]
    public function fromNameReturnsExpectedCase(string $argument, Prefecture $expected): void
    {
        $this->assertSame($expected, Prefecture::fromName($argument));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromNameReturnsNullWhenGivenNull(): void
    {
        $this->assertNull(Prefecture::fromName(null));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromNameThrowsValueErrorWhenGivenInvalidName(): void
    {
        $this->expectException(ValueError::class);

        Prefecture::fromName('琉球王国');
    }

    /**
     * @param non-empty-string $argument
     * @param \BVP\Types\Enums\Prefecture $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(PrefectureDataProvider::class, 'fromShortNameProvider')]
    public function fromShortNameReturnsExpectedCase(string $argument, Prefecture $expected): void
    {
        $this->assertSame($expected, Prefecture::fromShortName($argument));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromShortNameReturnsNullWhenGivenNull(): void
    {
        $this->assertNull(Prefecture::fromShortName(null));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromShortNameThrowsValueErrorWhenGivenInvalidName(): void
    {
        $this->expectException(ValueError::class);

        Prefecture::fromShortName('琉球王国');
    }

    /**
     * @return void
     */
    #[Test]
    public function toArrayReturnsAllCases(): void
    {
        $this->assertCount(47, Prefecture::toArray());
    }

    /**
     * @param non-empty-list<array{
     *     number: int<1, 47>,
     *     name: non-empty-string,
     *     short_name: non-empty-string,
     * }> $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(PrefectureDataProvider::class, 'toArrayProvider')]
    public function toArrayReturnsCorrectValues(array $expected): void
    {
        $this->assertSame($expected, Prefecture::toArray());
    }
}
