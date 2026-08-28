<?php
/**
 * Tests for SwapWeaver
 */

use PHPUnit\Framework\TestCase;
use Swapweaver\Swapweaver;

class SwapweaverTest extends TestCase {
    private Swapweaver $instance;

    protected function setUp(): void {
        $this->instance = new Swapweaver(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Swapweaver::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
