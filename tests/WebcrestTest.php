<?php
/**
 * Tests for webCrest
 */

use PHPUnit\Framework\TestCase;
use Webcrest\Webcrest;

class WebcrestTest extends TestCase {
    private Webcrest $instance;

    protected function setUp(): void {
        $this->instance = new Webcrest(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Webcrest::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
