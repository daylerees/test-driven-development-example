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
        $this->assertEquals("Foo\n", $r);
    }

    /**
     * Our test functions within the ideal scenario, but the
     * world isn't always so perfect. What happens when we
     * hand the 'get()' method a file that doesn't exist on
     * disk? We should test for this too.
     *
     * Run the tests and you will find that the test fails.
     * It's time for the REFACTOR stage. Now that we have a
     * failing test, we can go and improve our existing code.
     *
     * Switch to part eight.
     */
    public function testFileLoaderReturnsFalseWhenFileDoesNotExist()
    {
        $f = new FileLoader;
        $r = $f->get('file_does_not_exist');
        $this->assertFalse($r);
    }
}
