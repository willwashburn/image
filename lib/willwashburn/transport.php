<?php namespace willwashburn;

/**
 * Interface Sizer
 */
interface Transport {

    /**
     * We should be able to get the dimensions of the image
     *
     * @param $image_url
     *
     * @return mixed
     */
    public function getDimensions($image_url);

}