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

    public function testImagesCanBeParsed()
    {
        $m = new MarkdownParser;

        $e = 'foo ![bar](baz) boo';
        $r = $m->parseImages($e);
        $this->assertEquals('foo <img src="baz" alt="bar" /> boo', $r);
    }

    /**
     * Great! We have refactored our MarkdownParser class
     * to use an array of parsers. This has reduced the
     * amount of repetition within the parse() method
     * and has made it easier to add a new parser later.
     *
     * We have successfully created a Markdown parser
     * using test-driven development. I hope that you
     * have enjoyed the experience!
     *
     * Until next time!
     * Dayle.
     */
    public function testCompleteMarkdownCanBeParsed()
    {
        $m = new MarkdownParser;

        $input = 'The **quick** brown [fox](jumped) over the ![lazy](dog).';
        $expected = 'The <strong>quick</strong> brown <a href="jumped">fox</a>'.
            ' over the <img src="dog" alt="lazy" />.';
        $r = $m->parse($input);
        $this->assertEquals($expected, $r);
    }
}
