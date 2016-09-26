<?php

use Example\FileLoader;

class FileLoaderTest extends PHPUnit_Framework_TestCase
{
    public function testFileLoaderClassCanBeCreated()
    {
        $f = new FileLoader;
    }

    public function testFileLoaderCanLoadFileContent()
    {
        $f = new FileLoader;
        $r = $f->get(__DIR__.'/fixtures/simple.md');
        $this->assertEquals("Foo " . PHP_EOL, $r);
    }

    /**
     * Now the PHP API suggests that the file_get_contents()
     * method returns false on failure, but I found that it
     * triggered an error. Instead I checked for the existance
     * of the the file before loading it.
     *
     * By returning false when the file doesn't exist our
     * test now passes. Can we finally move on to new
     * functionality? Sure, why not.
     *
     * Onwards to part nine!
     */
    public function testFileLoaderReturnsFalseWhenFileDoesNotExist()
    {
        $f = new FileLoader;
        $r = $f->get('file_does_not_exist');
        $this->assertFalse($r);
    }
}
