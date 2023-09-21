<?php

declare(strict_types=1);
require 'VideoInterface.php';


abstract class VideoClass implements VideoInterface
{
    protected string $name;
    protected string $source;
}
