<?php

declare(strict_types=1);

namespace Peck\ValueObjects;

/**
 * @internal
 */
final readonly class Misspelling
{
    /**
     * Creates a new instance of Issue.
     *
     * @param  array<int, string>  $suggestions
     */
    public function __construct(
        public string $word,
        public array $suggestions,
    ) {}
}
