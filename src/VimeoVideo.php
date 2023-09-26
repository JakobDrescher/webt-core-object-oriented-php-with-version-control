<?php

declare(strict_types=1);
require_once 'VideoClass.php';

class VimeoVideo extends VideoClass
{
    function __construct(string $source, string $name)
    {
        $this->source = $source;
        $this->name = $name;
    }

    public function getHTML(): string
    {
        return '<iframe width="560" height="315" src="https://player.vimeo.com/video/' . $this->source . '" title="' . $this->name . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
    }


    public function getSource(): string
    {
        return $this->source;
    }

    public function getName(): string
    {
        return $this->name;
    }
}