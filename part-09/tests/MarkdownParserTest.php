<?php

use Example\MarkdownParser;

class MarkdownParserTest extends PHPUnit_Framework_TestCase
{
    public function testMarkdownParserCanBeCreated()
    {
        $m = new MarkdownParser;
    }

    /**
     * We should parse each individual markdown syntax
     * individually. So let's start with the bold tag. Text
     * wrapped with double (**) stars should be converted to
     * bold HTML text.
     *
     * First we write a test that fails.
     *
     * Switch to part ten when you're ready to implement
     * the functionality to make this test pass.
     */
    public function testBoldTextCanBeParsed()
    {
        $m = new MarkdownParser;
        $e = 'foo**bar**baz';
        $r = $m->parseBold($e);
        $this->assertEquals('foo<strong>bar</strong>baz', $r);
    }
}
