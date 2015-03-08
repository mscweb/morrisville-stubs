<?php

namespace Morrisville\Stubs;

interface ICurlRequest
{
    public function setOption($name, $value);
    public function execute();
    public function getInfo();
    public function close();
}
