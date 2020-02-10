<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class some_test extends TestCase
{
    public function testSomething(): void
    {
        $this->assertEquals(1, 1);
    }
}
