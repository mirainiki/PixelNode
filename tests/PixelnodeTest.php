<?php
/**
 * Tests for PixelNode
 */

use PHPUnit\Framework\TestCase;
use Pixelnode\Pixelnode;

class PixelnodeTest extends TestCase {
    private Pixelnode $instance;

    protected function setUp(): void {
        $this->instance = new Pixelnode(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pixelnode::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
