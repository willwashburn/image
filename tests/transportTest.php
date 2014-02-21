<?php

/**
 * Class imageTest
 *
 * @author  Will
 */
class transportTest extends PHPUnit_Framework_TestCase
{
    /**
     * @author  Will
     */
    public function testGetDimensionsIncludesHeight() {

       $image = new \willwashburn\FastImageTransport;
       $dimensions = $image->getDimensions('http://www.willwashburn.com/img/milkman.png');

        $this->assertArrayHasKey('height',$dimensions);
    }
}