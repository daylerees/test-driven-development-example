<?php

use Example\FileLoader;

class FileLoaderTest extends PHPUnit_Framework_TestCase
{
    /**
     * First we need a way to retrieve markdown data
     * from the filesystem ready for parsing.
     *
     * Let's try to instantiate the FileLoader class
     * to make the test fail.
     */
    public function testFileLoaderClassCanBeCreated()
    {
        $f = new FileLoader;
    }
}
