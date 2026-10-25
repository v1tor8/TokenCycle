<?php
/**
 * Tests for TokenCycle
 */

use PHPUnit\Framework\TestCase;
use Tokencycle\Tokencycle;

class TokencycleTest extends TestCase {
    private Tokencycle $instance;

    protected function setUp(): void {
        $this->instance = new Tokencycle(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Tokencycle::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
