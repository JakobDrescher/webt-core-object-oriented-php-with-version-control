<?php

declare(strict_types=1);
interface VideoInterface
{
    public function getHTML(): string;
    public function getSource(): string;
    public function getName(): string;
}