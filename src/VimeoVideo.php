<?php

class VimeoVideo extends VideoClass
{

    /**
     * @inheritDoc
     */
    public function getHTML(): string
    {
        return '<iframe width="560" height="315" src="https://player.vimeo.com/video/' . $this->source . '" title="' . $this->name . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
    }

    /**
     * @inheritDoc
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return $this->name;
    }
}