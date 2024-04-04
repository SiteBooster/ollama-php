<?php

namespace Evoware\OllamaPHP\Tests;

use Evoware\OllamaPHP\Traits\MocksHttpRequests;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    use MocksHttpRequests;

    protected $httpClient;
}
