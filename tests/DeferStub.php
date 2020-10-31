<?php

declare(strict_types=1);

namespace ReactParallel\Tests\ObjectProxy\Attribute;

use ReactParallel\ObjectProxy\Attribute\Defer;

final class DeferStub
{
    /**
     * @Defer()
     */
    public function withDefer(): void
    {
    }

    public function withOutDefer(): void
    {
    }
}
