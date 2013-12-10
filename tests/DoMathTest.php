<?php
/**
 * Test the math class
 */
final class DoMathTest extends PHPUnit_Framework_TestCase {
    public function testAdd() {
        $obj = new DoMath();
        $this->assertEquals(3, $obj->add(1, 2));
    }
}
