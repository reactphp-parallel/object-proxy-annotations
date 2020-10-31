<?php

declare(strict_types=1);

namespace ReactParallel\Tests\ObjectProxy\Attribute;

use Doctrine\Common\Annotations\AnnotationReader;
use ReactParallel\ObjectProxy\Attribute\Defer;
use ReflectionMethod;
use WyriHaximus\TestUtilities\TestCase;

use function current;

final class DeferTest extends TestCase
{
    /**
     * @test
     */
    public function withDefer(): void
    {
        $annotations = (new AnnotationReader())->getMethodAnnotations(new ReflectionMethod(DeferStub::class, 'withDefer'));
        self::assertCount(1, $annotations);
        $annotation = current($annotations);
        self::assertInstanceOf(Defer::class, $annotation);
        self::assertSame([], $annotation->settings());
    }

    /**
     * @test
     */
    public function withOutDefer(): void
    {
        $annotations = (new AnnotationReader())->getMethodAnnotations(new ReflectionMethod(DeferStub::class, 'withOutDefer'));
        self::assertSame([], $annotations);
    }
}
