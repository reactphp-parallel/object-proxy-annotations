<?php

declare(strict_types=1);

namespace ReactParallel\ObjectProxy\Attribute;

/**
 * @Annotation()
 */
final class Defer
{
    /** @var array<string, mixed> */
    private array $settings;

    /**
     * @param array<string, mixed> $settings
     */
    public function __construct(array $settings)
    {
        $this->settings = $settings;
    }

    /**
     * @return array<string, mixed>
     */
    public function settings(): array
    {
        return $this->settings;
    }
}
