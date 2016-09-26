<?php

use Example\FileLoader;

class FileLoaderTest extends PHPUnit_Framework_TestCase
{
    public function testFileLoaderClassCanBeCreated()
    {
        $f = new FileLoader;
    }

    /**
     * By providing the file loading content our test now
     * passes. Should we move on to the next feature? Maybe.
     * Actually, I have something else in mind.
     *
     * Switch to part seven to find out!
     */
    public function testFileLoaderCanLoadFileContent()
    {
        $f = new FileLoader;
        $r = $f->get(__DIR__.'/fixtures/simple.md');
        $this->assertEquals("Foo" . PHP_EOL, $r);
    }
}
