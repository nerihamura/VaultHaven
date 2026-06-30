<?php
/**
 * Tests for VaultHaven
 */

use PHPUnit\Framework\TestCase;
use Vaulthaven\Vaulthaven;

class VaulthavenTest extends TestCase {
    private Vaulthaven $instance;

    protected function setUp(): void {
        $this->instance = new Vaulthaven(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Vaulthaven::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
