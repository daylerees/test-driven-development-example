<?php

use Example\MarkdownParser;

class MarkdownParserTest extends PHPUnit_Framework_TestCase
{
    public function testMarkdownParserCanBeCreated()
    {
        $m = new MarkdownParser;
    }

    /**
     * We have written a regular expression replacement to
     * replace **double-stared** text with
     * <strong>tags</strong> so now our test will parse.
     *
     * I can't think of a way to refactor this right now,
     * maybe we are just TOO good? ;)
     *
     * Let's move on to the next parsing method test in
     * part eleven.
     */
    public function testBoldTextCanBeParsed()
    {
        $m = new MarkdownParser;
        $e = 'foo**bar**baz';
        $r = $m->parseBold($e);
        $this->assertEquals('foo<strong>bar</strong>baz', $r);
    }
}
