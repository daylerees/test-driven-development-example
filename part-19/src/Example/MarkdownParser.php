<?php

namespace Example;

class MarkdownParser
{
    /**
     * Register parser methods.
     *
     * @var array
     */
    private $parsers = array(
        'bold',
        'images',
        'links'
    );

    /**
     * Parse a Markdown string into HTML.
     *
     * @param  string $source
     * @return string
     */
    public function parse($source)
    {
        foreach ($this->parsers as $parser) {
            $parser = 'parse'.ucfirst($parser);
            $source = call_user_func(array($this, $parser), $source);
        }
        return $source;
    }

    /**
     * Parse bold markdown text to <strong> tag.
     *
     * @param  string $source
     * @return string
     */
    public function parseBold($source)
    {
        $pattern = '/\*\*(.*)\*\*/';
        $replace = '<strong>$1</strong>';
        return preg_replace($pattern, $replace, $source);
    }

    /**
     * Parse [markdown](links) to <a> tags.
     *
     * @param  string $source
     * @return string
     */
    public function parseLinks($source)
    {
        $pattern = '/\[(.*)\]\((.*)\)/';
        $replace = '<a href="$2">$1</a>';
        return preg_replace($pattern, $replace, $source);
    }

    /**
     * Parse ![markdown](img) to <img> tags.
     *
     * @param  string $source
     * @return string
     */
    public function parseImages($source)
    {
        $pattern = '/\!\[(.*)\]\((.*)\)/';
        $replace = '<img src="$2" alt="$1" />';
        return preg_replace($pattern, $replace, $source);
    }
}
