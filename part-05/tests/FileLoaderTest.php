<?php

use Example\FileLoader;

class FileLoaderTest extends PHPUnit_Framework_TestCase
{
    public function testFileLoaderClassCanBeCreated()
    {
        $f = new FileLoader;
    }

    /**
     * We want to be able to access the content of a
     * file easily by using a 'get()' method and passing
     * the file path as the parameter.
     *
     * Our test won't pass yet. We are writing the expected
     * functionality before writing the code to make the
     * class perform as expected.
     *
     * You will find that your code will be a lot cleaner
     * and easier to manage when you first define how you
     * want to use the code, before writing the functionality.
     *
     * Not that we are refering to a fixture file, this will
     * be a dummy file within our tests directory that we
     * can attempt to load to ensure that our code functions
     * as expected. My editor adds a newline to the end of
     * a file so I've added a newline to the expected result.
     *
     * Swap over to part six when you'r ready to implement
     * this functionality.
     */
    public function testFileLoaderCanLoadFileContent()
    {
        $f = new FileLoader;
        $r = $f->get(__DIR__.'/fixtures/simple.md');
        $this->assertEquals("Foo" . PHP_EOL, $r);
    }
}
