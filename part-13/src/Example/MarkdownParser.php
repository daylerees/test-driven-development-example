<?php

namespace Example;

class MarkdownParser
{
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
}
