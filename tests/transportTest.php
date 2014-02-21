<?php

use willwashburn\FastImageTransport;

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
    public function imagesToTestWith()
    {
        return array(
            'images' => array(
                'http://www.willwashburn.com/img/milkman.png')
        );
    }

    /**
     * @author       Will
     *
     * @dataProvider imagesToTestWith
     */
    public function testGetDimensionsIncludesHeightAndWidth($url)
    {

        $image      = new \willwashburn\FastImageTransport;
        $dimensions = $image->getDimensions($url);

        $this->assertArrayHasKey('height', $dimensions);
        $this->assertArrayHasKey('width', $dimensions);
    }
}