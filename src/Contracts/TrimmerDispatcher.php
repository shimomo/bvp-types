<?php

declare(strict_types=1);

namespace BVP\Types\Contracts;

/**
 * @author shimomo
 */
interface TrimmerDispatcher
{
    /**
     * @param mixed $items
     * @param ?string $characters
     * @param ?string $encoding
     * @return mixed
     */
    public function trim(
        mixed $items,
        ?string $characters = null,
        ?string $encoding = null
    ): mixed;

    /**
     * @param mixed $items
     * @param ?string $characters
     * @param ?string $encoding
     * @return mixed
     */
    public function ltrim(
        mixed $items,
        ?string $characters = null,
        ?string $encoding = null
    ): mixed;

    /**
     * @param mixed $items
     * @param ?string $characters
     * @param ?string $encoding
     * @return mixed
     */
    public function rtrim(
        mixed $items,
        ?string $characters = null,
        ?string $encoding = null
    ): mixed;

    /**
     * @param mixed $items
     * @param ?string $characters
     * @param ?string $encoding
     * @return mixed
     */
    public function trimStart(
        mixed $items,
        ?string $characters = null,
        ?string $encoding = null
    ): mixed;

    /**
     * @param mixed $items
     * @param ?string $characters
     * @param ?string $encoding
     * @return mixed
     */
    public function trimEnd(
        mixed $items,
        ?string $characters = null,
        ?string $encoding = null
    ): mixed;
}
