<?php

declare(strict_types=1);
require 'VideoInterface.php';


abstract class Video implements Video
{
    protected string $name;
    protected string $source;
    protected string $html;
}
