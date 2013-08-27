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
     * Having implemented our functionality, and running the
     * tests we encountered an error. Take a look. That's a
     * weird result right?
     *
     * It's because the links are parsed before the images.
     * Due to their similar markdown syntax, the images are
     * transformed into links, and then will not be parsed
     * as images.
     *
     * This is a bug that we might not have noticed til much
     * later if we weren't using test driven development.
     *
     * Switch to part 18 to solve this problem.
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
