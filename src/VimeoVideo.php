<?php

class VimeoVideo extends VideoClass
{

    /**
     * @inheritDoc
     */
    public function getHTML(): string
    {
        // TODO: Implement getHTML() method.
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