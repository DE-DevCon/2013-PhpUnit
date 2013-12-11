<?php
/**
 * Test the math class
 */
final class DoMathTest extends PHPUnit_Framework_TestCase {
    public function testAddIntegers() {
        $obj = new DoMath();
        $this->assertEquals(3, $obj->add(1, 2));
    }

    public function testAddFloats() {
        $obj = new DoMath();
        $this->assertEquals(1.3, $obj->add(0.5, 0.8));
    }
}
