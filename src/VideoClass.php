<?php
require 'VideoInterface.php';
declare(strict_types=1);

abstract class Video implements Video{
    string $name;
    string $source;
    string $html;
}
?>