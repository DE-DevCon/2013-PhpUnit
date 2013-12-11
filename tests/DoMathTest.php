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

    /**
     * @covers DoMath::add
     */
    public function testAddHandlesNull() {
        $obj = new DoMath();
        // Really Poor assertion
        $this->assertEquals(false, is_null($obj->add(null, 1)));
        // Poor assertion
        $this->assertFalse(is_null($obj->add(null, 1)));
        // Good assertion
        $this->assertNotNull($obj->add(null, 1));
    }

    /**
     * @coversNothing
     */
    public function testNoAssertion() {
        $obj = new DoMath();
        $obj->add(1, 2);
    }
}
