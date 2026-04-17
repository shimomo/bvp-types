<?php

declare(strict_types=1);

namespace BVP\Types\Tests\Enums;

use BVP\Types\Enums\Grade;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use ValueError;

/**
 * @author shimomo
 */
final class GradeTest extends TestCase
{
    /**
     * @param int<100, 500> $argument
     * @param non-empty-string $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(GradeDataProvider::class, 'nameProvider')]
    public function nameReturnsExpectedLabel(int $argument, string $expected): void
    {
        $this->assertSame($expected, Grade::from($argument)->name());
    }

    /**
     * @param non-empty-string $argument
     * @param \BVP\Types\Enums\Grade $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(GradeDataProvider::class, 'fromNameProvider')]
    public function fromNameReturnsExpectedCase(string $argument, Grade $expected): void
    {
        $this->assertSame($expected, Grade::fromName($argument));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromNameReturnsNullWhenGivenNull(): void
    {
        $this->assertNull(Grade::fromName(null));
    }

    /**
     * @return void
     */
    #[Test]
    public function fromNameThrowsValueErrorWhenGivenInvalidName(): void
    {
        $this->expectException(ValueError::class);

        Grade::fromName('S1級');
    }

    /**
     * @return void
     */
    #[Test]
    public function toArrayReturnsAllCases(): void
    {
        $this->assertCount(6, Grade::toArray());
    }

    /**
     * @param non-empty-list<array{
     *     number: int<100, 500>,
     *     name: non-empty-string,
     * }> $expected
     * @return void
     */
    #[Test]
    #[DataProviderExternal(GradeDataProvider::class, 'toArrayProvider')]
    public function toArrayReturnsCorrectValues(array $expected): void
    {
        $this->assertSame($expected, Grade::toArray());
    }
}
