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

    /**
     * Ok we're getting into the swing of things now aren't
     * we? Here we have a failing test for parsing links from
     * our markdown text.
     *
     * We are RED, let's switch to part twelve to make this
     * GREEN.
     */
    public function testLinksCanBeParsed()
    {
        $m = new MarkdownParser;
        $e = 'foo[bar](baz)boo';
        $r = $m->parseBold($e);
        $this->assertEquals('foo<a href="bar">baz</a>boo', $r);
    }
}
