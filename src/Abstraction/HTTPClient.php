<?php

namespace Codernewbie04\MyTelu\Abstraction;

interface HTTPClient
{
    /**
     * send post request
     *
     * @param  string                $url
     * @param  array                 $data
     * @param  array                 $headers
     * @return \Codernewbie04\MyTelu\ParseResponse
     */
    public function post($url, $data, $headers);

    /**
     * send get request
     *
     * @param  string                $url
     * @param  array                 $data
     * @param  array                 $headers
     * @return \Codernewbie04\MyTelu\ParseResponse
     */
    public function get($url, $data, $headers);
}
