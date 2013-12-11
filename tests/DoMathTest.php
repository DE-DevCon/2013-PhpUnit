<?php
/**
 * Test the math class
 *
 * @covers DoMath
 */
final class DoMathTest extends PHPUnit_Framework_TestCase {
    /**
     * @covers DoMath::add
     */
    public function testAddIntegers() {
        $obj = new DoMath();
        $this->assertEquals(3, $obj->add(1, 2));
    }

    /**
     * @covers DoMath::add
     */
    public function testAddFloats() {
        $obj = new DoMath();
        $this->assertEquals(1.3, $obj->add(0.5, 0.8));
    }
}
