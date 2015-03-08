<?php

namespace Morrisville\Stubs;

require 'ICurlRequest.php';

class CurlRequest implements ICurlRequest
{
    private $handle = null;

    public function __construct() {
        $this->handle = curl_init();
    }

    public function setOption($name, $value) {
        curl_setopt($this->handle, $name, $value);
    }

    public function execute() {
        return curl_exec($this->handle);
    }

    public function getInfo() {
        return curl_getinfo($this->handle);
    }

    public function close() {
        curl_close($this->handle);
    }
}
