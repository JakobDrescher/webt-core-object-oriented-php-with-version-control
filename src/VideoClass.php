<?php

declare(strict_types=1);
require_once 'VideoInterface.php';


abstract class VideoClass implements VideoInterface
{
    protected string $name;
    protected string $source;

    function __construct(string $source, string $name)
    {
        $this->source = $source;
        $this->name = $name;
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
