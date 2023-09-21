<?php

declare(strict_types=1);
require 'VideoClass.php';


class YoutubeVideo extends VideoClass
{

    function __construct(string $source, string $name)
    {
        $this->source = $source;
        $this->name = $name;
    }
    function getHTML(): string
    {
        return '<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/' . $this->source . '" title="' . $this->name . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
    }

    function getSource(): string
    {
        return $this->source;
    }

    function getName(): string
    {
        return $this->name;
    }
}
