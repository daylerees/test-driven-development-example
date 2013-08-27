<?php

use Example\MarkdownParser;

class MarkdownParserTest extends PHPUnit_Framework_TestCase
{
    /**
     * Hello there! Today we are going to be doing
     * test-driven development (TDD) to build a simple
     * markdown parsing class.
     *
     * Why a markdown parser? Well I assume that it's
     * going to need a lot of regular expressions, and
     * my regex is terrible! I like to use everything as
     * a learning experience.
     *
     * Let's get started! First we will write a test to
     * instantiate our MarkdownParser class. Wait? The
     * class doesn't exist? That's because we always
     * write our tests first!
     *
     * The idea is to follow the
     *      RED - GREEN - REFACTOR
     * principle.
     *
     * First we will write a test describing how we
     * expect the functionality to work, and ensure
     * that it will fail. That's this part, the RED
     * part. In honesty, the test doesn't have to go
     * RED, as long as it breaks that's just fine!
     *
     * Run the test and then move on to part two!
     */
    public function testMarkdownParserCanBeCreated()
    {
        $m = new MarkdownParser;
    }
}
