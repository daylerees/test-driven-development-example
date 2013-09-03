<?php

use Example\MarkdownParser;

class MarkdownParserTest extends PHPUnit_Framework_TestCase
{
    public function testMarkdownParserCanBeCreated()
    {
        $m = new MarkdownParser;
    }

    public function testBoldTextCanBeParsed()
    {
        $m = new MarkdownParser;
        $e = 'foo**bar**baz';
        $r = $m->parseBold($e);
        $this->assertEquals('foo<strong>bar</strong>baz', $r);
    }

    public function testLinksCanBeParsed()
    {
        $m = new MarkdownParser;
        $e = 'foo[bar](baz)boo';
        $r = $m->parseLinks($e);
        $this->assertEquals('foo<a href="baz">bar</a>boo', $r);
    }

    /**
     * With the functionality complete, now our test passes
     * and is in the GREEN state. All that's left to do is
     * to tie these methods together so that they perform
     * complete(ish) markdown parsing.
     *
     * Switch to part 16.
     */
    public function testImagesCanBeParsed()
    {
        $m = new MarkdownParser;

        $e = 'foo ![bar](baz) boo';
        $r = $m->parseImages($e);
        $this->assertEquals('foo <img src="baz" alt="bar" /> boo', $r);
    }
}
