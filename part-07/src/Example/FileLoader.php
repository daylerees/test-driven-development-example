<?php

namespace Example;

class FileLoader
{
    /**
     * Retrieve the contents of a file at a given path.
     *
     * @param  string $path
     * @return string
     */
    public function get($path)
    {
        return file_get_contents($path);
    }
}
