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

    public function testFileLoaderReturnsFalseWhenFileDoesNotExist()
    {
        $f = new FileLoader;
        $r = $f->get('file_does_not_exist');
        $this->assertFalse($r);
    }
}
