<?php

declare(strict_types=1);

namespace BVP\Types\Tests\Enums;

use BVP\Types\Enums\Technique;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use ValueError;

/**
 * @author shimomo
 */
final class TechniqueTest extends TestCase
{
    /**
     * @param int<1, 6> $argument
     * @param non-empty-string $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(TechniqueDataProvider::class, 'nameProvider')]
    public function nameReturnsExpectedLabel(int $argument, string $expected): void
    {
        $this->assertSame($expected, Technique::from($argument)->name());
    }

    /**
     * @param non-empty-string $argument
     * @param \BVP\Types\Enums\Technique $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(TechniqueDataProvider::class, 'fromNameProvider')]
    public function fromNameReturnsExpectedCase(string $argument, Technique $expected): void
    {
        $this->assertSame($expected, Technique::fromName($argument));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromNameReturnsNullWhenGivenNull(): void
    {
        $this->assertNull(Technique::fromName(null));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromNameThrowsValueErrorWhenGivenInvalidName(): void
    {
        $this->expectException(ValueError::class);

        Technique::fromName('つけまい');
    }

    /**
     * @return void
     */
    #[Test]
    public function toArrayReturnsAllCases(): void
    {
        $this->assertCount(6, Technique::toArray());
    }

    /**
     * @param non-empty-list<array{
     *     number: int<1, 6>,
     *     name: non-empty-string,
     * }> $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(TechniqueDataProvider::class, 'toArrayProvider')]
    public function toArrayReturnsCorrectValues(array $expected): void
    {
        $this->assertSame($expected, Technique::toArray());
    }
}
