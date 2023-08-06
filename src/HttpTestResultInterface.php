<?php

/*
 * A result interface for the result from running a basic HTTP test.
 */


namespace Programster\HttpTesting;

use Programster\Testing\TestResultInterface;
use Psr\Http\Message\ResponseInterface;


interface HttpTestResultInterface extends TestResultInterface
{
    /**
     * Retrieve the test (or a copy of the test), that is responsible for this result.
     * @return HttpTestInterface - The HTTP test that created this result.
     */
    public function getTest() : HttpTestInterface;


    /**
     * Get the HTTP response that resulting from having run the HTTP request in the test.
     * @return ResponseInterface - the response to the HTTP test request.
     */
    public function getRequestResponse() : ResponseInterface;
}