<?php

declare(strict_types=1);

namespace BVP\Types\Contracts;

/**
 * @author shimomo
 */
interface Trimmer
{
    /**
     * @param ?\BVP\Types\Contracts\TrimmerDispatcher $trimmerDispatcher
     * @return \BVP\Types\Contracts\Trimmer
     */
    public static function instance(?TrimmerDispatcher $trimmerDispatcher = null): Trimmer;

    /**
     * @param ?\BVP\Types\Contracts\TrimmerDispatcher $trimmerDispatcher
     * @return \BVP\Types\Contracts\Trimmer
     */
    public static function create(?TrimmerDispatcher $trimmerDispatcher = null): Trimmer;

    /**
     * @return void
     */
    public static function reset(): void;
}
