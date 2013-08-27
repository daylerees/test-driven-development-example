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
     * We write a test to ensure that all of our markdown
     * parser methods are performed when the `parse()` method
     * is called. Of course, this test is going to fail
     * because we are at the RED stage.
     *
     * Let's move to part 17 to make it GREEN.
     */
    public function testCompleteMarkdownCanBeParsed()
    {
        $m = new MarkdownParser;

        $input = 'The **quick** brown [fox](jumped) over the ![lazy](dog).';
        $expected = 'The <strong>quick</strong> brown <a href="jumped">fox</a>.'.
            ' over the <img src="dog" alt="lazy" />';
        $r = $m->parse($input);
        $this->assertEquals($expected, $r);
    }
}
