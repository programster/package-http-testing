<?php

/*
 * A basic interface for an HTTP test.
 */


namespace Programster\HttpTesting;

use Programster\Testing\TestInterface;
use Psr\Http\Message\RequestInterface;

interface HttpTestInterface extends TestInterface
{
    /**
     * Run the test.
     * @return HttpTestResultInterface - the result of the test. This is what is used to determine if the test failed or not.
     */
    public function run() : HttpTestResultInterface;


    /**
     * Get the HTTP request that this test will need to send as part of the test.
     * @return RequestInterface
     */
    public function getRequest() : RequestInterface;
}

