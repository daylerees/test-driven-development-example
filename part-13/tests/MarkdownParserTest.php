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
     * Now that we have written the functionality to parse
     * links, our tests finally pass. Now I'm not going to
     * write a complete markdown parser, there are plenty
     * of good ones already! Let's implement one more parsing
     * method and then tie them together with some glue.
     *
     * When you're ready, switch to part fourteen.
     */
    public function testLinksCanBeParsed()
    {
        $m = new MarkdownParser;
        $e = 'foo[bar](baz)boo';
        $r = $m->parseLinks($e);
        $this->assertEquals('foo<a href="baz">bar</a>boo', $r);
    }
}
