<?php

use Example\FileLoader;

class FileLoaderTest extends PHPUnit_Framework_TestCase
{
    /**
     * With the FileLoader class in place, our test
     * now passes. We don't need to refactor, so let's
     * move on to the next piece of functionality.
     */
    public function testFileLoaderClassCanBeCreated()
    {
        $f = new FileLoader;
    }
}
