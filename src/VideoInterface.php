<?php

declare(strict_types=1);
interface Video
{
    public function getHTML(): string;
    public function getSource(): string;
    public function getName(): string;
}